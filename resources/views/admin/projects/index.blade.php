@extends('layouts.admin')

@section('content')
    <div class="container mt-4">
        <h3 class="text-center">La lista dei projects</h3>
        {{-- message --}}
        @if (session('message'))
            <div class="row justify-content-center">
                <div class="col-8 mb-3 mt-3">
                    <p class="alert alert-success">
                        {{ session('message') }}
                    </p>
                </div>
            </div>
        @endif
        {{-- / message --}}

        {{-- crea --}}
        <div class="row justify-content-end mt-4 mb-4">
            <div class="col-3">
                <a href=" {{ route('admin.projects.create') }} " class="btn btn-primary">
                    crea nuovo project
                </a>
            </div>
        </div>
        {{-- / crea --}}

        {{-- TABLE --}}
        <div class="row justify-content-center">
            <div class="col-8">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Titolo</th>
                            <th scope="col">Slug</th>
                            <th scope="col">Description</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($projects as $project)
                            <tr>
                                <th scope="row">{{ $project->title }}</th>
                                <td>{{ $project->slug }}</td>
                                {{-- area buttoni --}}
                                <td>
                                    <a class="btn btn-success" href="{{ route('admin.projects.show', $project->slug) }}">
                                        <i class="fa-solid fa-eye"></i>
                                    </a>
                                    <a class="btn btn-warning" href="{{ route('admin.projects.edit', $project->slug) }}">
                                        <i class="fa-solid fa-pen-to-square"></i>
                                    </a>
                                    <form action="{{ route('admin.projects.destroy', $project->slug) }}" method="POST"
                                        class="d-inline-block">
                                        @method('DELETE')
                                        @csrf
                                        <button class="btn btn-danger" type="submit">
                                            <i class="fa-solid fa-trash"></i>
                                        </button>
                                    </form>
                                </td>
                                {{-- / area buttoni --}}
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        {{-- / TABLE --}}

    </div>
@endsection
