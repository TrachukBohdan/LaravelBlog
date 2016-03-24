@extends('layouts.main')

@section('content')
<h2> Create Post </h2>
<hr />
<form role="form">
    <div class="form-group">
        <label for="email">Title:</label>
        <input type="email" class="form-control" id="email">
    </div>
    <div class="form-group">
        <label for="pwd">Text:</label>
        <textarea rows="15" class="form-control"></textarea>
    </div>
    <div class="checkbox">
        <label><input type="checkbox"> published</label>
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
</form>
@endsection
