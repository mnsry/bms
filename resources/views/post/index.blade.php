@extends('layout.master')

@section('description', 'خانه هوشمند')
@section('keywords', 'bms, خانه هوشمند, طراحی bms, برق صنعتی, اتوماسیون خانگی')
@section('title', 'خانه هوشمند')

@section('content')

    <section class="container px-4 py-5 my-5 text-center">
        <div class="row">
            <div class="col-lg-6 col-md-8 mx-auto">
                <h1 class="fw-light">{{ $page->title }}</h1>
            </div>
        </div>
    </section>

    <div class="container-fluid bg-body-tertiary">
        <div class="row justify-content-center p-2">
            @foreach($page->posts as $post)
                <div class="card m-2 p-1" style="max-width: 400px;">
                    <div class="row g-0">
                        <div class="col-8">
                            <div class="card-body">
                                <a href="{{ route('post.show', $post) }}"
                                   class="link-body-emphasis link-underline link-underline-opacity-0">
                                    <h5 class="card-title">{{ $post->title }}</h5>
                                    <p class="card-text">{{ Str::limit($post->excerpt, 90) }}</p>
                                </a>
                            </div>
                        </div>
                        <div class="col-4">
                            <img src="{{ Voyager::Image($post->image) }}" class="img-fluid rounded" alt="{{ $post->title }}">
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

@endsection
