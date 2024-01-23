@extends('adminPanel.layouts.main')
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
            @if ($temp=="Sub Images Data")
            <span class="tm-text-gray-light"><a class="btn btn-primary" href="{{ url('/sub/img/data/addWith/') }}/{{ $id }}">Add Images</a></span>&nbsp;&nbsp;
            <span class="tm-text-gray-light"><a class="btn btn-primary" href="{{ url('/sub/vid/data/addWith/') }}/{{ $id }}">Add Videos</a></span>
            @else
            <span class="tm-text-gray-light"><a class="btn btn-primary" href="{{ url('/sub/img/data/add') }}">Add Images</a></span>&nbsp;&nbsp;
            <span class="tm-text-gray-light"><a class="btn btn-primary" href="{{ url('/sub/vid/data/add') }}">Add Videos</a></span>
            @endif
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
            <div class="d-flex justify-content-between tm-text-gray">
                @if ($temp=="Sub Images Data")
                <span class="tm-text-gray-light"><a class="btn btn-success" href="{{ url('sub/img/dataWith/edit/') }}/{{ $sialbum->sI_id }}">Edit</a></span>
                <span class="tm-text-gray-light"><a class="btn btn-danger" href="{{ url('sub/img/dataWith/delete/') }}/{{ $sialbum->sI_id }}">Delete</a></span>
                @else
                <span class="tm-text-gray-light"><a class="btn btn-success" href="{{ url('sub/img/data/edit/') }}/{{ $sialbum->sI_id }}">Edit</a></span>
                <span class="tm-text-gray-light"><a class="btn btn-danger" href="{{ url('sub/img/data/delete/') }}/{{ $sialbum->sI_id }}">Delete</a></span>
                @endif
            </div>
        </div>
        @endforeach
        @foreach ($svalbums as $svalbum)
        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-5">
            <figure class="effect-ming tm-video-item">
                <iframe src="{{ $svalbum->sV_link }}" width="100%" height="250px" alt="{{ $svalbum->sV_title }}" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
                <figcaption class="d-flex align-items-center justify-content-center">
                    <h2>{{ $svalbum->sV_title }}</h2>
                    <a href="{{ $svalbum->sV_link }}">{{ $svalbum->sV_title }}</a>
                </figcaption>
                </iframe>
            </figure>

            <div class="d-flex justify-content-between tm-text-gray">
                @if ($temp=="Sub Images Data")
                <span class="tm-text-gray-light"><a class="btn btn-success" href="{{ url('sub/vid/dataWith/edit/') }}/{{ $svalbum->sV_id }}">Edit</a></span>
                <span class="tm-text-gray-light"><a class="btn btn-danger" href="{{ url('sub/vid/dataWith/delete/') }}/{{ $svalbum->sV_id }}">Delete</a></span>
                @else
                <span class="tm-text-gray-light"><a class="btn btn-success" href="{{ url('sub/vid/data/edit/') }}/{{ $svalbum->sV_id }}">Edit</a></span>
                <span class="tm-text-gray-light"><a class="btn btn-danger" href="{{ url('sub/vid/data/delete/') }}/{{ $svalbum->sV_id }}">Delete</a></span>
                @endif
            </div>
        </div>
        @endforeach
    </div>
    {{-- <div class="row tm-mb-90 tm-gallery">
        @foreach ($svalbums as $svalbum)
        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-5">
            <figure class="effect-ming tm-video-item">
                <img src="{{ $svalbum->sV_link }}" width="500px" height="250px" alt="{{ $svalbum->sV_title }}" >
                <figcaption class="d-flex align-items-center justify-content-center">
                    <h2>{{ $svalbum->sV_title }}</h2>
                    <a href="">{{ $svalbum->sV_title }}</a>
                </figcaption>
            </figure>
            <div class="d-flex justify-content-between tm-text-gray">
                <span class="tm-text-gray-light"><a class="btn btn-success" href="{{ url('sub/vid/data/edit/') }}/{{ $svalbum->sV_id }}">Edit</a></span>
                <span class="tm-text-gray-light"><a class="btn btn-danger" href="{{ url('sub/vid/data/delete/') }}/{{ $svalbum->sV_id }}">Delete</a></span>
            </div>
        </div>
        @endforeach
    </div> --}}
</div>
@endsection
