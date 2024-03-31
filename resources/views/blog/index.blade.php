@extends('layouts.admin')

@section('content')

<div class="container">
    <div class="row">
     @foreach ($posts as $post)
    <div class="col-12 col-sm-8 col-md-6 col-lg-4 mb-5">
        <div class="card">
          <img class="card-img" src="{{ asset('images/blog/' . $post->image) }}" alt="{{ $post->title }}" style="width: auto; height:45vh">
          <div class="card-img-overlay">
            <a href="#" class="btn btn-light btn-sm">{{ $post->category->cat_name }}</a>
          </div>
          <div class="card-body">
            <h4 class="card-title">{{ $post->title }}</h4>
           
            <p class="card-text">
                {!! substr($post->content, 0, 100) !!}
            </p>
            
          </div>
        
        </div>
        <a href="{{ route("blog.edit",$post->id) }}" class="btn btn-warning">Edit</a>
            <a href="#" class="btn {{ $post->status == 1 ? "btn-success" : "btn-danger" }}">{{ $post->status == 1 ? "Active" : "Inactive" }}</a>
      </div>
@endforeach

    </div>
  </div>

@endsection