@extends('partials.layout')
@section('title', 'Show Post')
@section('content')
        <div class="container mx-auto">
                <div class="form-control w-full">
                        <div class="label">
                            <span class="label-text">Id</span>
                        </div>
                        <input type="text" name="id" class="input input-bordered w-full" value="{{ $post->id }}" readonly />
                </div>
                <div class="form-control w-full">
                        <div class="label">
                            <span class="label-text">Title</span>
                        </div>
                        <input type="text" name="title" class="input input-bordered w-full" value="{{ $post->title }}" readonly />
                </div>
                <div class="form-control">
                        <div class="label">
                            <span class="label-text">Content</span>
                        </div>
                        <textarea name="body" class="textarea textarea-bordered h-24" readonly>{{ $post->body }}</textarea>
                </div>
        </div>
@endsection