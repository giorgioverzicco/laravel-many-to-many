@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col">
                <div class="card">
                    <div class="card-header d-inline-flex">
                        <span class="font-weight-bold" style="font-size: 1.5rem">Edit: {{ $tag->name }}</span>
                        <div class="ml-auto">
                            <a class="btn btn-primary" href="{{ route('admin.tags.index') }}" role="button">
                                {{ __('Go back to all tags') }}
                            </a>
                        </div>
                    </div>

                    <div class="card-body">
                        <form action="{{ route('admin.tags.update', $tag->slug) }}" method="POST">
                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label for="tag-name">Name</label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror" id="tag-name" name="name" value="{{ old('name', $tag->name) }}">
                                @error('name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-primary">Edit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
