<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery</title>
    <link rel="stylesheet" href="{{ url('frontend/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ url('frontend/fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ url('frontend/css/templatemo-style.css') }}">
<!--

TemplateMo 556 Catalog-Z

https://templatemo.com/tm-556-catalog-z

-->
</head>
<body>
    <!-- Page Loader -->
    <div id="loader-wrapper">
        <div id="loader"></div>

        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>

    </div>
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ url('/admin') }}">
                <i class="fas fa-film mr-2"></i>
                Admin Panel
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link nav-link-1" aria-current="page" href="{{ url('/admin') }}">Main Album</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-link-3" href="{{ url('/admin/sub') }}">Sub Album</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-link-3" href="{{ url('/admin/sub/img') }}">Sub Sub Album</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-link-3" href="{{ url('/admin/logout') }}">Log Out</a>
                </li>
            </ul>
            </div>
        </div>
    </nav>
