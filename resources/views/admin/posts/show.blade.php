@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col">
                <div class="card">
                    <div class="card-header d-inline-flex flex-column">
                        <span class="font-weight-bold" style="font-size: 1.5rem">{{ $post->title }}</span>
                        @if($post->category)
                            <div>
                                <span class="badge badge-primary">{{ $post->category->name }}</span>
                            </div>
                        @endif
                        @if(count($post->tags) > 0)
                            <div class="d-inline-flex mt-1">
                                @foreach($post->tags as $tag)
                                    <span class="badge badge-secondary mr-1">#{{ $tag->name }}</span>
                                @endforeach
                            </div>
                        @endif
                    </div>

                    <div class="card-body">
                        {{ $post->content }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
