@extends('layouts.app')

@section('content')
<div class="container">

    <table class="table table-dark table-striped">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Title</th>
                <th scope="col">Categoria</th>
                <th scope="col">Azioni</th>
            </tr>
        </thead>
        <tbody>
            @foreach ( $posts as $post )

                <tr>
                    <th scope="row">{{$post->id}}</th>
                    <td>{{$post->title}}</td>
                    <td>{{$post->category->name}}</td>
                    <td>
                        <a type="button" class="btn btn-warning" href="{{route('admin.posts.show', $post)}}">SHOW</a>
                        <a type="button" class="btn btn-success" href="{{route('admin.posts.edit', $post)}}">EDIT</a>
                        <a type="button" class="btn btn-danger" href="#">SHOW</a>

                    </td>

                </tr>

            @endforeach
        </tbody>
    </table>
</div>
@endsection
