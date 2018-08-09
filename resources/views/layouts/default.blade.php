<!DOCTYPE html>
<html>
<head>
<<<<<<< HEAD
    <title>@yield('title', 'Sample App') - S2</title>
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
    @include('layouts._header')
<div class="container">
    <div class="col-md-offset-1 col-md-10">
        @yield('content')
        @include('layouts._footer')
    </div>
</div>
</body>
=======
    <title>@yield('title','Sample App') - Laravel 入门教程</title>
    <link rel="stylesheet" href="/css/app.css">
</head>
     <body>
     @include('layouts._header');

     <div class="container">
     <div class="col-md-offset-1 col-md-10">
         @include('shared._messages')
         @yield('content')
         @include('layouts._footer')
     </div>
     </div>
     </body>

     <script src="/js/app.js"></script>
>>>>>>> af1d543fc1df50f402cfd844ef6048b9bf61372f
</html>