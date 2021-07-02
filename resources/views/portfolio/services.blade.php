@extends('portfolio.layout')
@section('title')
{{'Services'}}
@stop

@section('content')

@include('portfolio.include.header' ,['title'=> 'Services' ,'desc'=>'Start Bootstrap can help you build better websites using the Bootstrap framework! Just download a theme and start customizing, no strings attached!'])
@include('portfolio.include.services')

{{-- <section class="page-section" id="services">
    <div class="container px-4 px-lg-5">
        <h2 class="text-center mt-0">At Your Service</h2>
        <hr class="divider" />
        <div class="row gx-4 gx-lg-5">

            @foreach ($services as $service)
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="mt-5">
                        <div class="mb-2"><i class="{{$service['icon']}} fs-1 text-primary"></i></div>
                        <h3 class="h4 mb-2">{{$service['name']}}</h3>
                        <p class="text-muted mb-0">{{$service['title']}}</p>
                    </div>
                </div>
            @endforeach


        </div>
    </div>
</section> --}}
<!-- Portfolio-->


@stop
