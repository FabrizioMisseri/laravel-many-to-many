@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card mt-4">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        Hello {{ Auth::user()->name }} sei loggato
                    </div>
                </div>
                <div class="mt-4 mb-5">
                    <a href=" {{ route('admin.projects.index') }} " class="btn btn-primary">INDEX</a>
                </div>
            </div>
        </div>

    </div>
@endsection
