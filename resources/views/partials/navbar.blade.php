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

<header class="absolute top-0 left-0 right-0 z-10 flex items-center justify-center w-full bg-transparent">
    <div class="container">
        <div class="relative flex items-center justify-between">
            <div class="px-4">
                <a href="/">
                    <img src="img/logo-vr.png" class="w-16 h-16" alt="VR Lab">
                </a>
            </div>
            <div class="flex items-center px-4">
                <button id="hamburger" name="hamburger" type="button" class="absolute block right-4 lg:hidden">
                    <span class="transition duration-300 ease-in-out origin-top-left hamburger-line"></span>
                    <span class="transition duration-300 ease-in-out hamburger-line"></span>
                    <span class="transition duration-300 ease-in-out origin-bottom-left hamburger-line"></span>
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
                        @auth
                            <li class="relative group">
                                <button type="button" id="dropdown"
                                    class="inline-flex w-full justify-center gap-x-1.5 rounded-md bg-transparent px-3 py-2 text-sm font-semibold text-white shadow-sm ring-1 ring-inset ring-gray-600 hover:bg-gray-600 hover:bg-opacity-50"
                                    id="menu-button" aria-expanded="true" aria-haspopup="true">
                                    Welcome, {{ auth()->user()->name }}
                                    <svg class="w-5 h-5 -mr-1 text-gray-400" viewBox="0 0 20 20" fill="currentColor"
                                        aria-hidden="true">
                                        <path fill-rule="evenodd"
                                            d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </button>
                                <div id="dropdown-list"
                                    class="hidden lg:absolute bg-[#2B2B2B] my-4 px-4 py-2 rounded-lg right-0 drop-shadow-lg ring-1 ring-inset ring-gray-600 transition ease-out duration-100">
                                    <ul class="space-y-2 text-white lg:w-48">
                                        <li>
                                            <a href="/dashboard"
                                                class="flex p-2 rounded-md hover:bg-gray-600 hover:bg-opacity-50">Dashboard</a>
                                        </li>
                                        <li>
                                            <form action="/logout" method="POST">
                                                @csrf
                                                <button type="submit"
                                                    class="rounded-md bg-red-600/95 px-2.5 py-1.5 text-sm font-semibold text-white shadow-sm hover:bg-white/20">Logout</button>
                                            </form>
                                        </li>
                                    </ul>
                                </div>

                            </li>
                        @else
                            <li class="group">
                                <a href="/login"
                                    class="mx-8 flex py-2 text-base group-hover:text-slate-600 {{ Request::is('login') ? 'text-white' : 'text-slate-400' }}">Login
                                    <span aria-hidden="true">&rarr;</span></a>
                            </li>
                        @endauth
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</header>
