@extends('layouts.main')
@section('content')
<h2> Редагувати категорію </h2>
<hr />
<form role="form" method="post" action="{{action('CategoryController@change', ['id' => $category->id])}}" >
    {!! csrf_field() !!}
    <div class="form-group">
        <label for="category">Назва категорії:</label>
        <input type="text" value="{{$category->name}}" name="category" class="form-control" id="category">
    </div>
    <button type="submit" class="btn btn-default">Pедагувати</button>
</form>
@endsection
