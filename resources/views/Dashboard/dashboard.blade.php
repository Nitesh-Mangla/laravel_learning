@extends('layouts.main')
@push('custome_css')
    <link href="{{asset('style.css')}}" rel="stylesheet" type="text/css">
    <script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
    <meta name="google-signin-client_id" content="1072331773183-812iipv6fmv4lv6nm3mff609uk095u42.apps.googleusercontent.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
    <script src="https://apis.google.com/js/platform.js?onload=onLoad" async defer></script>
@endpush
@section('contents')
    @include('layouts.topbar')
    <a href="#" onclick="signOut();">Sign out</a>
@endsection
@push('customer_js')
    <script>
    $(document).ready(function () {
    $('[data-toggle="offcanvas"]').click(function () {
    $('.row-offcanvas').toggleClass('active')
    });
    });


    function signOut() {
        var auth2 = gapi.auth2.getAuthInstance();
        auth2.signOut().then(function () {
            console.log('User signed out.');
            window.location.href = "{{route('user_login')}}";
        });
    }

    function onLoad() {
        gapi.load('auth2', function() {
            gapi.auth2.init();
        });
    }
    </script>

 @endpush