<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Blandi - Minimalist Onepage Agency HTML Template </title>
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Hind:300,400,500,700|Lato:300,400,700,900&amp;subset=latin-ext" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/fonts/linear-fonts.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/fonts/font-awesome.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/owlcarousel/css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/owlcarousel/css/owl.theme.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
</head>

<body>
<!-- START PRELOADER -->
<div class="preloader">
    <div class="status">
        <div class="status-mes"></div>
    </div>
</div>
<!-- / END PRELOADER -->

<!-- START HOMEPAGE DESIGN AREA -->
<header id="home" class="welcome-area">
    @yield('header')
</header>

@yield('content')

<!-- LATEST JQUERY -->
<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('assets/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.appear.js') }}"></script>
<script src="{{ asset('assets/owlcarousel/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.mixitup.js') }}"></script>
<script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.stellar.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.mb.YTPlayer.min.js') }}"></script>
<script type="text/javascript">
    $('.player').mb_YTPlayer();
</script>
<!-- COUNTER UP JS -->
<script src="{{ asset('assets/js/jquery.waypoints.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.counterup.min.js') }}"></script>
<script src="{{ asset('assets/js/wow.min.js') }}"></script>
<script src="{{ asset('assets/js/form-contact.js') }}"></script>
<script src="{{ asset('assets/js/scripts.js') }}"></script>
</body>

</html>