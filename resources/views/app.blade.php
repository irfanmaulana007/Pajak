<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pajak - @yield('title')</title>
    <!-- <link href="{{ asset('/css/editan.css')}}" rel="stylesheet"> -->
    <link href="{{ asset('/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{ asset('/css/styles.css')}}" rel="stylesheet">
    <script src="{{ asset('/js/jquery-3.2.1.min.js')}}"></script>
    <script src="{{ asset('/js/bootstrap.min.js')}}"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
<body>
  <div id="banner">
    <img src="{{ asset('/img/header.png')}}">
  </div>
  <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="#">WebSiteName</a>
      </div>
      <ul class="nav navbar-nav">
        <li id="Monitor"><a href="Index">Monitoring</a></li>
        <li id="Input"><a href="Input">Input</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="/"><span class="fa fa-sign-out"></span> Logout</a></li>
      </ul>
    </div>
  </nav>

  <div id="content" class="container nopadding">
      @yield('content')
  </div> 

  <footer>
    <h5 class="text-center">Copyright &copy; 2017. All rights reserved. Unit Pelayanan Pajak & Retribusi Daerah Gambir</h5>
  </footer>

  <script>
    $("#@yield('title')").addClass("active");  
  </script>

 </body>
</html>