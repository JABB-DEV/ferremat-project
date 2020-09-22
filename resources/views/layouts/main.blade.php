<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ferremat</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/app.css')}}">
    <script src="{{ asset('css/fontawsome/js/all.min.js') }}"></script>
</head>

<body>
    @include('layouts.partials.header')
    <div class="container mt-3">
        @yield('contenido')
    </div>

    @include('layouts.partials.footer')

    <script src="{{ asset('js/jquery-3.5.1.min.js') }}"></script>
    <script src="{{ asset('css/bootstrap/js/bootstrap.min.js') }}"></script>
    @yield('scripts')
</body>

</html>