@extends('layouts.main')

@section('container')
    @include('partials.navbar')
    <section>
        <div class="bg-[#2B2B2B]">
            <div class="mx-auto max-w-2xl px-4 py-24 sm:px-6 sm:py-32 lg:max-w-7xl lg:px-8">
                <div class="grid grid-cols-1 items-start gap-x-8 gap-y-16 lg:grid-cols-2">
                    <div>
                        <div class="aspect-h-1 aspect-w-1 overflow-hidden rounded-lg bg-gray-100">
                            @if ($post->image)
                                <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}"
                                    class="h-full w-full object-cover object-center">
                            @else
                                <img src="https://source.unsplash.com/1200x800?{{ $post->category->name }}"
                                    alt="{{ $post->category->name }}" class="h-full w-full object-cover object-center">
                            @endif
                        </div>
                        {{-- <div class="mt-4 grid grid-cols-2 gap-4 sm:mt-6 sm:gap-6 lg:mt-8 lg:gap-8">
                            <div class="aspect-h-1 aspect-w-1 overflow-hidden rounded-lg bg-gray-100">
                                <img src="https://source.unsplash.com/1200x1200?{{ $post->category->name }}"
                                    alt="{{ $post->category->name }}">
                            </div>
                            <div class="aspect-h-1 aspect-w-1 overflow-hidden rounded-lg bg-gray-100">
                                <img src="https://source.unsplash.com/600x600?{{ $post->category->name }}"
                                    alt="{{ $post->category->name }}" class="h-full w-full object-cover object-center">
                            </div>
                        </div> --}}
                    </div>

                    <div>
                        <div class="border-b border-gray-200 pb-10">
                            <div class="flex items-center flex-row">
                                <h2 class="font-medium text-gray-400">
                                    by <a href="/blog?author={{ $post->user->username }}">{{ $post->user->name }}</a>
                                </h2>
                                <a class="rounded-full bg-[#06E3FF] mx-5 px-3 py-1.5 font-medium text-black hover:bg-slate-600"
                                    href="/blog?category={{ $post->category->slug }}">{{ $post->category->name }}</a>
                            </div>
                            <p class="mt-2 text-3xl font-bold tracking-tight text-white sm:text-4xl">{{ $post->title }}
                            </p>
                        </div>

                        <dl class="mt-10 space-y-10">
                            <div>
                                <dt class="text-sm font-medium text-white">Sleek design</dt>
                                <dd class="mt-3 text-sm text-gray-300">The machined kettle has a smooth black finish and
                                    contemporary shape that stands apart from most plastic appliances.</dd>
                            </div>
                            <div>
                                <dt class="text-sm font-medium text-white">Comfort handle</dt>
                                <dd class="mt-3 text-sm text-gray-300">Shaped for steady pours and insulated to prevent
                                    burns.</dd>
                            </div>
                            <div>
                                <dt class="text-sm font-medium text-white">One-button control</dt>
                                <dd class="mt-3 text-sm text-gray-300">The one button control has a digital readout for
                                    setting temperature and turning the kettle on and off.</dd>
                            </div>
                            <div>
                                <dt class="text-sm font-medium text-white">Long spout</dt>
                                <dd class="mt-3 text-sm text-gray-300">Designed specifically for controlled pour-overs that
                                    don&#039;t slash or sputter.</dd>
                            </div>
                        </dl>
                    </div>

                </div>
            </div>
        </div>


    </section>


    {{-- <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h2>{{ $post->title }}</h2>
                @if ($post->image)
                    <div style="max-height: 350px; overflow:hidden;">
                        <img class="img-fluid" src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}">
                    </div>
                @else
                    <img src="https://source.unsplash.com/700x200?{{ $post->category->name }}"
                        alt="{{ $post->category->name }}">
                @endif

                <p>
                    by <a href="/blog?author={{ $post->user->username }}"
                        class="text-decoration-none">{{ $post->user->name }}</a> ||
                    <a href="/blog?category={{ $post->category->slug }}"
                        class="text-decoration-none">{{ $post->category->name }}</a>
                </p>
                <article>
                    {!! $post->body !!}
                </article>

                <a href="/blog"> back</a>

            </div>
        </div>
    </div> --}}
    @include('partials.footer')
@endsection
