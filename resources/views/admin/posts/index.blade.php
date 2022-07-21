@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col">
                <div class="card">
                    <div class="card-header d-inline-flex">
                        <span class="font-weight-bold" style="font-size: 1.5rem">Posts</span>
                        <div class="ml-auto">
                            <a class="btn btn-success" href="{{ route('admin.posts.create') }}" role="button">
                                {{ __('Create a new post') }}
                            </a>
                        </div>
                    </div>

                    <div class="card-body">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Title</th>
                                <th scope="col">Slug</th>
                                <th scope="col">Content</th>
                                <th scope="col">Published</th>
                                <th scope="col">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach($posts as $post)
                                    <tr>
                                        <th scope="row">{{ $post->id }}</th>
                                        <td>{{ $post->title }}</td>
                                        <td>{{ $post->slug }}</td>
                                        <td class="text-truncate" style="max-width: 150px">{{ $post->content }}</td>
                                        <td>
                                            <span class="p-2 badge {{ $post->published ? 'badge-success' : 'badge-secondary' }}">
                                                {{ $post->published ? 'Published' : 'Draft' }}
                                            </span>
                                        </td>
                                        <td>
                                            <div class="d-inline-flex">
                                                <a class="btn btn-primary" href="{{ route('admin.posts.show', $post->slug) }}" role="button">
                                                    {{ __('Watch') }}
                                                </a>

                                                <a class="btn btn-warning ml-1" href="{{ route('admin.posts.edit', $post->slug) }}" role="button">
                                                    {{ __('Edit') }}
                                                </a>

                                                <form class="ml-1" action="{{ route('admin.posts.destroy', $post->slug) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')

                                                    <button type="submit" class="btn btn-danger">{{ __('Delete') }}</button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
