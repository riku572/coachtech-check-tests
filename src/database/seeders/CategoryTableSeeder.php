<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            ['id' => 1, 'content' => 'サポート'],
            ['id' => 2, 'content' => '営業'],
            ['id' => 3, 'content' => '技術'],
        ]);
    }
}
