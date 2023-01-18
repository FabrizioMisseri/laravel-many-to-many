@extends('layouts.admin')

@section('content')
    <div class="container mt-5">
        <form action="{{ route('admin.projects.store') }}" enctype="multipart/form-data" method="POST">
            @csrf
            <div class="row justify-content-center">

                {{-- errors --}}
                @if ($errors->any())
                    <div class="col-8 row mb-3 mt-3 alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>
                                    {{ $error }}
                                </li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                {{-- / errors --}}

                <div class="col-8 row mb-2 form-group">
                    <div class="col-2">
                        <label for="title">title</label>
                    </div>

                    <div class="col-10">
                        <input type="text" name="title" value="{{ old('title') }}" class="form-control">
                    </div>
                </div>

                <div class="col-8 row form-group">
                    <div class="col-2">
                        <label for="description">
                            description
                        </label>
                    </div>

                    <div class="col-10">
                        <textarea name="description" id="description" cols="30" rows="10" class="form-control">{{ old('description') }}</textarea>
                    </div>
                </div>

                {{-- TYPES --}}
                <div class="form-group col-8 row mb-2">
                    <div class="col-2">
                        <label for="type">types</label>
                    </div>
                    <div class="col-10">
                        <select name="type_id" id="type" class="form-select">
                            <option value="">Nessuna tipo</option>
                            @foreach ($types as $type)
                                <option value="{{ $type->id }}" @selected(old('type_id') == $type->id)>
                                    {{ $type->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>
                {{-- / TYPES --}}

                {{-- TECHNOLOGIES CHECKBOX --}}
                <div class="form-group col-8 row mb-2">
                    @foreach ($technologies as $technology)
                        <div class="col-2">
                            <label for="technology-{{ $technology->id }}">
                                {{ $technology->name }}
                            </label>
                            <input type="checkbox" value="{{ $technology->id }}" name="technologies[]"
                                id="technology-{{ $technology->id }}">
                        </div>
                    @endforeach
                </div>
                {{-- TECHNOLOGIES CHECKBOX --}}

                {{-- IMG --}}
                <div class="col-8 row form-group mt-2">
                    <div class="col-2">
                        <label for="cover_image">image</label>
                    </div>

                    <div class="col-10">
                        <input type="file" name="cover_image" id="cover_image">
                    </div>
                </div>
                {{-- / IMG --}}
            </div>


            <div class="row mt-4 mb-5 justify-content-start">
                <div class="offset-2 col-1">
                    <button type="submit" class="btn btn-primary">
                        CREA
                    </button>
                </div>
            </div>
        </form>
    </div>
@endsection
