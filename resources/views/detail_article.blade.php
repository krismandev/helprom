@extends('layouts.homepage.main')

@section('content')
    <section class="section blog-wrap">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="row">
                        <div class="col-lg-12 mb-5">
                            <div class="single-blog-item">

                                <h2 class="mb-4 text-md"><a href="#">{{ $article->title }}</a></h2>
                                <img src="{{ asset('storage/' . $article->image_path) }}" alt="Article Image"
                                    class="img-fluid">

                                <div class="blog-item-content mt-5">
                                    {{-- <div class="blog-item-meta mb-3">
                                        <span class="text-color-2 text-capitalize mr-3"><i
                                                class="icofont-book-mark mr-2"></i> Equipment</span>
                                        <span class="text-muted text-capitalize mr-3"><i class="icofont-comment mr-2"></i>5
                                            Comments</span>
                                        <span class="text-black text-capitalize mr-3"><i class="icofont-calendar mr-2"></i>
                                            28th January 2019</span>
                                    </div> --}}

                                    {!! $article->content !!}

                                    <div class="mt-5 clearfix">
                                        <ul class="float-left list-inline tag-option">
                                            <li class="list-inline-item"><a
                                                    href="/category/{{ $article->category->slug }}">{{ $article->category->name }}</a>
                                            </li>
                                        </ul>
                                        {{-- <ul class="float-right list-inline">
                                            <li class="list-inline-item"> Share: </li>
                                            <li class="list-inline-item"><a href="#" target="_blank"><i
                                                        class="icofont-facebook" aria-hidden="true"></i></a></li>
                                            <li class="list-inline-item"><a href="#" target="_blank"><i
                                                        class="icofont-twitter" aria-hidden="true"></i></a></li>
                                            <li class="list-inline-item"><a href="#" target="_blank"><i
                                                        class="icofont-pinterest" aria-hidden="true"></i></a></li>
                                            <li class="list-inline-item"><a href="#" target="_blank"><i
                                                        class="icofont-linkedin" aria-hidden="true"></i></a></li>
                                        </ul> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="sidebar-wrap pl-lg-4 mt-5 mt-lg-0">

                        <div class="sidebar-widget latest-post mb-3">
                            <h5>Artikel Lainnya</h5>
                            @if (count($articles) != 0)
                                @foreach ($articles as $item)
                                    <div class="">
                                        <span class="text-sm text-muted">{{ $item->created_at }}</span>
                                        <h6 class="my-2"><a
                                                href="/detail-article/{{ $item->slug }}">{{ $item->title }}</a>
                                        </h6>
                                    </div>
                                @endforeach
                            @else
                                <div class="">
                                    <span class="my-2">Tidak ada artikel</span>
                                </div>
                            @endif

                        </div>
                        <div class="sidebar-widget latest-post mb-3">
                            <h5>Artikel Unggulan</h5>

                            @if (count($featured) != 0)
                                @foreach ($featured as $item)
                                    <div class="">
                                        <span class="text-sm text-muted">{{ $item->created_at }}</span>
                                        <h6 class="my-2"><a
                                                href="/detail-article/{{ $item->slug }}">{{ $item->title }}</a>
                                        </h6>
                                    </div>
                                @endforeach
                            @else
                                <div class="">
                                    <span class="my-2">Tidak ada artikel</span>
                                </div>
                            @endif
                        </div>

                        <div class="sidebar-widget category mb-3">
                            <h5 class="mb-4">Kategori</h5>

                            <ul class="list-unstyled">

                                @if (count($categories) !== 0)
                                    @foreach ($categories as $item)
                                        <li class="align-items-center">
                                            <a href="/category/{{ $item->slug }}">{{ $item->name }}</a>
                                            <span>({{ count($item->articles) }})</span>
                                        </li>
                                    @endforeach
                                @endif

                            </ul>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
