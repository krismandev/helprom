<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Articles;
use App\Models\Category;
use Livewire\WithPagination;

class FeaturedArticles extends Component
{
    public $search = '', $search2 = '';
    public $featured = [], $featured_delete_id = '';
    use WithPagination;
    protected $paginationTheme = 'bootstrap';


    public function empty()
    {
        $this->featured = [];
        $this->resetErrorBag();
        $this->resetValidation();
    }

    //Show modal delete confirmation
    public function deleteConfirmation($slug)
    {
        $this->featured_delete_id = Articles::where('slug', $slug)->first()->id; //tahun_akademik id

        $this->dispatchBrowserEvent('show-delete-confirmation-modal');
    }

    //Delete data
    public function deleteData()
    {
        try {
            Articles::where('id', $this->featured_delete_id)->update([
                'featured' => false
            ]);
            session()->flash('message', 'Artikel berhasil dihapus dari daftar unggulan');
            $this->dispatchBrowserEvent('to-top');
        } catch (\Throwable $th) {
            session()->flash('error', 'Gagal menghapus artikel');
        }
        $this->featured_delete_id = null;
        $this->empty();
    }

    protected $messages = [
        'featured.required' => 'Pilih artikel yang akan ditambahkan ke daftar unggulan terlebih dahulu !',
    ];

    public function saveFeatured()
    {
        $this->validate([
            'featured' => 'required'
        ]);
        foreach ($this->featured as $item) {
            Articles::where('id', $item)->update([
                'featured' => true
            ]);
        }
        $this->empty();
        $this->dispatchBrowserEvent('hide-add-modal');
        session()->flash('message', 'Artikel berhasil ditambahkan ke daftar unggulan');
        $this->dispatchBrowserEvent('to-top');
    }

    public function add()
    {
        $this->empty();
    }
    public function render()
    {
        return view('livewire.featured-articles', [
            'articles' => Articles::where('title', 'like', '%' . $this->search . '%')->where('featured', true)->paginate(10),
            'categories' => Category::all(),
            'nonFeatured' => Articles::where('title', 'like', '%' . $this->search2 . '%')->where('featured', false)->paginate(5)
        ]);
    }
}
