<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class InsertDummyPosts extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'posts:dummy';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $post1 = new Post();
        $post1->title = 'My Awesome Post';
        $post1->content = 'This is some cool paragraph';
        $post1->save();

        $post2 = new Post();
        $post2->title = 'The Second Amazing Subject';
        $post2->content = 'A very nice text about how things work somewhere';
        $post2->save();

        app()->setLocale('fr');

        $post1->title = 'Mon Super Article';
        $post1->content = 'Ceci est le contenu stylé de mon article';
        $post1->save();

        $post2->title = 'Le Deuxième sujet génial';
        $post2->content = 'Un chouette texte qui vous raconte des choses';
        $post2->save();
    }
}
