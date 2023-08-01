<?php

namespace Database\Seeders;

use App\Models\SiteContentSetting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SiteContentSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SiteContentSetting::create([
            'content' => ['homepage' => '', 'about' => '', 'member' => '', 'contact' => '']
        ]);
    }
}
