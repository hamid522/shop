<!doctype html>

<html lang="fa">
<head>
  <meta charset="utf-8">


  <title>@yield('title')</title>

  <link rel="stylesheet" href="{{mix('/css/app.css')}}">

</head>

<body>
  {{-- header of application--}}
  @include('layouts.landing-header')
  <div class="container">
    @yield('products')
  </div>

  <script src="js/scripts.js"></script>
</body>
</html>
