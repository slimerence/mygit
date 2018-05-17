<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="{{ app()->getLocale() }}"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang="{{ app()->getLocale() }}"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang="{{ app()->getLocale() }}"> <![endif]-->
<!--[if gt IE 8]><!-->
<html lang="{{ app()->getLocale() }}">
<!--<![endif]-->

@include('layouts.frontend.head')
<body style="background-image: url({{asset('images/bg.jpg')}})">
<div class="bg">
@include('layouts.frontend.header')
@include('layouts.frontend.slider')
@yield('content')
@include('layouts.frontend.makecomment')
@include('layouts.frontend.js')
</div>
</body>
</html>