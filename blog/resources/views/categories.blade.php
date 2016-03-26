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

    <div class="panel panel-default">
      <div class="panel-heading">Список категорій</div>
      <div class="panel-body">
          <table class="table table-condensed">
               <thead>
                 <tr>
                   <th>Назва категорії</th>
                   <th>Останній пост</th>
                   <th>Останній комент</th>
                 </tr>
               </thead>
               <tbody>

               @foreach($categories as $cat)
                   <tr>
                     <td>{{$cat->name}}</td>
                     <td>Doe</td>
                     <td>john@example.com</td>
                   </tr>
               @endforeach

               </tbody>
             </table>
      </div>
    </div>
@endsection
