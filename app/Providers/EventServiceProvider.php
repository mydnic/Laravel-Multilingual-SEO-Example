<?php

namespace App\Providers;

use App\Post;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;
use \Cviebrock\EloquentSluggable\Services\SlugService;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        'App\Events\SomeEvent' => [
            'App\Listeners\EventListener',
        ],
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();

        // Post::created(function($post) {
        //     foreach (config('languages') as $lang => $language) {
        //         $post->slug = [
        //             $lang => SlugService::createSlug(Post::class, 'slug', $post->title)
        //         ];
        //         $post->save();
        //     }
        // });
    }
}
