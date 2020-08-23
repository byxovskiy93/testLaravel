<?php

use Illuminate\Database\Seeder;

class ArticleTagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $tags = App\ArticleTag::all();

        App\Article::All()->each(function ($article) use ($tags){
            $article->tag()->attach(
                $tags->random(1)->pluck('id')->toArray()
            );
        });

    }
}
