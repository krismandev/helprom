@extends('layouts.homepage.main')

@section('css')
    <style>
        .banner {
            position: relative;
            overflow: hidden;
            background: #fff;
            background: url("{{ url('') }}/asset/home/images/peresmian-hpu.jpg") no-repeat;
            background-size: cover;
            min-height: 550px;
        }
    </style>
@endsection
@section('content')
    {{-- IMAGE SLIDER --}}
    <section class="section">
        <div class="container">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    @for ($i = 0; $i < count($articles); $i++)
                        @if ($i == 0)
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"
                                style="background-color:orangered"></li>
                        @else
                            <li data-target="#carouselExampleIndicators" data-slide-to="{{ $i }}"
                                style="background-color:orangered">
                            </li>
                        @endif
                    @endfor
                    {{-- <li data-target="#carouselExampleIndicators" data-slide-to="2" style="background-color:orangered">
                </li> --}}
                </ol>
                <div class="carousel-inner">

                    @for ($i = 0; $i < count($articles); $i++)
                        @if ($i == 0)
                            <div class="carousel-item active">
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <img src="{{ url('') }}/asset/home/images/blog/blog-1.jpg"
                                            alt="Gambar Artikel 2" class="img-fluid">
                                    </div>
                                    <div class="col-md-6">
                                        <h5 style=" margin-bottom:2;">{{ $articles[$i]->title }}</h6>
                                            @php
                                                $content = substr($articles[$i]->content, strpos($articles[$i]->content, '<p>'), 250);
                                            @endphp
                                            <p style="color:black !important">{!! $content !!} ...</p>
                                            <p style="font-size:12px; font-weight:bold; color:rgb(29, 27, 27)">
                                                {{ $articles[$i]->created_at }}</p>
                                            <a href="">
                                                <h6 style="font-size:12px; color:orangered">BACA SELENGKAPNYA</h6>
                                            </a>
                                    </div>

                                </div>
                            </div>
                        @else
                            <div class="carousel-item">
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <img src="{{ url('') }}/asset/home/images/blog/blog-2.jpg"
                                            alt="Gambar Artikel 2" class="img-fluid">
                                    </div>
                                    <div class="col-md-6">
                                        <h5 style=" margin-bottom:2;">{{ $articles[$i]->title }}</h6>
                                            @php
                                                $content = substr($articles[$i]->content, strpos($articles[$i]->content, '<p>'), 250);
                                            @endphp
                                            <p style="color:black !important">{!! $content !!} ...</p>
                                            <p style="font-size:12px; font-weight:bold; color:rgb(29, 27, 27)">
                                                {{ $articles[$i]->created_at }}</p>
                                            <a href="">
                                                <h6 style="font-size:12px; color:orangered">BACA SELENGKAPNYA</h6>
                                            </a>
                                    </div>


                                </div>
                            </div>
                        @endif
                    @endfor
                </div>
            </div>
        </div>
    </section>


    <!-- Slider Start -->
    <section class="banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-xl-7">
                    <div class="block">
                        <div class="divider mb-3"></div>
                        {{-- <span class="text-uppercase text-sm letter-spacing "></span> --}}
                        <h2 class="mb-3 mt-3" style="color:orangered; background-color:white;">
                            <span class=" mx-3">Health
                                Promoting
                                University</span>
                        </h2>

                        <p class="mb-4 p-3" style="color:orangered; background-color:white;">A
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Natus, eum sequi? Perferendis
                            accusamus saepe, iure, voluptas maiores quis libero quas, ipsum nihil officia sequi voluptatum
                            eaque? Dolorum commodi libero ad!
                            repudiandae ipsam labore
                            ipsa voluptatum quidem quae laudantium quisquam
                            aperiam maiores sunt fugit, deserunt rem suscipit placeat.</p>
                        <div class="btn-container ">
                            <a href="/login" class="btn btn-main-2 btn-icon btn-round-full">HPU
                                <i class="icofont-simple-right ml-2  "></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- KELOMPOK KERJA --}}
    <section class="section service" style="padding-top:50px; background-color:aliceblue">
        <div class="container ">
            <div class="row">
                @foreach ($categories as $item)
                    <div class="col-lg-3 col-md-6 col-sm-6 mb-3 justify-content-center align-items-stretch">
                        <div class="service-item">
                            <div class="icon">
                                <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->image }}" width="100%">
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
                <div class="col-lg-6">
                    <div class="section-title" style="margin:0">
                        <h3>Artikel Unggulan</h3>
                        <hr class="orange-hr">
                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-md-12 mb-5">
                            <div class="row">
                                <div class="col-md-4">
                                    <img src="{{ url('') }}/asset/home/images/blog/blog-1.jpg" alt="Gambar Artikel 2"
                                        class="img-fluid">
                                </div>
                                <div class="col-md-8" style="margin:0">
                                    <h5 style="font-size:16px; margin-bottom:0">All test cost 25% in always in
                                        our laboratory</h6>
                                        <p style="font-size:12px; font-weight:bold">20 Juni 2023</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-4">
                                    <img src="{{ url('') }}/asset/home/images/blog/blog-1.jpg" alt="Gambar Artikel 2"
                                        class="img-fluid">
                                </div>
                                <div class="col-md-8" style="margin:0">
                                    <h5 style="font-size:16px; margin-bottom:0">All test cost 25% in always in
                                        our laboratory</h6>
                                        <p style="font-size:12px; font-weight:bold">20 Juni 2023</p>
                                </div>
                            </div>
                            <a href="">
                                <h6 class="mt-3" style="color:orangered">View All</h6>
                            </a>

                            <!-- Tambahkan lebih banyak artikel di sini -->
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="section-title" style="margin:0">
                        <h3>Artikel Lainnya</h3>
                        <hr class="orange-hr">
                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-md-12 mb-5">
                            <div class="row">
                                <div class="col-md-4">
                                    <img src="{{ url('') }}/asset/home/images/blog/blog-1.jpg"
                                        alt="Gambar Artikel 2" class="img-fluid">
                                </div>
                                <div class="col-md-8" style="margin:0">
                                    <h5 style="font-size:16px; margin-bottom:0">All test cost 25% in always in
                                        our laboratory</h6>
                                        <p style="font-size:12px; font-weight:bold">20 Juni 2023</p>
                                </div>

                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-4">
                                    <img src="{{ url('') }}/asset/home/images/blog/blog-1.jpg"
                                        alt="Gambar Artikel 2" class="img-fluid">
                                </div>
                                <div class="col-md-8" style="margin:0">
                                    <h5 style="font-size:16px; margin-bottom:0">All test cost 25% in always in
                                        our laboratory</h6>
                                        <p style="font-size:12px; font-weight:bold">20 Juni 2023</p>
                                </div>

                            </div>

                            <a href="">
                                <h6 class="mt-3" style="color:orangered">View All</h6>
                            </a>

                            <!-- Tambahkan lebih banyak artikel di sini -->
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection
