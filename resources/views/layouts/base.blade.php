<!doctype html>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>{{ meta()->metaTitle() }}</title>
    <meta name="description" content="{{ meta()->description() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="_base_url" content="{{ url('/') }}">
    <link href='https://fonts.googleapis.com/css?family=Roboto:300,500,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Raleway:300,500,700' rel='stylesheet' type='text/css'>
    <link href="{{ url('css/style.css?v='.asset_version()) }}" rel="stylesheet">
    @yield('header_css')

<!--[if lte IE 8]>
    <script src="{{ url('js/html5shiv.respond.min.js') }}"></script><![endif]-->
</head>
<body>
<div class="page-wrapper">
    <header>
        @include('layouts.section.header')
    </header>

    @section('page_title')
        <h1>Title</h1>
    @show

    @yield('content')

    @include('layouts.section.footer')

</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.1/jquery.min.js"></script>
<script id="github-bjs" src="https://buttons.github.io/buttons.js"></script>
<script src="{{ url('js/app.js?v='.asset_version()) }}"></script>
@yield('footer_js')
</body>
</html>
