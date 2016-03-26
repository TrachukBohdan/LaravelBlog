@extends('layouts.main')
@section('content')
    <h2> Категорії </h2>
    <hr />


    <a class="btn btn-success" href="/create-category">
        <span class="glyphicon glyphicon-plus"></span>
        Додати нову категорію
    </a>
    <br /><br />

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
                 <tr>
                   <td>John</td>
                   <td>Doe</td>
                   <td>john@example.com</td>
                 </tr>
                 <tr>
                   <td>Mary</td>
                   <td>Moe</td>
                   <td>mary@example.com</td>
                 </tr>
                 <tr>
                   <td>July</td>
                   <td>Dooley</td>
                   <td>july@example.com</td>
                 </tr>
               </tbody>
             </table>
      </div>
    </div>
@endsection
