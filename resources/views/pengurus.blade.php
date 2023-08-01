@extends('layouts.homepage.main')

@section('content')
    <section class="section">
        <div class="container">
            <h2 class="mb-4 text-md"><a href="#">Pengurus HPU</a></h2>

            {!! $member !!}
        </div>
    </section>
@endsection
