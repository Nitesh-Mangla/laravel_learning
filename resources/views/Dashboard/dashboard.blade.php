@extends('layouts.main')
@push('custome_css')
    <link href="{{asset('style.css')}}" rel="stylesheet" type="text/css">
@endpush
@section('contents')
    @include('layouts.topbar')
@endsection
@section('customer_js')
    <script>
    $(document).ready(function () {
    $('[data-toggle="offcanvas"]').click(function () {
    $('.row-offcanvas').toggleClass('active')
    });
    });
    </script>
 @endsection