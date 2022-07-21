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
                    </div>

                    <div class="card-body">
                        {{ $post->content }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
