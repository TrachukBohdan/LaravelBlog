@extends('layouts.main')
@section('content')
<h2> Редагувати пост </h2>
<hr />
<form role="form" method="post" action="{{action('BlogController@changePost')}}">
    {{csrf_field()}}
    <input type="hidden" name="id" value="{{$post->id}}" />
    <div class="form-group">
        <label for="title">Title:</label>
        <input type="text" value="{{$post->title}}" name="title" class="form-control" id="title">
    </div>
    <div class="form-group">
        <label for="text">Text:</label>
        <textarea rows="15" name="text" class="form-control">{{$post->text}}</textarea>
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
</form>
@endsection
