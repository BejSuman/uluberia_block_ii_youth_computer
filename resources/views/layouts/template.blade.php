<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="assets/img/favicon.png" type="image/png">
        <title>Learn IT Education</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href={{url("assets/css/bootstrap.css")}}>
        <link rel="stylesheet" href={{url("assets/vendors/linericon/style.css")}}>
        <link rel="stylesheet" href={{url("assets/css/font-awesome.min.css")}}>
        <link rel="stylesheet" href={{url("assets/vendors/owl-carousel/owl.carousel.min.css")}}>
        <link rel="stylesheet" href={{url("assets/vendors/lightbox/simpleLightbox.css")}}>
        <link rel="stylesheet" href={{url("assets/vendors/nice-select/css/nice-select.css")}}>
        <link rel="stylesheet" href={{url("assets/vendors/animate-css/animate.css")}}>
        <link rel="stylesheet" href={{url("assets/vendors/popup/magnific-popup.css")}}>
        <!-- main css -->
        <link rel="stylesheet" href={{url("assets/css/style.css")}}>
        <link rel="stylesheet" href={{url("assets/css/responsive.css")}}>
        <style>
            label.error {
            color: #dc3545;
            font-size: 14px;
    }
        </style>
    </head>
    <body>

        <!--================Header Menu Area =================-->
        @include('layouts.templateHeader')
        <!--================Header Menu Area =================-->




		@yield('content')





        <!--================Footer Menu Area =================-->
        @include('layouts.templateFooter')
        <!--================Footer Menu Area =================-->
        
		
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src={{url("assets/js/jquery-3.3.1.min.js")}}></script>
        <script src={{url("assets/js/popper.js")}}></script>
        <script src={{url("assets/js/bootstrap.min.js")}}></script>
        <script src={{url("assets/js/stellar.js")}}></script>
        <script src={{url("assets/vendors/lightbox/simpleLightbox.min.js")}}></script>
        <script src={{url("assets/vendors/nice-select/js/jquery.nice-select.min.js")}}></script>
        <script src={{url("assets/vendors/isotope/imagesloaded.pkgd.min.js")}}></script>
        <script src={{url("assets/vendors/isotope/isotope.pkgd.min.js")}}></script>
        <script src={{url("assets/vendors/owl-carousel/owl.carousel.min.js")}}></script>
        <script src={{url("assets/vendors/popup/jquery.magnific-popup.min.js")}}></script>
        <script src={{url("assets/js/jquery.ajaxchimp.min.js")}}></script>
        <script src={{url("assets/vendors/counter-up/jquery.waypoints.min.js")}}></script>
        <script src={{url("assets/vendors/counter-up/jquery.counterup.js")}}></script>
        <script src={{url("assets/js/mail-script.js")}}></script>
        {{-- <script src={{url("assets/js/theme.js")}}></script> --}}

        
        <script src={{url("assets/js/jquery.validate.min.js")}}></script>
        @yield('script')
    </body>
</html>