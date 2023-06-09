@extends('layouts.main')

@section('container')
    @include('partials.navbar')
    <section id="category" class="text-white">
        <div class="container">
            <div class="relative overflow-hidden pt-14">
                <div class="flex p-20 items">
                    <h1>"Unveiling the Design Spectrum Categories in the World of Design"</h1>
                    @foreach ($categories as $category)
                        <div class="col-md-4">
                            <div class="card text-bg-dark">
                                <img src="https://source.unsplash.com/1200x400?{{ $category->name }}" class="card-img"
                                    alt="...">
                                <div class="card-img-overlay">
                                    <div class="px-2 py-1 position-absolute" style="background-color: rgba(0,0,0,0.7)">
                                        <a class="text-white text-decoration-none"
                                            href="blog?category={{ $category->slug }}">
                                            <h5 class="card-title">{{ $category->name }}</h5>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    @include('partials.footer')
@endsection
