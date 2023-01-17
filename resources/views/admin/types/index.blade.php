@extends('layouts.admin')

@section('content')
    <div class="container mt-4">
        <h3 class="text-center">La lista dei types</h3>

        {{-- crea --}}
        <div class="row justify-content-end mt-4 mb-4">
            <div class="col-3">
                <a href=" {{ route('admin.types.create') }} " class="btn btn-primary">
                    crea nuovo type
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
                            <th scope="col">Name</th>
                            <th scope="col">Slug</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($types as $type)
                            <tr>
                                <th scope="row">{{ $type->name }}</th>
                                <td>{{ $type->slug }}</td>
                                {{-- area buttoni --}}
                                <td>
                                    <a class="btn btn-success" href="{{ route('admin.types.show', $type->slug) }}">
                                        <i class="fa-solid fa-eye"></i>
                                    </a>
                                    <a class="btn btn-warning" href="{{ route('admin.types.edit', $type->slug) }}">
                                        <i class="fa-solid fa-pen-to-square"></i>
                                    </a>
                                    <form action="{{ route('admin.types.destroy', $type->slug) }}" method="POST"
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
