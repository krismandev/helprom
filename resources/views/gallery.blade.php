@extends('layouts.homepage.main')

@section('content')
    <section class="section">
        <div class="container">
            <h2 class="mb-4 text-md"><a href="#">Gallery</a></h2>
            <div class="row">
                @foreach ($galleries as $item)
                    <div class="col-lg-4">
                        <div class="card">
                            <img class="card-img-top" src="{{ asset('storage/' . $item->image_path) }}" width="200"
                                height="200" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">{{ $item->title }}</h5>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="row">
                <ul class="pagination pagination-sm m-0 float-right">
                    @if (count($galleries) != 0)
                        {{ $galleries->links() }}
                    @endif
                </ul>
            </div>
        </div>
    </section>
@endsection
