@extends('adminPanel.layouts.main')
@section('main-container')

    <div class="tm-hero d-flex justify-content-center align-items-center" data-parallax="scroll" data-image-src="{{ url('frontend/img/hero.jpg') }}">
        <form class="d-flex tm-search-form">
            <input class="form-control tm-search-input" type="search" placeholder="Search" name="search" aria-label="Search">
            <button class="btn btn-outline-success tm-search-btn" type="submit">
                <i class="fas fa-search"></i>
            </button>
        </form>
    </div>
    <div class="container-fluid tm-container-content tm-mt-60">
        <div class="row mb-4">
            <h2 class="col-6 tm-text-primary">
                Main Album
            </h2>
            <div class="col-6 d-flex justify-content-end align-items-center">
                <span class="tm-text-gray-light"><a class="btn btn-primary" href="{{ url('/main/data/add') }}">Add</a></span>
            </div>
        </div>
        <div class="row tm-mb-90 tm-gallery">
            @foreach ($malbums as $malbum)
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-5">
                <figure class="effect-ming tm-video-item">
                    <img src="{{ $malbum->m_link }}" width="500px" height="250px" alt="{{ $malbum->m_title }}" >
                    <figcaption class="d-flex align-items-center justify-content-center">
                        <h2>{{ $malbum->m_title }}</h2>
                        <a href="{{ url('/admin/sub/subClick/') }}/{{ $malbum->m_id }}">{{ $malbum->m_title }}</a>
                    </figcaption>
                </figure>
                <div class="d-flex justify-content-between tm-text-gray">
                    <span class="tm-text-gray-light"><a class="btn btn-success" href="{{ url('main/data/edit/') }}/{{ $malbum->m_id }}">Edit</a></span>
                    <span class="tm-text-gray-light"><a class="btn btn-danger" href="{{ url('main/data/delete/') }}/{{ $malbum->m_id }}">Delete</a></span>
                </div>
            </div>
            @endforeach
        </div>
    </div>

@endsection
