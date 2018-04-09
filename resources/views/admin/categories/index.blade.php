@extends('layouts.app')

@section('content')
  <div class="card">
  <table class="table table-hover">
        <thead>
            <th>Category name</th>
            <th>editing</th>
            <th>deleting</th>
        </thead>
        <tbody>
        @foreach($categories as $category)
            <tr>
                <td>
                {{ $category->name }}
                </td>
                <td>
                    <a class="btn  btn-info" href="{{route('category.edit',['id'=>$category->id])}}">edit</a>
                </td>
                <td>
                    <a class="btn btn-danger"href="{{route('category.delete',['id'=>$category->id])}}">delete</a>
                </td>
            </tr>    
        @endforeach
        </tbody>
    </table>
  </div>

@endsection
