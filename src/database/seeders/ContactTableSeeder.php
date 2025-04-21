<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contacts')->insert([
            'first_name' => '太郎',
            'last_name' => '山田',
            'email' => 'yamada@exaple.com',
            'category_id' => 1,
            'tel' => '090-1234-5678',
            'address' => '東京都渋谷区',
            'building' => '',
            'detail' => 'お問い合わせ内容詳細です。',
        ]);
    }
}
