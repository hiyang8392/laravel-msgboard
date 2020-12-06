@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @foreach($posts as $idx => $post)
            <div class="card">
                <div class="card-header">
                    #{{ $idx + 1 }} {{ $post->title }} | {{ $post->created_at }}
                    @auth
                    <a href="{{ route('posts.edit', [$post->id]) }}">(Edit)</a>
                    @endauth
                </div>

                <div class="card-body">
                    {{ $post->content }}
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
