@extends('layouts.main')

@section('container')
    @include('partials.navbar')

    <section id="about" class="text-white">
        <div class="container">
            <div class="relative overflow-hidden isolate pt-14">
                <div class="flex flex-wrap-reverse px-5 py-10 lg:px-5 lg:py-0">
                    <div class="self-center w-full px-10 py-24 lg:w-1/2">
                        <h1 class="text-5xl font-medium">We are Team who’s love Create some beneficial Product in creative
                            industries
                        </h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed aliquet eros vitae neque consequat,
                            eget
                            vulputate dolor consequat. In porttitor dolor sed eros efficitur fringilla. Vestibulum ante
                            ipsum
                            primis in faucibus orci luctus et ultrices posuere cubilia curae; Suspendisse consequat mauris
                            risus, a aliquet velit consectetur sed. Maecenas id malesuada felis, in bibendum odio. Nullam
                            fermentum urna non pharetra commodo. Ut a ex ac elit luctus bibendum. Sed id nunc id metus
                            aliquet
                            suscipit. Aliquam sed enim eu tellus euismod viverra. Curabitur ac metus mauris. Sed venenatis
                            nulla
                            a est rhoncus fringilla.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('partials.footer')
@endsection
