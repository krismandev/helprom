@extends('layouts.homepage.main')

@section('content')
    <section class="section blog-wrap">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-6 mb-5">
                            <div class="single-blog-item">
                                <img src="{{ asset('storage/' . $category->image) }}" alt="Article Image" class="img-fluid">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="blog-item-content mt-5">
                                <h2 class="mb-4 text-md"><a href="#">{{ $category->name }}</a></h2>
                                {{ $category->description }}

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="sidebar-widget latest-post mb-3">
                        <h5>Artikel Terkait</h5>
                        @foreach ($articles as $item)
                            <div class="row">
                                <div class="col-md-4">
                                    <img src="{{ asset('storage/' . $item->image_path) }}" alt="Gambar Artikel 2"
                                        class="img-fluid">
                                </div>
                                <div class="col-md-8" style="margin:0">
                                    <h4 style=" margin-bottom:0"><a
                                            href="/detail-article/{{ $item->slug }}">{{ $item->title }}</a></h4>
                                    @php
                                        $content = substr($item->content, strpos($item->content, ''), 250);
                                    @endphp
                                    <p style="color:black !important">{!! $content !!} ...</p>
                                    <p style="font-size:12px; font-weight:bold">20 Juni 2023</p>
                                </div>
                            </div>
                            <hr>
                        @endforeach
                        <ul class="pagination pagination-sm m-0 float-right">
                            @if (count($articles) != 0)
                                {{ $articles->links() }}
                            @endif
                        </ul>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
