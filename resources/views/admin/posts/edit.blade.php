@extends('layouts.app')

@section('content')
    <div class="container">

        <form action="{{ route('admin.posts.update', $post) }}" method="POST">
            @method('PUT')
            @csrf

            @if ($errors->any())
                <ul>


                    @foreach ($errors->all() as $error)
                        <div class="alert alert-danger d-flex align-items-center" role="alert">
                            {{-- SVG TRIANGOLO CAUTION ERROR --}}
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img"
                                aria-label="Warning:">
                                <path
                                    d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                            </svg>

                            <li>{{ $error }}</li>

                        </div>
                    @endforeach

                </ul>
            @endif

            <div class="mb-3">
                <label for="title" class="form-label">Titolo*</label>
                <input type="text" class="form-control
            @error('title') is-invalid @enderror" id="title"
                    name="title" value="{{ old('title', $post->title) }}" placeholder="Titolo Random">
                @error('title')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-3">
                <select class="form-select " name="category_id">
                    <option value="">Seleziona una categoria</option>

                    @foreach ($categories as $category)

                        <option value="{{ $category->id }}"
                            @if ($category->id == old('category_id', $post->category? $post->category->id:'')) selected @endif>

                            {{ $category->name }}</option>
                    @endforeach
                </select> <h3>*</h3>
                @error('category_id')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-3">
                <label for="contenet" class="form-label">Contenuto del Post*</label>
                <textarea class="form-control
            @error('contenet') is-invalid @enderror" id="contenet" name="contenet"
                    rows="3">{{ old('contenet', $post->contenet) }}</textarea>
                @error('contenet')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <p>Tutti i campi con * sono da compilare</p>
            <div class="mb-3">
                <button type="submit" class="btn btn-primary mb-3">Completa</button>
                <a type="submit" class="btn btn-primary mb-3" href="{{ route('admin.posts.index') }}">
                    << Go Back</a>
            </div>

        </form>



    </div>
@endsection
