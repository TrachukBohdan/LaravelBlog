@extends('layouts.main')

@section('content')
    <h2>{{$post->title}}</h2>
    <hr />
    <p>
        {{$post->text}}
    </p>
@endsection
