<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="msapplication-TileColor" content="#0E0E0E">
    <meta name="template-color" content="#0E0E0E">
    <meta name="description" content="Index page">
    <meta name="keywords" content="index, page">
    <meta name="author" content="">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/imgs/Logo-color.png') }}">
    @include('layouts.partials.head')
    <title>Dekopin</title>
  </head>
  <body>
    <div id="preloader-active">
      <div class="preloader d-flex align-items-center justify-content-center">
        <div class="preloader-inner position-relative">
          <div class="text-center"><img src="{{ asset('assets/imgs/template/loading.gif') }}" alt="RKI"></div>
        </div>
      </div>
    </div>
    @include('layouts.partials.navbar')
    @include('layouts.partials.mobile-navbar')
    <main class="main">
      @yield('content')
    </main>


    @include('layouts.partials.footer')



    @include('layouts.partials.foot')
  </body>
</html>
