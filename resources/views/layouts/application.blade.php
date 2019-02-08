<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title') | adidas VN</title>
        <link rel="stylesheet" href="css/foundation.css"> <!-- css chung -->
        <link rel="stylesheet" href="css/menu.css"> <!-- css cho menu -->
        <link rel="stylesheet" href="css/animatedSearchBar.css"> <!-- css cho thanh tìm kiếm linh hoạt-->
        <link rel="stylesheet" href="css/wallpaperWrapper.css"> <!-- css cho slideshow -->
        <link rel="stylesheet" href="css/slidenav.css"> <!-- css cho slidenav -->
        <link rel="stylesheet" href="css/text-center.css"> <!-- ad -->
        <link rel="stylesheet" href="css/login/login.css"> <!-- css đăng nhập -->
        <link rel="stylesheet" href="css/container.css"> <!-- css cho footer -->
        <link rel="stylesheet" href="css/footerBottom.css"> <!-- css cho footer -->
        <link rel="stylesheet" href="css/footer.css"> <!-- css cho footer -->



        <link rel="icon" href="images/0/img/adidas-favicon.ico" />
        <link rel="shortcut icon" type="image/x-icon" href="images/img/adidas-favicon.ico" />
    </head>
    <body>
        <div id="topdiv">
            @include('layouts.header')
        </div>
        <div id="topdivvv">
        </div> 
        @yield('content')
        @include('layouts.footer')
  </body>
</html>
