@extends('portfolio.layout')
@section('title')
{{'About'}}
@stop
@section('content')

@include('portfolio.include.header' ,['title'=> 'About' ,'desc'=>'Start Bootstrap can help you build better websites using the Bootstrap framework! Just download a theme and start customizing, no strings attached!'])

<section class="page-section bg-primary" id="about">
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-lg-8 text-center">
                <h2 class="text-white mt-0">{{$about['title']}}</h2>
                <hr class="divider divider-light" />
                <p class="text-white-75 mb-4">{{$about['Desc']}}</p>
                <a class="btn btn-light btn-xl" href="#services">Get Started!</a>
            </div>
        </div>
    </div>
</section>


@stop
