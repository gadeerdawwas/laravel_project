<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $ports=[
            [
                'img_1'  => 'fullsize/1.jpg',
                'img_2'  => 'thumbnails/1.jpg',
                'text'   => 'Port 1',
                'title'  => 'Title 1'
            ],
            [
                'img_1'  => 'fullsize/2.jpg',
                'img_2'  => 'thumbnails/2.jpg',
                'text'   => 'Port 2',
                'title'  => 'Title 2'
            ],
            [
                'img_1'  => 'fullsize/3.jpg',
                'img_2'  => 'thumbnails/3.jpg',
                'text'   => 'Port 3',
                'title'  => 'Title 3'
            ],
            [
                'img_1'  => 'fullsize/4.jpg',
                'img_2'  => 'thumbnails/4.jpg',
                'text'   => 'Port 4',
                'title'  => 'Title 4'
            ],
            [
                'img_1'  => 'fullsize/5.jpg',
                'img_2'  => 'thumbnails/5.jpg',
                'text'   => 'Port 5',
                'title'  => 'Title 5'
            ],
            [
                'img_1'  => 'fullsize/6.jpg',
                'img_2'  => 'thumbnails/6.jpg',
                'text'   => 'Port 6',
                'title'  => 'Title 6'
            ]
            ];

            $services=[
                [
                    'icon'  => 'bi-gem',
                    'name'  => 'Sturdy Themes',
                    'title' => 'Our themes are updated regularly to keep them bug free'
                ],
                [
                    'icon'  => 'bi-laptop',
                    'name'  => 'Up to Date',
                    'title' => 'All dependencies are kept current to keep things fresh.'
                ],
                [
                    'icon'  => 'bi-globe',
                    'name'  => 'Ready to Publish',
                    'title' => 'You can use this design as is, or you can make changes!'
                ],
                [
                    'icon'  => 'bi-heart',
                    'name'  => 'Made with Love',
                    'title' => 'Is it really open source if it\'s not made with love?'
                ]
                ];
            view()->share('ports',$ports);
            view()->share('services',$services);
    }
}
