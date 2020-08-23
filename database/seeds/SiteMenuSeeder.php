<?php

use Illuminate\Database\Seeder;

class SiteMenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('site_menu')->insert([
            'name' => 'Главная страница',
            'class' => '',
            'url' => '/',
            'order' => '0',
            'parent_id' => '0',
        ]);

        DB::table('site_menu')->insert([
            'name' => 'Каталог статей',
            'class' => '',
            'url' => '/articles',
            'order' => '1',
            'parent_id' => '0',
        ]);
    }
}
