@extends('layouts.app')

@section('content')

@if(session()->has('message'))
    <div class="alert alert-success">
        <strong>Success!</strong> {{session()->get('message')}}
    </div>
@endif
                


    <div class="container mx-auto text-center pt-4 pb-2">
        <h1 class="fw-bold">{{$post->title}}</h1>
        <div class="mt-2">
            By: <span class="fst-italic">{{$post->user->name}}</span>
            on <span class="fst-italic">{{date('d-m-y', strtotime($post->updated_at))}}</span>
        </div>
    </div>

    <div class="container row mx-auto pt-4 pb-2 px-4">
        <div class="mx-auto d-flex">
            <img src="/images/{{$post->img_path}}" alt="" style="height:25em; width:100%; border-radius: 15px 50px;">
        </div>
        <div class="lh-lg fs-5 d-flex pt-4 mx-auto" style="width:98%;">
            {{$post->description}}
        </div>

        @if(Auth::user() && Auth::user()->id == $post->user_id)
            <div class="px-3 pt-3">
                <a href="/blog/{{$post->slug}}/edit" class="btn btn-success py-2 link-light rounded py-2 px-3 fs-6 text-uppercase fw-bold d-inline mx-1">edit post</a>
                <form action="/blog/{{$post->slug}}" method="post" class="d-inline">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-danger link-light rounded px-3 fs-6 text-uppercase fw-bold d-inline">delete</button>
                </form>
            </div>
        @endif

        </div>
@endsection