@php
    $pages = \TCG\Voyager\Models\Page::all();
@endphp

@extends('layout.master')

@section('description', 'خانه هوشمند')
@section('keywords', 'bms, خانه هوشمند, طراحی bms, برق صنعتی, اتوماسیون خانگی')
@section('title', 'خانه هوشمند')

@section('content')

    <section class="container px-4 py-5 my-5 text-center">
        <div class="row">
            <div class="col-lg-6 col-md-8 mx-auto">
                <h1 class="fw-light">BMS</h1>
                <p class="lead text-body-secondary">به مجموعه سخت افزارها و نرم افزارهائی اطلاق ميشود که به منظور
                    مانيتورینگ و کنترل یکپارچه قسمتهای مهم و حياتی درساختمان نصب ميشوند.
                </p>
            </div>
        </div>
    </section>

    @if(session('form') == 'created' )

        <div class="container">
            <div class="row">
                <div class="col-12 mx-auto">
                    <div class="alert alert-success">
                        <p>درخواست شما ثبت شد.</p>
                    </div>
                </div>
            </div>
        </div>
    @endif

    <div class="album pt-2 bg-body-tertiary">
        <div class="container">
            <div class="row justify-content-center mx-1">
                @foreach($pages as $page)
                    <div class="card my-2" style="max-width: 1000px;">
                        <div class="row">
                            <div class="col-8">
                                <div class="card-body">
                                    <a href="{{ route('post.show', $page) }}"
                                       class="link-body-emphasis link-underline link-underline-opacity-0">
                                        <h5 class="card-title">{{ $page->title }}</h5>
                                        <p class="card-text">{{ $page->excerpt }}</p>
                                        <p class="card-text"><small
                                                class="text-body-secondary">{{ $page->created_at->diffForHumans() }}</small>
                                        </p>
                                    </a>
                                </div>
                            </div>
                            <div class="col-4 py-2">
                                <a href="{{ route('post.show', $page) }}"
                                   class="link-body-emphasis link-underline link-underline-opacity-0">
                                    <img src="{{ Voyager::Image($page->image) }}" height="200"
                                         class="card-img-top rounded"
                                         alt="...">
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

@endsection
