<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>ИП Иванов Admin Panel</title>
    <script src="{{ asset('js/app.js') }}"></script>
</head>
<body>
<div id="app">
    @yield('nav')
    <main class="container py-4">
        @yield('content')
    </main>
</div>
</body>
</html>
