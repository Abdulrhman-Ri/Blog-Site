@extends('layouts.app')

@section('content')

@if(session()->has('message'))
    <div class="alert alert-danger">
        <strong>Deleted!</strong> {{session()->get('message')}}
    </div>
@endif

    <div class="container m-auto text-center pt-4 pb-2">
        <h1 class="fw-bold">{ All Posts }</h1>
    </div>

    @if(Auth::check())
        <div class="container mx-auto p-4 border-bottom border-secondary">
            <a href="/blog/create" class="btn btn-success py-2 px-3 fs-5 text-uppercase fw-bold link-light">Add New Post</a>
        </div>
    @endif
    
    @foreach ($posts as $post)
        <div class="container mx-auto row py-5 px-3 gap-4 border-bottom border-secondary">
            <div class="col-md d-flex">
                <img src="/images/{{$post->img_path}}" alt="" class="rounded img-fluid">
            </div>

            <div class="col-md d-flex flex-column justify-content-center">
                <h2 class="text-secondary fw-bold pb-3">
                    {{$post->title}}
                </h2>
                <div>
                    By: <span class="fst-italic">{{$post->user->name}}</span>
                    on <span class="fst-italic">{{date('d-m-y', strtotime($post->updated_at))}}</span>
                    <p class="lh-lg py-3">{{$post->description}}</p>
                    <a href="/blog/{{$post->slug}}" class="btn btn-primary link-light rounded py-2 px-3 fs-6 text-uppercase fw-bold d-inline">Read More</a>

                    @if(Auth::user() && Auth::user()->id == $post->user_id)
                        <a href="/blog/{{$post->slug}}/edit" class="btn btn-success link-light rounded py-2 px-3 fs-6 text-uppercase fw-bold d-inline mx-1">edit post</a>
                        <form action="/blog/{{$post->slug}}" method="post" class="d-inline">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger link-light rounded px-3 fs-6 text-uppercase fw-bold d-inline">delete</button>
                        </form>
                    @endif
                </div>
            </div>
        </div>
    @endforeach

@endsection