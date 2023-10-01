@extends('layouts.app')

@section('content')
    {{-- hero --}}
    <div class="hero-bg-image d-flex flex-column justify-content-center align-items-center">
        <h1 class="text-info pb-2 text-uppercase fw-bold display-4 text-center">Welcome to my Blog</h1>
        <a href="/blog" class="nav-link link-warning rounded bg-white fs-3 py-2 px-4 text-uppercase fw-bold">Start Reading</a>
    </div>

    {{-- how to be expert --}}
    <div class="container mx-auto py-5 row gap-4">

        <div class="col-sm my-3 d-flex">
            <img class="rounded img-fluid" src="https://images.unsplash.com/photo-1502945015378-0e284ca1a5be?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" alt="">
        </div>

        <div class="col-sm d-flex flex-column justify-content-center m-2">
            <h2 class="fw-bold text-info text-uppercase">How to be expert in 2023</h2>
            <p class="fw-bold text-secondary pt-1 h5">
                You can find a list of all programming language here
            </p>
            <p class="py-1 text-muted lh-base">
                get the same round image every time based on a seed, by adding to the start of the url. you may combine any of the options above. for example, to get a specific image that is grayscale and blurred.
            </p>
            <a href="/blog/create" class="link-light rounded btn btn-secondary py-1 px-3 fs-6 align-self-start text-uppercase fw-bold">Start writing your first post</a>
        </div>

    </div>

    {{-- Blog Categories --}}
    <div class="text-center p-5 shadow-sm bg-white">
        <h2>Blog Categories</h2>
        <div class="container mx-auto pt-2 row">
            <a href="/" class="fw-bold py-1 fs-4 col-sm nav-link">UX Design Thinking</a> 
            <a href="/" class="fw-bold py-1 fs-4 col-sm nav-link">Programming Languages</a>
            <a href="/" class="fw-bold py-1 fs-4 col-sm nav-link">Graphic Design</a>
            <a href="/" class="fw-bold py-1 fs-4 col-sm nav-link">Front-End Development</a>
        </div>
    </div>

    {{-- Recent Posts --}}
    <div class="container mx-auto text-center py-5">
        <h2 class="fw-bold py-3">Recent Posts</h2>
        <p class="text-secondary lh-lg px-2 fs-5">PHP is a general-purpose scripting language geared towards web development. It was originally created by Danish-Canadian programmer Rasmus Lerdorf in 1993 and released in 1995. The PHP reference implementation is now produced by the PHP Group. PHP was originally an abbreviation of Personal Home Page, but it now stands for the recursive initialism PHP: Hypertext Preprocessor.</p>
    </div>

    <div class="container mx-auto row">
        <div class="d-flex flex-column bg-warning pt-4 pb-4 col-lg rounded mb-2">
            <div class="d-block m-auto pt-4 pb-4 w-75">
                <ul class="d-sm-flex gap-2 list-inline">
                    <li class="btn btn-info p-2 rounded mb-2">
                        <a href="/" class="nav-link text-muted">PHP</a>
                    </li>
                    <li class="btn btn-info p-2 rounded mb-2">
                        <a href="/" class="nav-link text-muted">Programming</a>
                    </li>
                    <li class="btn btn-info p-2 rounded mb-2">
                        <a href="/" class="nav-link text-muted">Languages</a>
                    </li>
                    <li class="btn btn-info p-2 rounded mb-2">
                        <a href="/" class="nav-link text-muted">Backend</a>
                    </li>
                </ul>
                <h4 class="lh-base py-4">PHP code is usually processed on a web server by a PHP interpreter implemented as a module, a daemon or a Common Gateway Interface (CGI) executable. On a web server, the result of the interpreted and executed PHP code - which may be any type of data.</h4>
                <a href="/" class="link-light rounded btn btn-danger py-2 px-3 fs-6 text-uppercase fw-bold d-inline">Read More</a>
            </div>
        </div>
        <div class="d-flex col-lg mb-2">
            <img class="img-fluid object-fit-cover rounded" src="https://images.unsplash.com/photo-1472289065668-ce650ac443d2?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2069&q=80" alt="">
        </div>
    </div>
@endsection