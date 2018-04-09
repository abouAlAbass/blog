@extends('layouts.app')

@section('content')
  <div class="card">
  <table class="table table-hover">
        <thead>
            <th>Image</th>
            <th>Title</th>
            <th>Edit</th>
            <th>delete</th>
        </thead>
        <tbody>
        @foreach($posts as $post)
            <tr>
                <td>
                <img src='{{"$post->featured"}}' width="30px" height="30px"/>
                </td>
                <td>
                {{ $post->title }}
                </td>
                <td>
                    <a class="btn  btn-info" href="{{ route('post.edit', ['id'=>$post->id]) }}">edit</a>
                </td>
                <td>
                    <a class="btn btn-danger"href="{{ route('post.delete',['id'=>$post->id]) }}">Trash</a>
                </td>
            </tr>    
        @endforeach
        </tbody>
    </table>
  </div>

@endsection
