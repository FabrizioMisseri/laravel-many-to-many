@extends('layouts.admin')

@section('content')

    <div class="container mt-5">
        <form action="{{ route('admin.types.store') }}" enctype="multipart/form-data" method="POST">
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
                        <label for="name">name</label>
                    </div>

                    <div class="col-10">
                        <input type="text" name="name" value="{{ old('name') }}" class="form-control">
                    </div>
                </div>

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
