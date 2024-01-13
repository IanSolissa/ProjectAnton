<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="SHIELD - Free Bootstrap 3 Theme">
    <meta name="author" content="Carlos Alvarez - Alvarez.is - blacktie.co">
    <link rel="shortcut icon" href="/ico/favicon.png">
    <title> Mobile Legend</title>
    <!-- Bootstrap core CSS -->
    <link href="/css/bootstrap.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="/css/main.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/icomoon.css">
    <link href="/css/animate-custom.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic' rel='stylesheet'
        type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,300,700' rel='stylesheet' type='text/css'>
    <script src="/js/jquery.min.js"></script>
    <script type="text/javascript" src="/js/modernizr.custom.js"></script>
</head>


<body data-spy="scroll" data-offset="0" data-target="#navbar-main">
    <br>
    @include('Anton.section.Navbar')
    <main>
        @yield('Content1')
        @yield('Content2')
        @yield('Content3')
        @yield('Content4')
        @yield('Content5')

        @yield('Hero-berita')
        @yield('Hero-jadwal')
        @yield('Hero-tim')

    </main>
    @include('Anton.section.footer')


    <!-- ==== SECTION DIVIDER2 -->


    <!-- ==== TEAM MEMBERS ==== -->


    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/js/retina.js"></script>
    <script type="text/javascript" src="assets/js/jquery.easing.1.3.js"></script>
    <script type="text/javascript" src="assets/js/smoothscroll.js"></script>
    <script type="text/javascript" src="assets/js/jquery-func.js"></script>
</body>

</html>