<?php

namespace Database\Seeders;

use App\Models\SiteContentSetting;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        User::create([
            'name' => 'administrator',
            'password' => bcrypt('adminhelprom'),
            'role' => 'admin',
            'email' => 'administrator@gmail.com'
        ]);

        $this->call([
            CategorySeeder::class,
            ArticlesSeeder::class,
            PatientSeeder::class,
            QuestionGroupSeeder::class,
            ListAnswerSeeder::class,
            QuestionSeeder::class,
            KaderSeeder::class,
            SiteContentSettingSeeder::class
        ]);
    }
}
