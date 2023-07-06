<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Category;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class CategoryTable extends Component
{
    use WithFileUploads;
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $nama, $image, $category_edit_id, $category_delete_id;
    public function rules()
    {
        if ($this->category_edit_id !== null) {
            return
                [
                    'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
                    'nama' => 'required|unique:categories,name,' . $this->category_edit_id,
                ];
        } else {
            return
                [
                    'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
                    'nama' => 'required|unique:categories,name',
                ];
        }
    }


    //Mengosongkan inputan pada modal
    public function empty()
    {
        $this->nama = null;
        $this->image = null;
        $this->category_delete_id = null;
        $this->resetErrorBag();
        $this->resetValidation();
    }

    //Custom Errror messages for validation
    protected $messages = [
        'nama.required' => 'Nama kategori wajib diisi !',
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
            'nama' => 'required|unique:categories,name',
        ]);

        $imageName = time() . '.' . $this->image->extension();
        $this->image->store('images');

        $slug = Str::slug($this->nama);
        Category::create([
            'name' => $this->nama,
            'slug' => $slug,
            'image' => $imageName
        ]);
        session()->flash('message', 'Data berhasil ditambahkan !');
        $this->empty();
        $this->dispatchBrowserEvent('close-input-modal');
    }

    //show modal edit
    public function edit($id)
    {
        $category = Category::find($id);
        $this->nama = $category->nama;
        $this->image = $category->image;
        $this->category_edit_id = $id;
        $this->dispatchBrowserEvent('show-edit-modal');
    }

    //Update data
    public function update()
    {
        $this->validate([
            'nama' => 'required|unique:mata_pelajarans,nama,' . $this->mapel_edit_id,
        ]);
        Category::where('id', $this->mapel_edit_id)->update([
            'nama' => $this->nama,
        ]);
        session()->flash('message', 'Data berhasil diedit !');
        $this->empty();
        $this->dispatchBrowserEvent('close-edit-modal');
    }

    //Show modal delete confirmation
    public function deleteConfirmation($id)
    {
        $this->category_delete_id = $id; //tahun_akademik id

        $this->dispatchBrowserEvent('show-delete-confirmation-modal');
    }

    //Delete data
    public function deleteKelasData()
    {
        $category = Category::where('id', $this->category_delete_id)->first();
        try {
            $category->delete();
            session()->flash('message', 'Data berhasil dihapus');
        } catch (\Throwable $th) {
            session()->flash('error', 'Data gagal dihapus karena digunakan di dalam sistem');
        }

        $this->dispatchBrowserEvent('close-modal-delete');

        $this->category_delete_id = '';
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        return view('livewire.category-table', [
            'categories' => Category::paginate(10)
        ]);
    }
}
