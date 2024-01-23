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
            Sub Album
        </h2>
        <div class="col-6 d-flex justify-content-end align-items-center">
            @if ($temp=="Sub Images Data")
            <span class="tm-text-gray-light"><a class="btn btn-primary" href="{{ url('/sub/data/addWith/') }}/{{ $id }}">Add Sub Images</a></span>&nbsp;&nbsp;
            <span class="tm-text-gray-light"><a class="btn btn-primary" href="{{ url('/main/img/dataWith/add') }}/{{ $id }}">Add Images</a></span>&nbsp;&nbsp;
            <span class="tm-text-gray-light"><a class="btn btn-primary" href="{{ url('/main/vid/dataWith/add') }}/{{ $id }}">Add Videos</a></span>
            @else
            <span class="tm-text-gray-light"><a class="btn btn-primary" href="{{ url('/sub/data/add') }}">Add Sub Images</a></span>&nbsp;&nbsp;
            <span class="tm-text-gray-light"><a class="btn btn-primary" href="{{ url('/main/img/data/add') }}">Add Images</a></span>&nbsp;&nbsp;
            <span class="tm-text-gray-light"><a class="btn btn-primary" href="{{ url('/main/vid/data/add') }}">Add Videos</a></span>
            @endif
        </div>
    </div>
    <div class="row tm-mb-90 tm-gallery">
        @foreach ($salbums as $salbum)
        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-5">
            <figure class="effect-ming tm-video-item">
                <img src="{{ $salbum->s_link }}" width="500px" height="250px" alt="{{ $salbum->s_title }}" >
                <figcaption class="d-flex align-items-center justify-content-center">
                    <h2>{{ $salbum->s_title }}</h2>
                    <a href="{{ url('/admin/sub/subSubClick/') }}/{{ $salbum->s_id }}">{{ $salbum->s_title }}</a>
                </figcaption>
            </figure>
            <div class="d-flex justify-content-between tm-text-gray">
                @if ($temp=="Sub Images Data")
                <span class="tm-text-gray-light"><a class="btn btn-success" href="{{ url('sub/dataClick/edit/') }}/{{ $salbum->s_id }}">Edit</a></span>
                <span class="tm-text-gray-light"><a class="btn btn-danger" href="{{ url('sub/dataClick/delete/') }}/{{ $salbum->s_id }}">Delete</a></span>
                @else
                <span class="tm-text-gray-light"><a class="btn btn-success" href="{{ url('sub/data/edit/') }}/{{ $salbum->s_id }}">Edit</a></span>
                <span class="tm-text-gray-light"><a class="btn btn-danger" href="{{ url('sub/data/delete/') }}/{{ $salbum->s_id }}">Delete</a></span>
                @endif
            </div>
        </div>
        @endforeach
    </div>
    <div class="row tm-mb-90 tm-gallery">
        @foreach ($mialbums as $mialbum)
        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-5">
            <figure class="effect-ming tm-video-item">
                <img src="{{ $mialbum->mI_link }}" width="500px" height="250px" alt="{{ $mialbum->mI_title }}" >
                <figcaption class="d-flex align-items-center justify-content-center">
                    <h2>{{ $mialbum->mI_title }}</h2>
                    <a href="{{ $mialbum->mI_link }}">{{ $mialbum->mI_title }}</a>
                </figcaption>
            </figure>
            <div class="d-flex justify-content-between tm-text-gray">
                @if ($temp=="Sub Images Data")
                <span class="tm-text-gray-light"><a class="btn btn-success" href="{{ url('main/img/dataClick/edit/') }}/{{ $mialbum->mI_id }}">Edit</a></span>
                <span class="tm-text-gray-light"><a class="btn btn-danger" href="{{ url('main/img/dataClick/delete/') }}/{{ $mialbum->mI_id }}">Delete</a></span>
                @else
                <span class="tm-text-gray-light"><a class="btn btn-success" href="{{ url('main/img/data/edit/') }}/{{ $mialbum->mI_id }}">Edit</a></span>
                <span class="tm-text-gray-light"><a class="btn btn-danger" href="{{ url('main/img/data/delete/') }}/{{ $mialbum->mI_id }}">Delete</a></span>
                @endif
            </div>
        </div>
        @endforeach
        @foreach ($mvalbums as $mvalbum)
        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-5">
            <figure class="effect-ming tm-video-item">
                <iframe src="{{ $mvalbum->mV_link }}" width="100%" height="250px" alt="{{ $mvalbum->mV_title }}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
                <figcaption class="d-flex align-items-center justify-content-center">
                    <h2>{{ $mvalbum->mV_title }}</h2>
                    <a href="{{ $mvalbum->mV_link }}">{{ $mvalbum->mV_title }}</a>
                </figcaption>
                </iframe>
            </figure>

            <div class="d-flex justify-content-between tm-text-gray">
                @if ($temp=="Sub Images Data")
                <span class="tm-text-gray-light"><a class="btn btn-success" href="{{ url('main/vid/dataClick/edit/') }}/{{ $mvalbum->mV_id }}">Edit</a></span>
                <span class="tm-text-gray-light"><a class="btn btn-danger" href="{{ url('main/vid/dataClick/delete/') }}/{{ $mvalbum->mV_id }}">Delete</a></span>
                @else
                <span class="tm-text-gray-light"><a class="btn btn-success" href="{{ url('main/vid/data/edit/') }}/{{ $mvalbum->mV_id }}">Edit</a></span>
                <span class="tm-text-gray-light"><a class="btn btn-danger" href="{{ url('main/vid/data/delete/') }}/{{ $mvalbum->mV_id }}">Delete</a></span>
                @endif
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
