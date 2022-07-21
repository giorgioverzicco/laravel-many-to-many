@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col">
                <div class="card">
                    <div class="card-header d-inline-flex">
                        <span class="font-weight-bold" style="font-size: 1.5rem">{{ $category->name }}</span>
                    </div>

                    <div class="card-body">
                        @if(count($category->posts) > 0)
                            <ul>
                                @foreach($category->posts as $post)
                                    <li>
                                        <a href="{{ route('admin.posts.show', $post->slug) }}">
                                            {{ $post->title }}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        @else
                            <p>There are no posts for this category.</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
