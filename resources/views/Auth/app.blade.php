<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pajak - @yield('title')</title>
    <link href="{{ asset('/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{ asset('/css/styles.css')}}" rel="stylesheet">
    <script src="{{ asset('/js/jquery-3.2.1.min.js')}}"></script>
    <script src="{{ asset('/js/bootstrap.min.js')}}"></script>
  </head>
<body>
  <div id="content" class="container-fluid nopadding">
      @yield('content')
  </div>
 </body>
</html>