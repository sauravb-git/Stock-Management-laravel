<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <title>Admindek | Admin Template</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description"
        content="Admindek Bootstrap admin template made using Bootstrap 4 and it has huge amount of ready made feature, UI components, pages which completely fulfills any dashboard needs." />
    <meta name="keywords"
        content="flat ui, admin Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
    <meta name="author" content="colorlib" />

    <link rel="icon" href="https://colorlib.com/polygon/admindek/files/assets/images/favicon.ico" type="image/x-icon">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Quicksand:500,700" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('backend/css/bootstrap.min.css')}}" type="text/css" >
    <link rel="stylesheet" href="{{ asset('backend/css/waves.min.css')}}" type="text/css" media="all">
    <link rel="stylesheet" href="{{ asset('backend/css/feather.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ asset('backend/css/font-awesome-n.min.css')}}"  type="text/css" >
    <link rel="stylesheet" href="{{ asset('backend/css/chartist.css')}}" type="text/css" media="all">
    <link rel="stylesheet" href="{{ asset('backend/css/style.css')}}" type="text/css" >
    <link rel="stylesheet" href="{{ asset('backend/css/widget.css')}}" type="text/css" >

 

</head>

<body>

    <div class="loader-bg">
        <div class="loader-bar"></div>
    </div>

    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">

            @include('topbar')

            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">

                    @include('sidebar')

                    @yield('content')

                    <div id="styleSelector">
                    </div>

                </div>
            </div>
        </div>
    </div>





<script data-cfasync="false" src="{{ asset('backend/js/email-decode.min.js')}}"></script>
<script type="d2d1d6e2f87cbebdf4013b26-text/javascript" src="{{ asset('backend/js/jquery.min.js')}}"></script>
<script type="d2d1d6e2f87cbebdf4013b26-text/javascript" src="{{ asset('backend/js/jquery-ui.min.js')}}"></script>
<script type="d2d1d6e2f87cbebdf4013b26-text/javascript" src="{{ asset('backend/js/popper.min.js')}}"></script>
<script type="d2d1d6e2f87cbebdf4013b26-text/javascript" src="{{ asset('backend/js/bootstrap.min.js')}}"></script>

<script src="{{ asset('backend/js/waves.min.js')}}" type="d2d1d6e2f87cbebdf4013b26-text/javascript"></script>

<script type="d2d1d6e2f87cbebdf4013b26-text/javascript" src="{{ asset('backend/js/jquery.slimscroll.js')}}"></script>

<script src="{{ asset('backend/js/jquery.flot.js')}}" type="d2d1d6e2f87cbebdf4013b26-text/javascript"></script>
<script src="{{ asset('backend/js/jquery.flot.categories.js')}}" type="d2d1d6e2f87cbebdf4013b26-text/javascript"></script>
<script src="{{('js/curvedlines.js')}}" type="d2d1d6e2f87cbebdf4013b26-text/javascript"></script>
<script src="{{ asset('backend/js/jquery.flot.tooltip.min.js')}}" type="d2d1d6e2f87cbebdf4013b26-text/javascript"></script>

<script src="{{ asset('backend/js/chartist.js')}}" type="d2d1d6e2f87cbebdf4013b26-text/javascript"></script>

<script src="{{ asset('backend/js/amcharts.js')}}" type="d2d1d6e2f87cbebdf4013b26-text/javascript"></script>
<script src="{{ asset('backend/js/serial.js')}}" type="d2d1d6e2f87cbebdf4013b26-text/javascript"></script>
<script src="{{ asset('backend/js/light.js')}}" type="d2d1d6e2f87cbebdf4013b26-text/javascript"></script>

<script src="{{ asset('backend/js/pcoded.min.js')}}" type="d2d1d6e2f87cbebdf4013b26-text/javascript"></script>
<script src="{{ asset('backend/js/vertical-layout.min.js')}}" type="d2d1d6e2f87cbebdf4013b26-text/javascript"></script>
<script type="d2d1d6e2f87cbebdf4013b26-text/javascript" src="{{ asset('backend/js/custom-dashboard.min.js')}}"></script>
<script type="d2d1d6e2f87cbebdf4013b26-text/javascript" src="{{ asset('backend/js/script.min.js')}}"></script>

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13" type="d2d1d6e2f87cbebdf4013b26-text/javascript"></script>
<script type="d2d1d6e2f87cbebdf4013b26-text/javascript">
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>
<script src="{{ asset('backend/js/rocket-loader.min.js')}}" data-cf-settings="d2d1d6e2f87cbebdf4013b26-|49" defer=""></script></body>


</body>
</html>
