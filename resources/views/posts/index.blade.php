@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8">
            @foreach ($posts as $post)
            <div class="card mb-3">
                <div class="card-body">
                    <h5 class="card-title">{{ $post->user->name }}</h5>
                    <p class="card-text">{{ $post->content }}</p>
                    @if($post->image_path)
                    <img src="{{ Storage::url($post->image_path) }}" class="img-fluid">
                    @endif
                    <p class="card-text"><small class="text-muted">{{ $post->created_at->diffForHumans() }}</small></p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
