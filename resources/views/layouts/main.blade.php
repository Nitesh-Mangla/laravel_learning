<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Dashboard</title>

    @stack('custome_css');
    <!-- Styles -->

</head>
<body>

@yield('contents') <!-- exporting ing login.php -->

</body>

@stack('customer_js')
</html>