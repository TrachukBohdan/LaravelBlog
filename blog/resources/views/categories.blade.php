@extends('layouts.main')
@section('content')
    <h2> Категорії </h2>
    <hr />


    <a class="btn btn-success" href="/create-category">
        <span class="glyphicon glyphicon-plus"></span>
        Додати нову категорію
    </a>
    <br /><br />

    @include('layouts.parts.status_bar')

    @if(count($categories) > 0)

        <div class="panel panel-default">
          <div class="panel-heading">Список категорій</div>
          <div class="panel-body">
              <table class="table table-condensed">
                   <thead>
                     <tr>
                       <th>ID</th>
                       <th>Назва категорії</th>
                       <th>Дата створення</th>
                       <th> Редагувати </th>
                       <th> Видалити </th>
                     </tr>
                   </thead>
                   <tbody>

                   @foreach($categories as $cat)
                       <tr>
                         <td>{{$cat->id}}</td>
                         <td><a href="">{{$cat->name}}</a></td>
                         <td>{{$cat->created_at}}</td>
                         <td> <a href = "{{action('CategoryController@edit', ['id'=>$cat->id])}}">Редагувати</a> </td>
                         <td> <a href = "{{action('CategoryController@delete', ['id'=>$cat->id])}}">Видалити</a> </td>
                       </tr>
                   @endforeach

                   </tbody>
                 </table>
          </div>
        </div>
    @else
        <div class="alert alert-info">
            <strong>Пусто!</strong>
        </div>
    @endif
@endsection
