<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="google-signin-client_id" content="1072331773183-812iipv6fmv4lv6nm3mff609uk095u42.apps.googleusercontent.com">



        <title>User Login</title>
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
        @stack('custome_css');
        <!-- Styles -->

    </head>
    <body>

@yield('contents') <!-- exporting ing login.php -->

    </body>

@stack('customer_js')
</html>
