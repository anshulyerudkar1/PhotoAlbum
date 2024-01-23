@extends('frontend.layout.main')
@section('main-container')
    <div class="tm-hero d-flex justify-content-center align-items-center" data-parallax="scroll" data-image-src="{{ url('frontend/img/hero.jpg') }}">
        <form class="d-flex tm-search-form">
            {{-- <input class="form-control tm-search-input" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success tm-search-btn" type="submit">
                <i class="fas fa-search"></i>
            </button> --}}
        </form>
    </div>

    <div class="container-fluid tm-container-content tm-mt-60">
        <div class="row mb-4">
            <h2 class="col-6 tm-text-primary">
                Sub Sub Album
            </h2>
            <div class="col-6 d-flex justify-content-end align-items-center">
                <form action="" class="tm-text-primary">
                    Page <input type="text" value="1" size="1" class="tm-input-paging tm-text-primary"> of 10
                </form>
            </div>
        </div>
        <div class="row tm-mb-90 tm-gallery">
            @foreach ($sialbums as $sialbum)
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-5">
                <figure class="effect-ming tm-video-item">
                    <img src="{{ $sialbum->sI_link }}" width="500px" height="250px" alt="{{ $sialbum->sI_title }}" >
                    <figcaption class="d-flex align-items-center justify-content-center">
                        <h2>{{ $sialbum->sI_title }}</h2>
                        <a href="{{ $sialbum->sI_link }}">{{ $sialbum->sI_title }}</a>
                    </figcaption>
                </figure>
                <div class="d-flex justify-content-center tm-text-gray">
                    <span class="tm-text-gray-light"><a href="{{ $sialbum->sI_link }}">{{ $sialbum->sI_title }}</a></span>
                </div>
            </div>
            @endforeach
            @foreach ($svalbums as $svalbum)
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-5">
                <figure class="effect-ming tm-video-item">
                    <iframe src="{{ $svalbum->sV_link }}" width="100%" height="250px" alt="{{ $svalbum->sV_title }}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
                    <figcaption class="d-flex align-items-center justify-content-center">
                        <h2>{{ $svalbum->sV_title }}</h2>
                        <a href="{{ $svalbum->sV_link }}">{{ $svalbum->sV_title }}</a>
                    </figcaption>
                    </iframe>
                </figure>

                <div class="d-flex justify-content-center tm-text-gray">
                    <span class="tm-text-gray-light"><a href="">{{ $svalbum->sV_title }}</a></span>
                </div>
            </div>
            @endforeach
        </div> <!-- row -->
        <div class="row tm-mb-90">
            <div class="col-12 d-flex justify-content-between align-items-center tm-paging-col">
                {{-- <a href="{{ $sialbums->previousPageUrl() }}" class="btn btn-primary tm-btn-prev mb-2">Previous</a>
                <div class="tm-paging d-flex">

                </div>
                <a href="{{ $sialbums->nextPageUrl() }}" class="btn btn-primary tm-btn-next">Next Page</a> --}}
            </div>
        </div>
    </div> <!-- container-fluid, tm-container-content -->

    @endsection
