<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv='cache-control' content='no-cache'>
        <meta http-equiv='expires' content='0'>
        <meta http-equiv='pragma' content='no-cache'>
        <meta name="google-signin-client_id" content="1072331773183-9ik0aj7g6m7euu6sj4i3cc945v1o3bfq.apps.googleusercontent.com">
    <title>Google Login Api</title>
    
    <script src="https://apis.google.com/js/platform.js" async defer></script>



        <title>User Login</title>
        <!-- <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css"> -->
        @stack('custome_css');
        <!-- Styles -->

    </head>
    <body>

@yield('contents') <!-- exporting ing login.php -->

    </body>

@stack('customer_js')
</html>
