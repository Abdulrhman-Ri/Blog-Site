@extends('layouts.app')

@section('content')
    <div class="container mx-auto text-center pt-4 pb-2">
        <h1 class="fw-bold">{ Add Post }</h1>
    </div>

    <div class="container mx-auto pt-4 pb-2 min-vh-100">
        <form action="/blog" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="text" name="title" placeholder="Title" class="w-100 fs-5 px-3 py-2 mb-3 form-control no-border shadow-sm">
            <textarea name="description" placeholder="Description" class="w-100 fs-5 px-3 py-2 mb-3 form-control no-border shadow-sm form-control" rows="4" style="resize: none"></textarea>
            <label for="" class="d-flex shadow-sm rounded border fs-6 mb-3">
                <span class="col-xl-2 my-auto text-center px-2">Choose Image Your Post</span>
                <input class="form-control form-control-lg shadow-sm fs-5" id="formFileLg" type="file" name="image">
            </label>
            <button type="submit" class="btn btn-success py-2 px-3 fs-5 text-uppercase fw-bold mb-3">add post</button>
        </form>
    </div>
@endsection