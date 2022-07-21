@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div>
                        <a class="btn btn-primary" href="{{ route('admin.posts.index') }}" role="button">
                            {{ __('See Posts List') }}
                        </a>
                        <a class="btn btn-success" href="{{ route('admin.posts.create') }}" role="button">
                            {{ __('Create a new post') }}
                        </a>
                    </div>

                    <div class="mt-2">
                        <a class="btn btn-primary" href="{{ route('admin.categories.index') }}" role="button">
                            {{ __('See Categories List') }}
                        </a>
                        <a class="btn btn-success" href="{{ route('admin.categories.create') }}" role="button">
                            {{ __('Create a new category') }}
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
