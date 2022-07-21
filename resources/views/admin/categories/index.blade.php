@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col">
                <div class="card">
                    <div class="card-header d-inline-flex">
                        <span class="font-weight-bold" style="font-size: 1.5rem">Category</span>
                        <div class="ml-auto">
                            <a class="btn btn-success" href="{{ route('admin.categories.create') }}" role="button">
                                {{ __('Create a new category') }}
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
                                <th scope="col">Posts Count</th>
                                <th scope="col">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach($categories as $category)
                                    <tr>
                                        <th scope="row">{{ $category->id }}</th>
                                        <td>{{ $category->name }}</td>
                                        <td>{{ $category->slug }}</td>
                                        <td>{{ count($category->posts) }}</td>
                                        <td>
                                            <div class="d-inline-flex">
                                                <a class="btn btn-primary" href="{{ route('admin.categories.show', $category->slug) }}" role="button">
                                                    {{ __('Watch') }}
                                                </a>

                                                <a class="btn btn-warning ml-1" href="{{ route('admin.categories.edit', $category->slug) }}" role="button">
                                                    {{ __('Edit') }}
                                                </a>

                                                <form class="ml-1" action="{{ route('admin.categories.destroy', $category->slug) }}" method="POST">
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
