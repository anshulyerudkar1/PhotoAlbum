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
                Main Album
            </h2>
            <div class="col-6 d-flex justify-content-end align-items-center">
                <form action="" class="tm-text-primary">
                    Page {{ $malbums->currentPage() }} of {{ $malbums->lastPage() }}
                </form>
            </div>
        </div>
        <div class="row tm-mb-90 tm-gallery">
            @foreach ($malbums as $malbum)
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-5">
                <figure class="effect-ming tm-video-item">
                    <img src="{{ $malbum->m_link }}" width="500px" height="250px" alt="{{ $malbum->m_title }}" >
                    <figcaption class="d-flex align-items-center justify-content-center">
                        <h2>{{ $malbum->m_title }}</h2>
                        <a href="{{ url('/sub/') }}/{{ $malbum->m_id }}">{{ $malbum->m_title }}</a>
                    </figcaption>
                </figure>
                <div class="d-flex justify-content-center tm-text-gray">
                    <span class="tm-text-gray-light"><a href="{{ url('/sub') }}/{{ $malbum->m_id }}">{{ $malbum->m_title }}</a></span>
                </div>
            </div>
            @endforeach
        </div> <!-- row -->
        <div class="row tm-mb-90">
            <div class="col-12 d-flex justify-content-between align-items-center tm-paging-col">
                <a href="{{ $malbums->previousPageUrl() }}" class="btn btn-primary tm-btn-prev mb-2">PREVIOUS</a>
                <div class="tm-paging d-flex">
                    {{-- <a href="{{ $malbums->getOptions() }}" class="active tm-paging-link">1</a> --}}
                    {{-- <a href="javascript:void(0);" class="tm-paging-link">2</a>
                    <a href="javascript:void(0);" class="tm-paging-link">3</a>
                    <a href="javascript:void(0);" class="tm-paging-link">4</a> --}}
                </div>
                <a href="{{ $malbums->nextPageUrl() }}" class="btn btn-primary tm-btn-next">NEXT</a>
            </div>
        </div>
    </div> <!-- container-fluid, tm-container-content -->

    @endsection
