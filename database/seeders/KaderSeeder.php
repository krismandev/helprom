<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Kader;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class KaderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => 'kader1',
            'password' => bcrypt('kader1'),
            'role' => 'kader',
            'email' => 'kader1@gmail.com'
        ]);

        Kader::create([
            'full_name' => 'Khoirul Anam',
            'nip' => '345643264987589175',
            'phone' => '085788787427',
            'user_id' => $user->id
        ]);
    }
}
