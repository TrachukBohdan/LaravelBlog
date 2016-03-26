@extends('layouts.main')
@section('content')
<h2> Додати нову категорію </h2>
<hr />
<form role="form">
    <div class="form-group">
        <label for="category">Назва категорії:</label>
        <input type="text" class="form-control" id="category">
    </div>
    <button type="submit" class="btn btn-default">Зберегти</button>
</form>
@endsection
