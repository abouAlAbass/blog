@extends('layouts.app')

@section('content')

<div class="card">
    <div class="card-header">
        Create new post
    </div>
    <div class="card-body">


    @if(count($errors)>0)
        @foreach($errors->all() as $error)
        <p>{{$error}}</p>
        @endforeach
    @endif
        <form action="{{route('post.store')}}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}

            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" value="{{ old('title') }}" id="title"class="form-control {{ $errors->has('title') ? 'is-invalid' : '' }}" placeholder="Enter title">
                {!! $errors->first('title', '<div class="invalid-feedback">:message</div>') !!}
            </div>
            <div class="form-group">
                <label for="category">Select a category</label>
                <select name="category_id" id="category" class="form-control {{ $errors->has('title') ? 'is-invalid' : '' }}">
                    @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="featured">Featured Image</label>
                <input type="file" name="featured"  id="featured" class="form-control {{ $errors->has('featured') ? 'is-invalid' : ''}} ">
                    {!! $errors->first('featured', '<div class="invalid-feedback">:message</div>') !!}
            </div>
            <div class="form-group">
                <label for="content">Content</label>
                <textarea type="text" cols="30" rows="10" id="content" name="content" class="form-control {{ $errors->has('content') ? 'is-invalid' : ''}} "  placeholder="enter content">
                    
                </textarea>
                {!! $errors->first('content', '<div class="invalid-feedback">:message</div>') !!}
            </div>   
            <div class="form-group">
                <div class="text-center">
                    <button type="submit" class="btn btn-info ">Submit</button>
                </div>
            </div>

        </form>
    </div>
</div>

@endsection
