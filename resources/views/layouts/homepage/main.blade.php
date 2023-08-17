<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="description" content="Orbitor,business,company,agency,modern,bootstrap4,tech,software">
    <meta name="author" content="themefisher.com">

    <title>Helprom | {{ $title }}</title>

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href={{asset('asset/home/images/favicon.ico')}} />

    <!-- bootstrap.min css -->
    <link rel="stylesheet" href="{{asset('asset/home/plugins/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- Icon Font Css -->
    <link rel="stylesheet" href="{{asset('asset/home/plugins/icofont/icofont.min.css')}}">
    <!-- Slick Slider  CSS -->
    <link rel="stylesheet" href="{{asset('asset/home/plugins/slick-carousel/slick/slick.css')}}">
    <link rel="stylesheet" href="{{asset('asset/home/plugins/slick-carousel/slick/slick-theme.css')}}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css')}}">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="{{asset('asset/home/css/style.css')}}">
    <style>
        body {
            color: black;
        }
    </style>
    @yield('css')

</head>

<body id="top">

    {{-- HEADER --}}
    @include('layouts.homepage.header')
    @yield('content')
    <!-- footer Start -->
    <footer class="footer section" style="background-color: rgb(243, 92, 36)">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mr-auto col-sm-6">
                    <div class="widget mb-5 mb-lg-0" style="color: white">
                        <div class="logo mb-4">
                            <a class="navbar-brand" href="index.html">
                                <img src="{{asset('asset/dashboard/images/logo.png')}}" alt=""
                                    class="img-fluid" width="50px">
                                <h5 class="d-inline">Helprom</h5>
                            </a>
                        </div>
                        <p>Health Promoting University merupakan upaya untuk meningkatkan perilaku sehat dosen, staf
                            kependidikan, dan mahasiswa sehingga dapat lebih produktif dan berkualitas.</p>

                        {{-- <ul class="list-inline footer-socials mt-4">
                            <li class="list-inline-item"><a href="" style="background-color: black"><i
                                        class="icofont-facebook"></i></a></li>
                            <li class="list-inline-item"><a href="" style="background-color: black"><i
                                        class="icofont-twitter"></i></a></li>
                            <li class="list-inline-item"><a href="" style="background-color: black"><i
                                        class="icofont-linkedin"></i></a></li>
                        </ul> --}}
                    </div>
                </div>
            </div>

            <div class="footer-btm py-4 mt-5" style="color: black">
                <div class="row align-items-center justify-content-between">
                    <div class="col-lg-6">
                        <div class="copyright">
                            &copy; Copyright <span class="text-color">Helprom {{ date('Y') }}</span>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-4">
                        <a class="backtop js-scroll-trigger" href="#top">
                            <i class="icofont-long-arrow-up"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </footer>



    <!--
    Essential Scripts
    =====================================-->


    <!-- Main jQuery -->
    <script src="{{asset('asset/home/plugins/jquery/jquery.js')}}"></script>
    <!-- Bootstrap 4.3.2 -->
    <script src="{{asset('asset/home/plugins/bootstrap/js/popper.js')}}"></script>
    <script src="{{asset('asset/home/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('asset/home/plugins/counterup/jquery.easing.js')}}"></script>
    <!-- Slick Slider -->
    <script src="{{asset('asset/home/plugins/slick-carousel/slick/slick.min.js')}}"></script>
    <!-- Counterup -->
    <script src="{{asset('asset/home/plugins/counterup/jquery.waypoints.min.js')}}"></script>

    <script src="{{asset('asset/home/plugins/shuffle/shuffle.min.js')}}"></script>
    <script src="{{asset('asset/home/plugins/counterup/jquery.counterup.min.js')}}"></script>
    <!-- Google Map -->
    <script src="{{asset('asset/home/plugins/google-map/map.js')}}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAkeLMlsiwzp6b3Gnaxd86lvakimwGA6UA&callback=initMap">
    </script>

    <script src="{{asset('asset/home/js/script.js')}}"></script>
    <script src="{{asset('asset/home/js/contact.js')}}"></script>
    @yield('script')

</body>

</html>
