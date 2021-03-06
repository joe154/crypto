<!DOCTYPE html>
<html lang="en">
<head>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta charset="utf-8" />
    <title>{{$settings->site_name}} | {{$title}}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{URL:: asset('home/home/images/favicon.png')}}">

    <!-- Template CSS Files -->
    <link rel="stylesheet" href="{{ URL::asset('home/home/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{URL:: asset('home/home/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ URL::asset('home/home/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{ URL::asset('home/home/css/select2.min.css')}}">
    <link rel="stylesheet" href="{{ URL::asset('home/home/css/style.css')}}">
    <link rel="stylesheet" href="{{ URL::asset('home/home/css/skins/orange.css')}}">
    
    
	
	<!-- Live Style Switcher - demo only -->
    <link rel="alternate stylesheet" type="text/css" title="orange" href="{{URL:: asset('home/home/css/skins/orange.css')}}" />
    <link rel="alternate stylesheet" type="text/css" title="green" href="{{URL:: asset('home/home/css/skins/green.css')}}" />
    <link rel="alternate stylesheet" type="text/css" title="blue" href="{{ URL::asset('home/home/css/skins/blue.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('home/home/css/styleswitcher.css')}}" />

    <!-- Template JS Files -->
    <script src="{{URL:: asset('home/home/js/modernizr.js')}}"></script>

</head>