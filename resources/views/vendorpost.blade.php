@extends('layouts.app')
@section('content')
<div class="post-details">
    @forelse ($post_data as $post)
        <h2>{{ $post->name }}</h2>
        <p><strong>Vendor:</strong> {{ $post->vendor_name }}</p> 
        <p><strong>Service:</strong> {{ $post->service_name }}</p> 
        <p><strong>Sub Category:</strong> {{ $post->subservice_name }}</p> 
        <div class="post-images">
            @foreach ($post->image as $image)
                <img src="{{ asset('storage/' . $image) }}" alt="Image of {{ $post->name }}" height="100" width="200">
            @endforeach
        </div>
    @empty
        <h3>No Post Found</h3>
    @endforelse
</div>
@endsection
