<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Category;
use Illuminate\Support\Str;
use Livewire\WithPagination;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;

class CategoryTable extends Component
{
    use WithFileUploads;
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $nama, $image, $description, $existImage, $category_edit_id, $category_delete_id;
    public function rules()
    {
        if ($this->category_edit_id !== null) {
            return
                [
                    'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
                    'description' => 'required',
                    'nama' => 'required|unique:categories,name,' . $this->category_edit_id,
                ];
        } else {
            return
                [
                    'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
                    'description' => 'required',
                    'nama' => 'required|unique:categories,name',
                ];
        }
    }


    //Mengosongkan inputan pada modal
    public function empty()
    {
        $this->nama = null;
        $this->image = null;
        $this->description = null;
        $this->category_edit_id = null;
        $this->category_delete_id = null;
        $this->resetErrorBag();
        $this->resetValidation();
    }

    //Custom Errror messages for validation
    protected $messages = [
        'nama.required' => 'Nama kategori wajib diisi !',
        'description.required' => 'Deskripsi wajib diisi !',
        'nama.unique' => 'Nama kategori sudah ada !',
        'image.image' => 'File harus berupa gambar',
        'image.required' => 'File gambar tidak boleh kosong',
        'image.mimes' => 'File gambar harus memiliki format gambar(jpg,png,jpeg,gif,svg)',
        'image.max' => 'File gambar maksimal berukuran 2Mb'
    ];

    //Reatime Validation
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function save()
    {
        $this->validate([
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'description' => 'required',
            'nama' => 'required|unique:categories,name',
        ]);

        $imagePath = $this->image->store('images');

        $slug = Str::slug($this->nama);
        Category::create([
            'name' => $this->nama,
            'slug' => $slug,
            'description' => $this->description,
            'image' => $imagePath
        ]);
        session()->flash('message', 'Data berhasil ditambahkan !');
        $this->empty();
        $this->dispatchBrowserEvent('close-input-modal');
    }

    //show modal edit
    public function edit($slug)
    {
        $category = Category::where('slug', $slug)->first();
        $this->nama = $category->name;
        $this->description = $category->description;
        $this->image = null;
        $this->existImage = $category->image;
        $this->category_edit_id = $category->id;
        $this->dispatchBrowserEvent('show-edit-modal');
    }

    //Update data
    public function update()
    {
        if ($this->image) {
            $validation = [
                'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
                'description' => 'required',
                'nama' => 'required|unique:categories,name,' . $this->category_edit_id,
            ];
        } else {
            $validation = [
                'description' => 'required',
                'nama' => 'required|unique:categories,name,' . $this->category_edit_id,
            ];
        }
        $this->validate($validation);

        if ($this->image) {
            Storage::delete($this->existImage);
            $this->existImage = $this->image->store('images');
        }
        $slug = Str::slug($this->nama);
        Category::where('id', $this->category_edit_id)->update([
            'name' => $this->nama,
            'description' => $this->description,
            'slug' => $slug,
            'image' => $this->existImage
        ]);
        session()->flash('message', 'Data berhasil diedit !');
        $this->empty();
        $this->dispatchBrowserEvent('close-edit-modal');
    }

    //Show modal delete confirmation
    public function deleteConfirmation($slug)
    {
        $this->category_delete_id = Category::where('slug', $slug)->first()->id; //tahun_akademik id

        $this->dispatchBrowserEvent('show-delete-confirmation-modal');
    }

    //Delete data
    public function deleteData()
    {
        $category = Category::where('id', $this->category_delete_id)->first();
        try {
            $category->delete();
            // Storage::delete($category->image);
            session()->flash('message', 'Data berhasil dihapus');
        } catch (\Throwable $th) {
            session()->flash('error', 'Data gagal dihapus karena digunakan di dalam sistem');
        }
        $this->category_delete_id = null;
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        return view('livewire.category-table', [
            'categories' => Category::paginate(5)
        ]);
    }
}
