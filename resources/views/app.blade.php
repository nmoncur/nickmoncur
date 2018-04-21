<!DOCTYPE html>
<html lang="en">
<head>
  @if( Request::root() === 'http://nickmoncur.com' )
  <!-- Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-64697120-3"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-64697120-3');
  </script>
  <!-- end Google Analytics -->
  @endif

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="shortcut icon" href="{{{ asset('images/favicon.png') }}}">
  <link rel="stylesheet" href="{{ URL::asset('css/app.css') }}">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>Hi there, I'm Nick Moncur</title>
  <meta name="description" content="I'm passionate about helping startups and small business. Visit my site to learn about my work." />

  <!-- Open Graph data -->
  <meta property="og:url" content="{{ Request::url() }}">
  <meta property="og:title" content="Nick Moncur" />
  <meta property="og:description" content="I'm passionate about helping startups and small business. Visit my site to learn about my work." />
  <meta property="og:site_name" content="NickMoncur.com">
  <meta property="og:image" content="http://www.nickmoncur.com/images/main.jpg" />
  <!-- Twitter Card data -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:domain" value="{{ Request::url() }}">
  <meta name="twitter:url" value="{{ Request::url() }}">
  <meta name="twitter:site" content="@nmoncur10">
  <meta name="twitter:title" content="Hi there, I'm Nick Moncur">
  <meta name="twitter:description" content="I'm passionate about helping startups and small business. Visit my site to learn about my work.">
  <meta name="twitter:image:src" content="http://www.nickmoncur.com/images/main.jpg">
</head>
<body>
<div id="app">
  <app></app>
</div>

<script src="{{ mix('js/app.js') }}"></script>
</body>
</html>
