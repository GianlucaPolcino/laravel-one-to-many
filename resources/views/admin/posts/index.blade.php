@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <h1>
                Tutti i Post
            </h1>

            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Titolo</th>
                    <th scope="col" colspan="3" class="text-center">Azioni</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($posts as $post)
                    <tr>
                        <td>{{$post->id}}</td>
                        <td>{{$post->title}}</td>
                        <td><a href="{{route('admin.posts.show', $post)}}" class="btn btn-success">Vedi</a></td>
                        <td><a href="{{route('admin.posts.edit', $post)}}" class="btn btn-warning">Modifica</a></td>

                        <td>
                          <form onsubmit="return confirm('Sei sicuro di eliminare il post: {{$post->title}}?')" action="{{route('admin.posts.destroy', $post)}}" method="POST">
                            @csrf
                            @method('DELETE')

                            <button type="submit" class="btn btn-danger">Elimina</button>
                          </form>
                        </td>
                    </tr>
                  @endforeach
                </tbody>
              </table>

              {{$posts->links()}}
        </div>
    </div>
@endsection

@section('title')
    Lista dei post
@endsection