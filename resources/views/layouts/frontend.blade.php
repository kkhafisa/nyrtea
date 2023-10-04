<!DOCTYPE html>
<html lang="en" class="no-js no-svg">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Jozoor">
    <meta name="description" content="Joo - Niche Multi-Purpose HTML Template">
    <meta name="keywords" content="creative, niche, responsive, html5, css3, multipurpose, all in one, html, template">
    <title>Nyrtea</title>
    <link rel="stylesheet" href="{{ asset('frontend/css/vendor.css?v=1557443877074') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/styles.css?v=1557443877074') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/custom.css?v=1557443877074') }}">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600&v=1557443721825" rel="stylesheet">
    <!-- cdn icon fonts
			<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.9/css/all.css?v=1557443721825" crossorigin="anonymous">
			<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.css?v=1557443721825">
			<link href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css?v=1557443721825" rel="stylesheet">
		-->
    <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('frontend/images/favicons/logo.png') }}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('frontend/images/favicons/logo.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('frontend/images/favicons/logo.png') }}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('frontend/images/favicons/logo.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('frontend/images/favicons/logo.png') }}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('frontend/images/favicons/logo.png') }}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('frontend/images/favicons/logo.png') }}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('frontend/images/favicons/logo.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('frontend/images/favicons/logo.png') }}">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="apple-mobile-web-app-title" content="Joo Template">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('frontend/images/favicons/logo.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('frontend/images/favicons/logo.png') }}">
    <!-- <link rel="shortcut icon" href="{{ asset('frontend/images/favicons/favicon.ico') }}">  -->
    <style>
      .img-testi{
        width:25%;
        display: block;
        margin-left: auto;
        margin-right: auto;
      }

      .top-custom{
        top: 75px;
      }

      .bg-header{
        background-color:#fff;
      }

      .link-custom{
        color : #ba0171;
      }

      @media only screen and (max-width: 600px) {
        .img-testi{
          width:100%;
        }
        .top-custom{
          top: 60px;
        }
        .bg-header{
          background-color:white;
        }
      }
    </style>
  </head>
  <body class="active-pageloader corporate header-sticky hide-on-scroll header-menu-with-icons header-transparent header-menu-border-bottom menu-center footer-widgets footer-background dark-color widgets-6 submenu-show-arrow-right menu-is-capitalized submenu-is-capitalized logo-text-is-capitalized page-index">
    <div class="pageloader is-active"></div>

    @yield('main-fr-content')

    <!-- #site-wrap -->
    <script src="{{ asset('frontend/js/vendor.min.js?v=1557443877074') }}"></script>
    <script src="{{ asset('frontend/js/scripts.min.js?v=1557443877074') }}"></script>
    <script src="{{ asset('frontend/js/custom.js?v=1557443877074') }}"></script>
</body>
</html>