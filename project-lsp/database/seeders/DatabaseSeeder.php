<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'jenis' => 'Undangan'
        ]);
        Category::create([
            'jenis' => 'Pengumuman'
        ]);
        Category::create([
            'jenis' => 'Nota Dinas'
        ]);
        Category::create([
            'jenis' => 'Pemberitahuan'
        ]);
    }
}