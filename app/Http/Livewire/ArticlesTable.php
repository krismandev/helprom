<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Articles;
use App\Models\Category;
use Illuminate\Support\Str;
use Livewire\WithPagination;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;

class ArticlesTable extends Component
{
    use WithFileUploads;
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $title, $image, $content, $category_id, $existImage, $article_edit_id, $article_delete_id;
    public $add = false, $edit = false;
    public function rules()
    {
        if ($this->article_edit_id !== null) {
            return
                [
                    'title' => 'required|unique:articles,title,' . $this->article_edit_id,
                    'category_id' => 'required',
                    'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
                    'content' => 'required',
                ];
        } else {
            return
                [
                    'title' => 'required|unique:articles,title',
                    'category_id' => 'required',
                    'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
                    'content' => 'required',
                ];
        }
    }


    //Mengosongkan inputan pada modal
    public function empty()
    {
        $this->title = null;
        $this->image = null;
        $this->content = null;
        $this->category_id = null;
        $this->article_edit_id = null;
        $this->article_delete_id = null;
        $this->resetErrorBag();
        $this->resetValidation();
    }

    //Custom Errror messages for validation
    protected $messages = [
        'title.required' => 'Nama kategori wajib diisi !',
        'title.unique' => 'Nama kategori sudah ada !',
        'content.required' => 'Konten wajib diisi !',
        'category_id.required' => 'Kategori wajib diisi !',
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

    public function add()
    {
        $this->add = true;
        $this->dispatchBrowserEvent('refresh-summernote');
    }
    public function back()
    {
        $this->add = false;
    }

    public function save()
    {
        $this->validate([
            'title' => 'required|unique:articles,title',
            'category_id' => 'required',
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'content' => 'required',
        ]);
        $imagePath = $this->image->store('images');
        $slug = Str::slug($this->title);
        $content = $this->content;
        $dom = new \DomDocument();
        $dom->loadHtml($content, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
        $imageFile = $dom->getElementsByTagName('img');
        foreach ($imageFile as $item => $image) {
            $data = $image->getAttribute('src');
            list($type, $data) = explode(';', $data);
            list(, $data)      = explode(',', $data);
            $imgeData = base64_decode($data);
            $image_name = "/images/" . time() . $item . '.png';
            $path = public_path() . $image_name;
            file_put_contents($path, $imgeData);
            $image->removeAttribute('src');
            $image->setAttribute('src', $image_name);
        }
        $content = $dom->saveHTML();

        Articles::create([
            'title' => $this->title,
            'slug' => $slug,
            'category_id' => $this->category_id,
            'content' => $content,
            'image_path' => $imagePath
        ]);
        $this->add = false;
        session()->flash('message', 'Data berhasil ditambahkan !');
        $this->empty();
    }

    //show modal edit
    public function edit($slug)
    {
        $category = Articles::where('slug', $slug)->first();
        $this->title = $category->name;
        $this->content = $category->content;
        $this->image = null;
        $this->existImage = $category->image;
        $this->article_edit_id = $category->id;
        $this->dispatchBrowserEvent('show-edit-modal');
    }

    //Update data
    public function update()
    {
        if ($this->image) {
            $validation = [
                'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
                'content' => 'required',
                'title' => 'required|unique:articles,title,' . $this->article_edit_id,
            ];
        } else {
            $validation = [
                'content' => 'required',
                'title' => 'required|unique:articles,title,' . $this->article_edit_id,
            ];
        }
        $this->validate($validation);

        if ($this->image) {
            Storage::delete($this->existImage);
            $this->existImage = $this->image->store('images');
        }
        $slug = Str::slug($this->title);
        Articles::where('id', $this->article_edit_id)->update([
            'name' => $this->title,
            'content' => $this->content,
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
        $this->article_delete_id = Articles::where('slug', $slug)->first()->id; //tahun_akademik id

        $this->dispatchBrowserEvent('show-delete-confirmation-modal');
    }

    //Delete data
    public function deleteData()
    {
        $category = Articles::where('id', $this->article_delete_id)->first();
        try {
            Storage::delete($category->image);
            $category->delete();
            session()->flash('message', 'Data berhasil dihapus');
        } catch (\Throwable $th) {
            session()->flash('error', 'Data gagal dihapus karena digunakan di dalam sistem');
        }
        $this->article_delete_id = null;
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        return view('livewire.articles-table', [
            'articles' => Articles::paginate(5),
            'categories' => Category::all()
        ]);
    }
}
