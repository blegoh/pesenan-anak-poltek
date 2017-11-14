<!doctype html>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Spacial - Index Agency</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Place favicon.ico and apple-touch-icon(s) in the root directory -->
    <link rel="shortcut icon" href="/images/favicon.ico">

    <!-- stylesheets -->
    <link rel="stylesheet" type="text/css" href="scss/bootstrap/bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="/dist/theme.min.css" />

    <!-- javascript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="/dist/theme.min.js"></script>
</head>
<body>
<!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<!--[if lt IE 8]>
<p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

<nav class="navbar navbar-expand-lg navbar-dark bg-transparent" role="navigation">
    <div class="container no-override">
        <a class="navbar-brand" href="/">
            <img src="/images/logo-alt-w.png" class="d-none d-lg-inline mr-2 w-25" />
            CDSS
        </a>
        <button class="navbar-toggler" data-toggle="collapse" data-target="#navbar-collapse">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end" id="navbar-collapse">
            @include('layouts.menu')
        </div>
    </div>
</nav>

<div class="agency-hero">
    <section class="container">
        <div class="hero-text">
            <h1 class="customFadeInUp">
                Selamat Datang di CDSS
            </h1>
            <p class="customFadeInUp">
                CDSS adalah sistem pakar untuk deteksi dini penyakit kanker servik.
            </p>

        </div>
    </section>
</div>

<script type="text/javascript">
    $(function () {
        if (!window.utils.isMobile()) {
            $(window).scroll(function() {
                var scroll = $(window).scrollTop(),
                    slowScroll = scroll/4,
                    slowBg = 50 + slowScroll;

                $('.agency-hero').css("background-position", "center " + slowBg + "%");
            });

            utils.parallax_text($(".agency-hero .hero-text"), $(".hero-text").position().top);
        }
    });
</script>

</body>
</html>