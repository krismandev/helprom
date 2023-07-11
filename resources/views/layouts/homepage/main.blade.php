<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="description" content="Orbitor,business,company,agency,modern,bootstrap4,tech,software">
    <meta name="author" content="themefisher.com">

    <title>Helprom | {{ $title }}</title>

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="/{{ url('') }}/novena/images/favicon.ico" />

    <!-- bootstrap.min css -->
    <link rel="stylesheet" href="{{ url('') }}/novena/plugins/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- Icon Font Css -->
    <link rel="stylesheet" href="{{ url('') }}/novena/plugins/icofont/icofont.min.css">
    <!-- Slick Slider  CSS -->
    <link rel="stylesheet" href="{{ url('') }}/novena/plugins/slick-carousel/slick/slick.css">
    <link rel="stylesheet" href="{{ url('') }}/novena/plugins/slick-carousel/slick/slick-theme.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="{{ url('') }}/novena/css/style.css">

</head>

<body id="top">

    {{-- HEADER --}}
    @include('layouts.homepage.header')

    <!-- Slider Start -->
    <section class="banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-xl-7">
                    <div class="block">
                        <div class="divider mb-3"></div>
                        <span class="text-uppercase text-sm letter-spacing ">Total Health care solution</span>
                        <h1 class="mb-3 mt-3">Your most trusted health partner</h1>

                        <p class="mb-4 pr-5">A repudiandae ipsam labore ipsa voluptatum quidem quae laudantium quisquam
                            aperiam maiores sunt fugit, deserunt rem suscipit placeat.</p>
                        <div class="btn-container ">
                            <a href="appoinment.html" target="_blank"
                                class="btn btn-main-2 btn-icon btn-round-full">Make appoinment <i
                                    class="icofont-simple-right ml-2  "></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- IMAGE SLIDER --}}
    <section class="section">
        <div class="container">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"
                        style="background-color:orangered"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1" style="background-color:orangered">
                    </li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2" style="background-color:orangered">
                    </li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row">
                            <div class="col-md-6">
                                <img src="{{ url('') }}/novena/images/blog/blog-1.jpg" alt="Gambar Artikel 2"
                                    class="img-fluid">
                            </div>
                            <div class="col-md-6" style="margin:0">
                                <h5 style=" margin-bottom:0">Pakar UNJA Tak Rekomendasikan Olahraga Pagi Saat Puasa,
                                    Mengapa?</h6>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta laborum dolor
                                        omnis
                                        dignissimos amet vel magni nesciunt, facilis, aliquid eaque alias deleniti iure
                                        mollitia dolores vero numquam recusandae dolore perspiciatis ...</p>
                                    <p style="font-size:12px; font-weight:bold">20 Juni 2023</p>
                                    <a href="">
                                        <h6 style="font-size:12px; color:orangered">BACA SELENGKAPNYA</h6>
                                    </a>
                            </div>

                        </div>

                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-md-6">
                                <img src="{{ url('') }}/novena/images/blog/blog-2.jpg" alt="Gambar Artikel 2"
                                    class="img-fluid">
                            </div>
                            <div class="col-md-6" style="margin:0">
                                <h5 style=" margin-bottom:0">All test cost 25% in always in
                                    our laboratory</h6>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta laborum dolor
                                        omnis
                                        dignissimos amet vel magni nesciunt, facilis, aliquid eaque alias deleniti iure
                                        mollitia dolores vero numquam recusandae dolore perspiciatis!</p>
                                    <p style="font-size:12px; font-weight:bold">20 Juni 2023</p>
                                    <a href="">
                                        <h6 style="font-size:12px; color:orangered">BACA SELENGKAPNYA</h6>
                                    </a>
                            </div>

                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-md-6">
                                <img src="{{ url('') }}/novena/images/blog/blog-1.jpg" alt="Gambar Artikel 2"
                                    class="img-fluid">
                            </div>
                            <div class="col-md-6" style="margin:0">
                                <h5 style=" margin-bottom:0">All test cost 25% in always in
                                    our laboratory</h6>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta laborum dolor
                                        omnis
                                        dignissimos amet vel magni nesciunt, facilis, aliquid eaque alias deleniti iure
                                        mollitia dolores vero numquam recusandae dolore perspiciatis!</p>
                                    <p style="font-size:12px; font-weight:bold">20 Juni 2023</p>
                                    <a href="">
                                        <h6 style="font-size:12px; color:orangered">BACA SELENGKAPNYA</h6>
                                    </a>
                            </div>

                        </div>
                    </div>
                </div>
                {{-- <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next"
                    style="background-color: red; color:blue">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a> --}}
            </div>
        </div>
    </section>

    {{-- KELOMPOK KERJA --}}
    <section class="section service gray-bg" style="padding-top:50px">
        <div class="container ">
            <div class="row">
                @foreach ($categories as $item)
                    <div class="col-lg-3 col-md-6 col-sm-6 mb-3 justify-content-center">
                        <div class="service-item">
                            <div class="icon">
                                <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->image }}"
                                    width="100%">
                            </div>

                            <a href="">
                                <div class="content">
                                    <h6 align="center">{{ $item->name }}</h6>
                                </div>
                            </a>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>

    {{-- POSTINGAN --}}
    <section class="section blog-wrap">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="section-title" style="margin:0">
                        <h3>Berita</h3>
                        <hr class="orange-hr">
                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-md-12 mb-5">
                            <div class="row">
                                <div class="col-md-4">
                                    <img src="{{ url('') }}/novena/images/blog/blog-1.jpg"
                                        alt="Gambar Artikel 2" class="img-fluid">
                                </div>
                                <div class="col-md-8" style="margin:0">
                                    <h5 style="font-size:14px; margin-bottom:0">All test cost 25% in always in
                                        our laboratory</h6>
                                        <p style="font-size:10px; font-weight:bold">20 Juni 2023</p>
                                </div>

                            </div>
                            <hr style="margin-top:0">
                            <div class="row">
                                <div class="col-md-4">
                                    <img src="{{ url('') }}/novena/images/blog/blog-1.jpg"
                                        alt="Gambar Artikel 2" class="img-fluid">
                                </div>
                                <div class="col-md-8" style="margin:0">
                                    <h5 style="font-size:14px; margin-bottom:0">All test cost 25% in always in
                                        our laboratory</h6>
                                        <p style="font-size:10px; font-weight:bold">20 Juni 2023</p>
                                </div>

                            </div>

                            <!-- Tambahkan lebih banyak artikel di sini -->
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="section-title" style="margin:0">
                        <h3>Artikel Unggulan</h3>
                        <hr class="orange-hr">
                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-md-12 mb-5">
                            <div class="row">
                                <div class="col-md-4">
                                    <img src="{{ url('') }}/novena/images/blog/blog-1.jpg"
                                        alt="Gambar Artikel 2" class="img-fluid">
                                </div>
                                <div class="col-md-8" style="margin:0">
                                    <h5 style="font-size:14px; margin-bottom:0">All test cost 25% in always in
                                        our laboratory</h6>
                                        <p style="font-size:10px; font-weight:bold">20 Juni 2023</p>
                                </div>

                            </div>
                            <hr style="margin-top:0">
                            <div class="row">
                                <div class="col-md-4">
                                    <img src="{{ url('') }}/novena/images/blog/blog-1.jpg"
                                        alt="Gambar Artikel 2" class="img-fluid">
                                </div>
                                <div class="col-md-8" style="margin:0">
                                    <h5 style="font-size:14px; margin-bottom:0">All test cost 25% in always in
                                        our laboratory</h6>
                                        <p style="font-size:10px; font-weight:bold">20 Juni 2023</p>
                                </div>

                            </div>

                            <!-- Tambahkan lebih banyak artikel di sini -->
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="section-title" style="margin:0">
                        <h3>Artikel Lainnya</h3>
                        <hr class="orange-hr">
                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-md-12 mb-5">
                            <div class="row">
                                <div class="col-md-4">
                                    <img src="{{ url('') }}/novena/images/blog/blog-1.jpg"
                                        alt="Gambar Artikel 2" class="img-fluid">
                                </div>
                                <div class="col-md-8" style="margin:0">
                                    <h5 style="font-size:14px; margin-bottom:0">All test cost 25% in always in
                                        our laboratory</h6>
                                        <p style="font-size:10px; font-weight:bold">20 Juni 2023</p>
                                </div>

                            </div>
                            <hr style="margin-top:0">
                            <div class="row">
                                <div class="col-md-4">
                                    <img src="{{ url('') }}/novena/images/blog/blog-1.jpg"
                                        alt="Gambar Artikel 2" class="img-fluid">
                                </div>
                                <div class="col-md-8" style="margin:0">
                                    <h5 style="font-size:14px; margin-bottom:0">All test cost 25% in always in
                                        our laboratory</h6>
                                        <p style="font-size:10px; font-weight:bold">20 Juni 2023</p>
                                </div>

                            </div>

                            <!-- Tambahkan lebih banyak artikel di sini -->
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- footer Start -->
    <footer class="footer section gray-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mr-auto col-sm-6">
                    <div class="widget mb-5 mb-lg-0">
                        <div class="logo mb-4">
                            <a class="navbar-brand" href="index.html">
                                <img src="{{ url('') }}/asset_dashboard/images/logo.png" alt=""
                                    class="img-fluid" width="50px">
                                <h5 class="d-inline">Helprom</h5>
                            </a>
                        </div>
                        <p>Health Promoting University merupakan upaya untuk meningkatkan perilaku sehat dosen, staf
                            kependidikan, dan mahasiswa sehingga dapat lebih produktif dan berkualitas.</p>

                        <ul class="list-inline footer-socials mt-4">
                            <li class="list-inline-item"><a href=""><i class="icofont-facebook"></i></a></li>
                            <li class="list-inline-item"><a href=""><i class="icofont-twitter"></i></a></li>
                            <li class="list-inline-item"><a href=""><i class="icofont-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>

                {{-- <div class="col-lg-2 col-md-6 col-sm-6">
                    <div class="widget mb-5 mb-lg-0">
                        <h4 class="text-capitalize mb-3">Department</h4>
                        <div class="divider mb-4"></div>

                        <ul class="list-unstyled footer-menu lh-35">
                            <li><a href="#">Surgery </a></li>
                            <li><a href="#">Wome's Health</a></li>
                            <li><a href="#">Radiology</a></li>
                            <li><a href="#">Cardioc</a></li>
                            <li><a href="#">Medicine</a></li>
                        </ul>
                    </div>
                </div> --}}

                {{-- <div class="col-lg-2 col-md-6 col-sm-6">
                    <div class="widget mb-5 mb-lg-0">
                        <h4 class="text-capitalize mb-3">Support</h4>
                        <div class="divider mb-4"></div>

                        <ul class="list-unstyled footer-menu lh-35">
                            <li><a href="#">Terms & Conditions</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Company Support </a></li>
                            <li><a href="#">FAQuestions</a></li>
                            <li><a href="#">Company Licence</a></li>
                        </ul>
                    </div>
                </div> --}}

                {{-- <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="widget widget-contact mb-5 mb-lg-0">
                        <h4 class="text-capitalize mb-3">Get in Touch</h4>
                        <div class="divider mb-4"></div>

                        <div class="footer-contact-block mb-4">
                            <div class="icon d-flex align-items-center">
                                <i class="icofont-email mr-3"></i>
                                <span class="h6 mb-0">Support Available for 24/7</span>
                            </div>
                            <h4 class="mt-2"><a href="tel:+23-345-67890">Support@email.com</a></h4>
                        </div>

                        <div class="footer-contact-block">
                            <div class="icon d-flex align-items-center">
                                <i class="icofont-support mr-3"></i>
                                <span class="h6 mb-0">Mon to Fri : 08:30 - 18:00</span>
                            </div>
                            <h4 class="mt-2"><a href="tel:+23-345-67890">+23-456-6588</a></h4>
                        </div>
                    </div>
                </div> --}}
            </div>

            <div class="footer-btm py-4 mt-5">
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
    <script src="{{ url('') }}/novena/plugins/jquery/jquery.js"></script>
    <!-- Bootstrap 4.3.2 -->
    <script src="{{ url('') }}/novena/plugins/bootstrap/js/popper.js"></script>
    <script src="{{ url('') }}/novena/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="{{ url('') }}/novena/plugins/counterup/jquery.easing.js"></script>
    <!-- Slick Slider -->
    <script src="{{ url('') }}/novena/plugins/slick-carousel/slick/slick.min.js"></script>
    <!-- Counterup -->
    <script src="{{ url('') }}/novena/plugins/counterup/jquery.waypoints.min.js"></script>

    <script src="{{ url('') }}/novena/plugins/shuffle/shuffle.min.js"></script>
    <script src="{{ url('') }}/novena/plugins/counterup/jquery.counterup.min.js"></script>
    <!-- Google Map -->
    <script src="{{ url('') }}/novena/plugins/google-map/map.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAkeLMlsiwzp6b3Gnaxd86lvakimwGA6UA&callback=initMap">
    </script>

    <script src="{{ url('') }}/novena/js/script.js"></script>
    <script src="{{ url('') }}/novena/js/contact.js"></script>

</body>

</html>
