<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ URL::asset('css/app.css') }}">
    <title>Contabilizare</title>
</head>
<body>
    @include('default.includes.header')
    <div class="content">
        @yield('content')
    </div>
    @include('default.includes.footer')
    <script src="{{ URL::asset('js/app.js') }}"></script>
</body>
</html>