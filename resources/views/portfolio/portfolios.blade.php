@extends('portfolio.layout')

@section('title')
    {{ 'Protfolio' }}
@stop
@section('content')

@include('portfolio.include.header' ,['title'=> 'Portfolio' ,'desc'=>'Start Bootstrap can help you build better websites using the Bootstrap framework! Just download a theme and start customizing, no strings attached!'])
@include('portfolio.include.portfolio')

    <section class="page-section bg-dark text-white">
        <div class="container px-4 px-lg-5 text-center">
            <h2 class="mb-4">Free Download at Start Bootstrap!</h2>
            <a class="btn btn-light btn-xl" href="https://startbootstrap.com/theme/creative/">Download Now!</a>
        </div>
    </section>

@stop
