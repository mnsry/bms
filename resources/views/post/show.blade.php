@extends('layout.master')

@section('description', $post->meta_description)
@section('keywords', $post->meta_keywords)
@section('title', $post->title)

@section('content')

    <div class="justify-content-center pt-5">
        <div id="carouselExample" class="carousel slide">
            <div class="carousel-inner">
                @php
                    $number = 0;
                    $images = json_decode($post->images);
                @endphp
                @foreach($images as $image)
                    <div class="carousel-item {{ $number++ }} @if($number == 1) active @endif">
                        <img src="{{ Voyager::Image($image) }}"
                             class="img-fluid d-block mx-auto"
                             alt="{{ $post->title }}">
                    </div>
                @endforeach
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>

    <section class="container-fluid bg-body-secondary px-4 py-4 my-1 text-center">
        <div class="row">
            <div class="col-lg-6 col-md-8 mx-auto">
                <h1 class="fw-light">{{ $post->title }}</h1>
                <p class="lead text-body-secondary">{{ $post->excerpt }}</p>
                <p class="lead text-body-secondary">{!! $post->body !!}</p>            </div>
        </div>
    </section>

@endsection
