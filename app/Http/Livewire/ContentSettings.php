<?php

namespace App\Http\Livewire;

use App\Models\SiteContentSetting;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;


class ContentSettings extends Component
{
    public $content, $homepage, $about, $member, $contact;

    public function mount()
    {
        $this->content = SiteContentSetting::first()->content;
        $this->homepage = $this->content['homepage'];
        $this->about = $this->content['about'];
        $this->member = $this->content['member'];
        $this->contact = $this->content['contact'];
    }

    public function update()
    {
        //DELETE IMAGE BEFORE CONTENT
        foreach ($this->content as $c) {
            if ($c !== '') {
                $before = $c;
                libxml_use_internal_errors(true);
                $dom = new \DomDocument();
                $dom->loadHtml($before);
                $imageFile = $dom->getElementsByTagName('img');
                foreach ($imageFile as $item => $image) {
                    $data = $image->getAttribute('src');
                    $imageStorage = str_replace('/storage', '', $data);
                    Storage::delete($imageStorage);
                }
            }
        }

        // SAVE NEW CONTENT

        // HOMEPAGE
        libxml_use_internal_errors(true);
        $homepage = $this->homepage;
        $dom = new \DomDocument();
        $dom->loadHtml($homepage, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);

        $imageFile = $dom->getElementsByTagName('img');

        foreach ($imageFile as $item => $image) {
            $data = $image->getAttribute('src');
            if (preg_match('/data:image/', $data)) {
                list($type, $data) = explode(';', $data);
                list(, $data)      = explode(',', $data);
                $imgeData = base64_decode($data);
                $image_name = "/article-images/" . time() . $item . '.png';
                Storage::put($image_name, $imgeData);
                $image->removeAttribute('src');
                $image->setAttribute('src', '/storage' . $image_name);
            }
        }
        $homepage = $dom->saveHTML();


        // ABOUT
        libxml_use_internal_errors(true);
        $about = $this->about;
        $dom = new \DomDocument();
        $dom->loadHtml($about, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);

        $imageFile = $dom->getElementsByTagName('img');

        foreach ($imageFile as $item => $image) {
            $data = $image->getAttribute('src');
            if (preg_match('/data:image/', $data)) {
                list($type, $data) = explode(';', $data);
                list(, $data)      = explode(',', $data);
                $imgeData = base64_decode($data);
                $image_name = "/article-images/" . time() . $item . '.png';
                Storage::put($image_name, $imgeData);
                $image->removeAttribute('src');
                $image->setAttribute('src', '/storage' . $image_name);
            }
        }
        $about = $dom->saveHTML();


        // Member
        libxml_use_internal_errors(true);
        $member = $this->member;
        $dom = new \DomDocument();
        $dom->loadHtml($member, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);

        $imageFile = $dom->getElementsByTagName('img');

        foreach ($imageFile as $item => $image) {
            $data = $image->getAttribute('src');
            if (preg_match('/data:image/', $data)) {
                list($type, $data) = explode(';', $data);
                list(, $data)      = explode(',', $data);
                $imgeData = base64_decode($data);
                $image_name = "/article-images/" . time() . $item . '.png';
                Storage::put($image_name, $imgeData);
                $image->removeAttribute('src');
                $image->setAttribute('src', '/storage' . $image_name);
            }
        }
        $member = $dom->saveHTML();


        // Contact
        libxml_use_internal_errors(true);
        $contact = $this->contact;
        $dom = new \DomDocument();
        $dom->loadHtml($contact, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);

        $imageFile = $dom->getElementsByTagName('img');

        foreach ($imageFile as $item => $image) {
            $data = $image->getAttribute('src');
            if (preg_match('/data:image/', $data)) {
                list($type, $data) = explode(';', $data);
                list(, $data)      = explode(',', $data);
                $imgeData = base64_decode($data);
                $image_name = "/article-images/" . time() . $item . '.png';
                Storage::put($image_name, $imgeData);
                $image->removeAttribute('src');
                $image->setAttribute('src', '/storage' . $image_name);
            }
        }
        $contact = $dom->saveHTML();

        SiteContentSetting::where('id', 1)->update([
            'content' => [
                'homepage' => $homepage,
                'about' => $about,
                'member' => $member,
                'contact' => $contact,
            ]
        ]);

        session()->flash('message', 'Konten berhasil diperbarui !');

        $this->dispatchBrowserEvent('to-top');
    }
    public function render()
    {
        return view('livewire.content-settings');
    }
}
