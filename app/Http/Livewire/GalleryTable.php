<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Gallery;
use Illuminate\Support\Str;
use Livewire\WithPagination;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;

class GalleryTable extends Component
{
    use WithFileUploads;
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $title, $image, $existImage, $gallery_edit_id, $gallery_delete_id;
    public $search = '';
    public function rules()
    {
        if ($this->gallery_edit_id !== null) {
            return
                [
                    'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
                    'title' => 'required|unique:galleries,title,' . $this->gallery_edit_id,
                ];
        } else {
            return
                [
                    'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
                    'title' => 'required|unique:galleries,title',
                ];
        }
    }


    //Mengosongkan inputan pada modal
    public function empty()
    {
        $this->title = null;
        $this->image = null;
        $this->gallery_edit_id = null;
        $this->gallery_delete_id = null;
        $this->resetErrorBag();
        $this->resetValidation();
    }

    //Custom Errror messages for validation
    protected $messages = [
        'title.required' => 'Nama kategori wajib diisi !',
        'title.unique' => 'Nama kategori sudah ada !',
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
            'title' => 'required|unique:galleries,title',
        ]);

        $imagePath = $this->image->store('images');

        Gallery::create([
            'title' => $this->title,
            'image_path' => $imagePath
        ]);
        session()->flash('message', 'Data berhasil ditambahkan !');
        $this->empty();
        $this->dispatchBrowserEvent('close-input-modal');
    }

    //show modal edit
    public function edit($id)
    {
        $category = Gallery::where('id', $id)->first();
        $this->title = $category->title;
        $this->image = null;
        $this->existImage = $category->image_path;
        $this->gallery_edit_id = $category->id;
        $this->dispatchBrowserEvent('show-edit-modal');
    }

    //Update data
    public function update()
    {
        if ($this->image) {
            $validation = [
                'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
                'title' => 'required|unique:galleries,title,' . $this->gallery_edit_id,
            ];
        } else {
            $validation = [
                'title' => 'required|unique:galleries,title,' . $this->gallery_edit_id,
            ];
        }
        $this->validate($validation);

        if ($this->image) {
            Storage::delete($this->existImage);
            $this->existImage = $this->image->store('images');
        }
        Gallery::where('id', $this->gallery_edit_id)->update([
            'title' => $this->title,
            'image_path' => $this->existImage
        ]);
        session()->flash('message', 'Data berhasil diedit !');
        $this->empty();
        $this->dispatchBrowserEvent('close-edit-modal');
    }

    //Show modal delete confirmation
    public function deleteConfirmation($id)
    {
        $this->gallery_delete_id = $id; //tahun_akademik id

        $this->dispatchBrowserEvent('show-delete-confirmation-modal');
    }

    //Delete data
    public function deleteData()
    {
        $category = Gallery::where('id', $this->gallery_delete_id)->first();
        try {
            $category->delete();
            // Storage::delete($category->image);
            session()->flash('message', 'Data berhasil dihapus');
        } catch (\Throwable $th) {
            session()->flash('error', 'Data gagal dihapus karena digunakan di dalam sistem');
        }
        $this->gallery_delete_id = null;
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        return view('livewire.gallery-table', [
            'galleries' => Gallery::where('title', 'like', '%' . $this->search . '%')->orderBy('title', 'asc')->paginate(10)
        ]);
    }
}
