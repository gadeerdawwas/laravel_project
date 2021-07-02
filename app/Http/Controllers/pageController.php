<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pageController extends Controller
{
    //
    public function index(){
        return view('portfolio.index');
    }
    public function about(){
        $about=[
            'title' => 'We\'ve got what you need!' ,
            'Desc'  => 'Start Bootstrap has everything you need to get your new website up and running in no time! Choose one of our open source, free to download, and easy to use themes! No strings attached!            '
        ];
        return view('portfolio.about' ,compact('about'));
    }

    public function contact(){
        return view('portfolio.contact');
    }
    public function services(){
        // $services=[
        //     [
        //         'icon'  => 'bi-gem',
        //         'name'  => 'Sturdy Themes',
        //         'title' => 'Our themes are updated regularly to keep them bug free'
        //     ],
        //     [
        //         'icon'  => 'bi-laptop',
        //         'name'  => 'Up to Date',
        //         'title' => 'All dependencies are kept current to keep things fresh.'
        //     ],
        //     [
        //         'icon'  => 'bi-globe',
        //         'name'  => 'Ready to Publish',
        //         'title' => 'You can use this design as is, or you can make changes!'
        //     ],
        //     [
        //         'icon'  => 'bi-heart',
        //         'name'  => 'Made with Love',
        //         'title' => 'Is it really open source if it\'s not made with love?'
        //     ]
        //     ];
        // return view('portfolio.services' ,compact('services'));
        return view('portfolio.services' );
    }
    public function portfolio(){
        // $ports=[
        //     [
        //         'img_1'  => 'fullsize/1.jpg',
        //         'img_2'  => 'thumbnails/1.jpg',
        //         'text'   => 'Port 1',
        //         'title'  => 'Title 1'
        //     ],
        //     [
        //         'img_1'  => 'fullsize/2.jpg',
        //         'img_2'  => 'thumbnails/2.jpg',
        //         'text'   => 'Port 2',
        //         'title'  => 'Title 2'
        //     ],
        //     [
        //         'img_1'  => 'fullsize/3.jpg',
        //         'img_2'  => 'thumbnails/3.jpg',
        //         'text'   => 'Port 3',
        //         'title'  => 'Title 3'
        //     ],
        //     [
        //         'img_1'  => 'fullsize/4.jpg',
        //         'img_2'  => 'thumbnails/4.jpg',
        //         'text'   => 'Port 4',
        //         'title'  => 'Title 4'
        //     ],
        //     [
        //         'img_1'  => 'fullsize/5.jpg',
        //         'img_2'  => 'thumbnails/5.jpg',
        //         'text'   => 'Port 5',
        //         'title'  => 'Title 5'
        //     ],
        //     [
        //         'img_1'  => 'fullsize/6.jpg',
        //         'img_2'  => 'thumbnails/6.jpg',
        //         'text'   => 'Port 6',
        //         'title'  => 'Title 6'
        //     ]
        //     ];

        return view('portfolio.portfolios');
        // return view('portfolio.portfolios' ,compact('ports'));
    }
}
