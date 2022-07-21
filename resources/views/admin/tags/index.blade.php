@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col">
                <div class="card">
                    <div class="card-header d-inline-flex">
                        <span class="font-weight-bold" style="font-size: 1.5rem">Tag</span>
                        <div class="ml-auto">
                            <a class="btn btn-success" href="{{ route('admin.tags.create') }}" role="button">
                                {{ __('Create a new tag') }}
                            </a>
                        </div>
                    </div>

                    <div class="card-body">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Slug</th>
                                <th scope="col">Posts Count</th>
                                <th scope="col">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($tags as $tag)
                                <tr>
                                    <th scope="row">{{ $tag->id }}</th>
                                    <td>{{ $tag->name }}</td>
                                    <td>{{ $tag->slug }}</td>
                                    <td>{{ count($tag->posts) }}</td>
                                    <td>
                                        <div class="d-inline-flex">
                                            <a class="btn btn-primary" href="{{ route('admin.tags.show', $tag->slug) }}" role="button">
                                                {{ __('Watch') }}
                                            </a>

                                            <a class="btn btn-warning ml-1" href="{{ route('admin.tags.edit', $tag->slug) }}" role="button">
                                                {{ __('Edit') }}
                                            </a>

                                            <form class="ml-1" action="{{ route('admin.tags.destroy', $tag->slug) }}" method="POST">
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
