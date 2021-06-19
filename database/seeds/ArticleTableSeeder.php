<?php

use App\Article;
use Illuminate\Database\Seeder;

class ArticleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $i = 1;
        $articles = [];

        while ($i < 10) {
            array_push($articles, [
                'title' => "title number " . $i,
                "summary" => "summary number " . $i,
                "content" => "description number " . $i,
                "published"=>1
            ]);
            $i++;
        }

        $c = 1;
        while ($c < count($articles)) {
            $article = new Article();
            
            $article->fill($articles[$c])->save();
            $c++;
        }
    }
}
