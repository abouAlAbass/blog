@extends('layouts.app')

@section('content')

<div class="card">
    <div class="card-header">
        Create new category
    </div>
    <div class="card-body">

        <form action="{{route('category.update',['id'=>$category->id])}}" method="post">
                {{ csrf_field() }}

            <div class="form-group">
                <label for="title">name</label>
                <input type="text" name="name" value="{{$category->name}}" id="name"class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" placeholder="Enter title">
                {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
            </div>
         
            <div class="form-group">
                <div class="text-center">
                    <button type="submit" class="btn btn-primary ">update category</button>
                </div>
            </div>

        </form>
    </div>
</div>

@endsection
