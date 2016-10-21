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

        // Post::create([
        //     'title' => [
        //         'en' => 'My Awesome Post',
        //         'fr' => 'Mon Super Article',
        //     ],
        //     'content' => [
        //         'en' => 'This is some cool paragraph',
        //         'fr' => 'Ceci est le contenu stylé de mon article',
        //     ],
        // ]);

        // Post::create([
        //     'title' => [
        //         'en' => 'The Second Amazing Subject',
        //         'fr' => 'Le Deuxième sujet génial',
        //     ],
        //     'content' => [
        //         'en' => 'A very nice text about how things work somewhere',
        //         'fr' => 'Un chouette texte qui vous raconte des choses',
        //     ],
        // ]);
    }
}
