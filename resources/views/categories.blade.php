@extends('layouts.main')

@section('container')
    @include('partials.navbar')
    <section id="category" class="text-white">
        <div class="container">
            <div class="flex justify-center overflow-hidden pt-14">
                <div class="flex flex-col items-center px-10 py-5 md:p-20">
                    <h1 class="max-w-6xl text-3xl font-semibold text-center md:text-5xl">"Unveiling the Design Spectrum
                        Categories in
                        the
                        World of
                        Design"</h1>
                    <div
                        class="grid max-w-2xl grid-cols-1 mx-auto mt-16 gap-x-8 gap-y-20 lg:mx-0 lg:max-w-none lg:grid-cols-3">
                        @foreach ($categories as $category)
                            <div class="flex items-start">

                            </div>
                            {{-- <div class="flex items-start">
                                <div class="relative w-full">
                                    <img src="https://source.unsplash.com/1200x400?{{ $category->name }}"
                                        class="aspect-[16/9] w-full bg-gray-100 object-cover sm:aspect-[2/1] lg:aspect-[3/2]"
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
                            </div> --}}
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('partials.footer')
@endsection
