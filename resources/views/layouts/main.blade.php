<!DOCTYPE html>
<html lang="en">
<head>
  <title>Laravel Blog</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <style>
    /* Set height of the grid so .sidenav can be 100% (adjust if needed) */
    .row.content {height: 1500px}

    /* Set gray background color and 100% height */
    .sidenav {
      background-color: #f1f1f1;
      height: 100%;
    }

    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }

    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height: auto;}
    }

    textarea {
        background: black;
    }

  </style>
</head>
<body>

<div class="container-fluid">
  <div class="row content">
    <div class="col-sm-3 sidenav">
      <h4>Ще один блог на Laravel</h4>
      <ul class="nav nav-pills nav-stacked">
        <li class="active"><a href="#section1">Головна</a></li>
        <li><a href="{{action('CategoryController@index')}}">Категорії</a></li>
        <li><a href="#section3">Останні пости</a></li>
        <li><a href="#section3">Останні коменти</a></li>
      </ul><br>

      <div class="input-group">
        <input type="text" class="form-control" placeholder="Пошук..">
        <span class="input-group-btn">
          <button class="btn btn-default" type="button">
            <span class="glyphicon glyphicon-search"></span>
          </button>
        </span>
      </div>
    </div>

    <div class="col-sm-9">
        <!-- content -->
        @yield('content')
        <!-- end content -->
    </div>
  </div>
</div>

<footer class="container-fluid">
  <p>Laravel Blog</p>
</footer>

</body>
</html>
