@extends('layouts.app')

@section('content')
<div class="container">

<form action="{{route('admin.posts.store')}}" method="POST">
    @csrf

    <div class="mb-3">
        <label for="title" class="form-label">Titolo*</label>
        <input type="text" class="form-control" id="title" name="title" value="{{old("title")}}" placeholder="Titolo Random">
    </div>
    <div class="mb-3">
        <label for="contenet" class="form-label">Contenuto del Post</label>
        <textarea class="form-control" id="contenet" value="{{old("contenet")}}" name="contenet" rows="3"></textarea>
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-primary mb-3">Completa</button>
    </div>

</form>



</div>
@endsection
