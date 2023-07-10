@extends('layout.master')

@section('description', $post->meta_description)
@section('keywords', $post->meta_keywords)
@section('title', $post->title)

@section('content')

    <div class="album py-5">
        <div class="container">
            <div class="row pt-5">
                <div id="carouselExampleIndicators" class="carousel slide">
                    @php
                        $number = 0;
                        $numb = 0;
                        $images = json_decode($post->images);
                    @endphp
                    
                    <div class="carousel-indicators">
                        @foreach($images as $image)
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="{{ $num = $number++ }}"
                                    @if($number == 1) class="active" @endif
                                    aria-current="true" aria-label="Slide {{ $num }}">
                                
                            </button>
                        @endforeach
                    </div>
                    
                    <div class="carousel-inner">
                        @foreach($images as $image)
                            <div class="carousel-item {{ $numb++ }} @if($numb == 1) active @endif">
                                <img src="{{ Voyager::image($post->getThumbnail($image, 'cropped')) }}" class="rounded mx-auto d-block w-100"
                                     alt="...">
                            </div>
                        @endforeach
                    </div>
                    
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                            data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">قبلی</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                            data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">بعدی</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
    
    <section class="bg-body-secondary px-4 py-5 text-center">
        <div class="row">
            <div class="col-lg-6 col-md-8 mx-auto">
                <h1 class="fw-light">{{ $post->title }}</h1>
                <p class="lead text-body-secondary">{{ $post->excerpt }}</p>
                <p class="lead text-body-secondary">{!! $post->body !!}</p>

            </div>
        </div>
    </section>

@endsection
