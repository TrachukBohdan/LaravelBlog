@extends('layouts.main')

@section('content')
<h2> Create Post </h2>
<hr />
@include('layouts.parts.errors_list')
<form role="form" method="post" action="{{action('BlogController@storePost')}}">
    {{csrf_field()}}
    <input type="hidden" name="id" value="{{$id}}" />
    <div class="form-group">
        <label for="title">Title:</label>
        <input type="text" name="title" class="form-control" id="title">
    </div>
    <div class="form-group">
        <label for="text">Text:</label>
        <textarea rows="15" name="text" class="form-control"></textarea>
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
</form>
@endsection
