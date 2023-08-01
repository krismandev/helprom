<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class LoginForm extends Component
{
    public $email;
    public $password;

    protected $rules = [
        'email' => 'required|email:rfc',
        'password' => 'required|min:8'
    ];

    protected $messages = [
        'email.required' => 'Email wajib diisi !',
        'email.email' => 'Field harus memiliki format email !',
        'password.required' => 'Password wajib diisi !',
        'password.min' => 'Password harus terdiri dari min 8 karakter'
    ];

    public function render()
    {
        return view('livewire.login-form');
    }

    public function updated($propertyName)
    {

        $this->validateOnly($propertyName);
    }

    public function authenticate()
    {
        $validatedData = $this->validate();
        if (Auth::attempt($validatedData)) {
                request()->session()->regenerate();
                return redirect()->intended('/dashboard');
        } else {
            return redirect('/login')->with('loginError', 'Username atau Password Anda salah!!');
        }
    }
}
