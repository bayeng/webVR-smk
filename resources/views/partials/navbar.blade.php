{{-- <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
        <a class="navbar-brand" href="/">Kunam</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" aria-current="page"
                        href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('blog') ? 'active' : '' }}" href="/blog">blog</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link {{ Request::is('about') ? 'active' : '' }}" href="/about">about</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link {{ Request::is('categories') ? 'active' : '' }}"
                        href="/categories">Categories</a>
                </li>

            </ul>
            <ul class="navbar-nav ms-auto">
                @auth
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Welcome, {{ auth()->user()->name }}
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/dashboard"><i class="bi bi-layout-text-sidebar-reverse"></i>
                                    Dashboard</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li>
                                <form action="/logout" method="POST">
                                    @csrf
                                    <button class="dropdown-item" type="submit"><i class="bi bi-box-arrow-right"></i>
                                        Logout</button>
                                </form>
                            </li>
                        </ul>
                    </li>
                @else
                    <li class="nav-item">
                        <a href="/login" class="nav-link"><i class="bi bi-box-arrow-in-right"></i> Login</a>
                    </li>
                @endauth
            </ul>
        </div>
    </div>
</nav> --}}

<header class="bg-transparent absolute top-0 left-0 right-0 w-full flex items-center z-10 justify-center">
    <div class="container">
        <div class="relative flex items-center justify-between">
            <div class="px-4">
                <img src="img/logo-vr.png" class="h-16 w-16" href="#home" alt="">
            </div>
            <div class="flex items-center px-4">
                <button id="hamburger" name="hamburger" type="button" class="absolute right-4 block lg:hidden">
                    <span class="hamburger-line origin-top-left transition duration-300 ease-in-out"></span>
                    <span class="hamburger-line transition duration-300 ease-in-out"></span>
                    <span class="hamburger-line origin-bottom-left transition duration-300 ease-in-out"></span>
                </button>

                <nav id="nav-menu"
                    class="absolute right-4 top-full hidden w-full max-w-[250px] rounded-lg bg-[#2B2B2B] py-5 shadow-lg lg:static lg:block lg:max-w-full lg:rounded-none lg:bg-transparent lg:shadow-none">
                    <ul class="block lg:flex">
                        <li class="group">
                            <a href="/"
                                class="mx-8 flex py-2 text-base group-hover:text-slate-600 {{ Request::is('/') ? 'text-white' : 'text-slate-400' }}">Home</a>
                        </li>
                        <li class="group">
                            <a href="/blog"
                                class="mx-8 flex py-2 text-base group-hover:text-slate-600 {{ Request::is('blog') ? 'text-white' : 'text-slate-400' }}">Blog</a>
                        </li>
                        <li class="group">
                            <a href="/about"
                                class="mx-8 flex py-2 text-base group-hover:text-slate-600 {{ Request::is('about') ? 'text-white' : 'text-slate-400' }}">About</a>
                        </li>
                        <li class="group">
                            <a href="/categories"
                                class="mx-8 flex py-2 text-base group-hover:text-slate-600 {{ Request::is('categories') ? 'text-white' : 'text-slate-400' }}">Categories</a>
                        </li>
                        <li class="group">
                            <a href="/login"
                                class="mx-8 flex py-2 text-base group-hover:text-slate-600 {{ Request::is('login') ? 'text-white' : 'text-slate-400' }}">Login
                                <span aria-hidden="true">&rarr;</span></a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</header>
