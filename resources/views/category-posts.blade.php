@extends('layouts.main')

@section('content')
    <h2>Записи категорії: <b>{{ $cat_name }}</b></h2>
    <hr />
    <a class="btn btn-success" href="{{action('BlogController@createPost', ['id'=> $cat_id])}}">
        <span class="glyphicon glyphicon-plus"></span>
        Створити пост
    </a>
    <br /><br />

    @include('layouts.parts.status_bar')

    @if( count($posts) > 0 )
        @each('layouts.parts.short_article', $posts, 'post')
    @else
        <div class="alert alert-info">
            <strong>Пусто!</strong>
        </div>
    @endif

@endsection
