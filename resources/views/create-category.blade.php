@extends('layouts.main')
@section('content')
<h2> Додати нову категорію </h2>
<hr />
@include('layouts.parts.errors_list')
<form role="form" method="post" action="{{action('CategoryController@store')}}" >
    {!! csrf_field() !!}
    <div class="form-group">
        <label for="category">Назва категорії:</label>
        <input type="text" placeholder="категорія" attribute="Кат" name="category" class="form-control" id="category">
    </div>
    <button type="submit" class="btn btn-default">Зберегти</button>
</form>
@endsection
