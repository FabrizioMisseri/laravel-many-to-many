@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row mt-4">
            <div class="col-8 offset-2">
                <h1 class="mt-3">{{ $type->name }}</h1>
                <div class="mt-3">
                    <h5>{{ $type->slug }}</h5>
                    <ul>
                        @foreach ($projects as $project)
                            <li>
                                {{ $project->title }}
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
