<!DOCTYPE html>
<html lang="en">
<head>
    <base href="./">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Brew Ride</title>
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <meta name="theme-color" content="#ffffff">
    @vite('resources/sass/app.scss')
       <link href="{{ asset('styleslogin.css') }}" rel="stylesheet"> <!-- Enlace al CSS personalizado -->



</head>
<body>

<div class="bg-light min-vh-100 d-flex flex-row align-items-center">
    <div class="container">
        <div class="row justify-content-center">
            @yield('content')
        </div>
    </div>
</div>
<script src="{{ asset('js/coreui.bundle.min.js') }}"></script>
</body>
</html>
