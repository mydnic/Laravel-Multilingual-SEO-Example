<?php

use Illuminate\Database\Seeder;
use App\Post;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Post::truncate();

        Post::create([
            'en' => [
                'title' => 'My Awesome Post',
                'content' => 'This is some cool paragraph',
            ],
            'fr' => [
                'title' => 'Mon Super Article',
                'content' => 'Ceci est le contenu stylé de mon article',
            ],
        ]);

        Post::create([
            'en' => [
                'title' => 'The Second Amazing Subject',
                'content' => 'A very nice text about how things work somewhere',
            ],
            'fr' => [
                'title' => 'Le Deuxième sujet génial',
                'content' => 'Un chouette texte qui vous raconte des choses',
            ],
        ]);
    }
}
