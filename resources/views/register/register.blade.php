@extends('layouts.main')

@section('container')
    <div class="flex min-h-screen dark">
        <div class="flex flex-col justify-center flex-1 px-4 py-12 sm:px-6 lg:flex-none lg:px-20 xl:px-24">
            <div class="w-full max-w-sm mx-auto lg:w-96">
                <div>
                    <img class="w-auto h-20" src="img/logo-vr.png" alt="VR Lab Logo">
                    <h2 class="mt-0 text-2xl font-bold leading-9 tracking-tight text-white">Register your account</h2>
                </div>

                <div class="mt-10">
                    <div>
                        <form action="/register" method="POST" class="space-y-6">
                            @csrf
                            <div>
                                <label for="name" class="block text-sm font-medium leading-6 text-white">Name
                                </label>
                                <div class="">
                                    <input id="name" name="name" type="text" required
                                        class="block w-full rounded-md border-0 bg-white/5 py-1.5 text-white shadow-sm ring-1 ring-inset ring-white/10 focus:ring-2 focus:ring-inset focus:ring-indigo-500 sm:text-sm sm:leading-6">
                                </div>
                                @error('name')
                                    <div class="flex items-center mt-1 ml-1 text-xs font-medium tracking-wide text-red-500">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div>
                                <label for="username" class="block text-sm font-medium leading-6 text-white">Username
                                </label>
                                <div class="">
                                    <input id="username" name="username" type="text" required
                                        class="block w-full rounded-md border-0 bg-white/5 py-1.5 text-white shadow-sm ring-1 ring-inset ring-white/10 focus:ring-2 focus:ring-inset focus:ring-indigo-500 sm:text-sm sm:leading-6">
                                </div>
                                @error('username')
                                    <div class="flex items-center mt-1 ml-1 text-xs font-medium tracking-wide text-red-500">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div>
                                <label for="email" class="block text-sm font-medium leading-6 text-white">Email
                                    address</label>
                                <div class="">
                                    <input id="email" name="email" type="email" autocomplete="email" required
                                        class="block w-full rounded-md border-0 bg-white/5 py-1.5 text-white shadow-sm ring-1 ring-inset ring-white/10 focus:ring-2 focus:ring-inset focus:ring-indigo-500 sm:text-sm sm:leading-6">
                                </div>
                                @error('email')
                                    <div class="flex items-center mt-1 ml-1 text-xs font-medium tracking-wide text-red-500">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div>
                                <label for="password"
                                    class="block text-sm font-medium leading-6 text-white">Password</label>
                                <div class="">
                                    <input id="password" name="password" type="password" autocomplete="current-password"
                                        required
                                        class="block w-full rounded-md border-0 bg-white/5 py-1.5 text-white shadow-sm ring-1 ring-inset ring-white/10 focus:ring-2 focus:ring-inset focus:ring-indigo-500 sm:text-sm sm:leading-6">
                                </div>
                                @error('password')
                                    <div class="flex items-center mt-1 ml-1 text-xs font-medium tracking-wide text-red-500">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div>
                                <button type="submit"
                                    class="flex w-full justify-center rounded-md bg-[#06E3FF] px-3 py-2.5 text-sm font-semibold text-black shadow-sm hover:bg-white/20 hover:text-white focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Sign
                                    in</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
        <div class="relative flex-1 hidden w-0 lg:block">
            <img class="absolute inset-0 object-cover w-full h-full"
                src="https://images.unsplash.com/photo-1622979135225-d2ba269cf1ac?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80"
                alt="">
        </div>
    </div>

    {{-- <div class="flex items-center justify-center px-6 py-12 ite items lg:px-8">
        <div class="px-20 py-14 bg-[#2B2B2B] rounded-2xl drop-shadow-[0_0_20px_20px_rgba(1,1,1,0.2823529412)]">
            <div class="sm:mx-auto sm:w-full sm:max-w-sm">
                <img class="w-auto h-32 mx-auto" src="img/logo-vr.png" alt="VR Lab">
                <h2 class="mt-10 text-2xl font-bold leading-9 tracking-tight text-center text-white">Register your account
                </h2>
            </div>

            <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
                <form action="/register" method="POST" class="space-y-6">
                    @csrf
                    <div>
                        <label for="name" class="block text-sm font-medium leading-6 text-white">Name
                        </label>
                        <div class="">
                            <input id="name" name="name" type="text" required
                                class="block w-full rounded-md border-0 bg-white/5 py-1.5 text-white shadow-sm ring-1 ring-inset ring-white/10 focus:ring-2 focus:ring-inset focus:ring-indigo-500 sm:text-sm sm:leading-6">
                        </div>
                        @error('name')
                            <div class="flex items-center mt-1 ml-1 text-xs font-medium tracking-wide text-red-500">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div>
                        <label for="username" class="block text-sm font-medium leading-6 text-white">username
                        </label>
                        <div class="">
                            <input id="username" name="username" type="text" required
                                class="block w-full rounded-md border-0 bg-white/5 py-1.5 text-white shadow-sm ring-1 ring-inset ring-white/10 focus:ring-2 focus:ring-inset focus:ring-indigo-500 sm:text-sm sm:leading-6">
                        </div>
                        @error('username')
                            <div class="flex items-center mt-1 ml-1 text-xs font-medium tracking-wide text-red-500">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div>
                        <label for="email" class="block text-sm font-medium leading-6 text-white">Email
                            address</label>
                        <div class="">
                            <input id="email" name="email" type="email" autocomplete="email" required
                                class="block w-full rounded-md border-0 bg-white/5 py-1.5 text-white shadow-sm ring-1 ring-inset ring-white/10 focus:ring-2 focus:ring-inset focus:ring-indigo-500 sm:text-sm sm:leading-6">
                        </div>
                        @error('email')
                            <div class="flex items-center mt-1 ml-1 text-xs font-medium tracking-wide text-red-500">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div>
                        <label for="password" class="block text-sm font-medium leading-6 text-white">Password</label>
                        <div class="">
                            <input id="password" name="password" type="password" autocomplete="current-password" required
                                class="block w-full rounded-md border-0 bg-white/5 py-1.5 text-white shadow-sm ring-1 ring-inset ring-white/10 focus:ring-2 focus:ring-inset focus:ring-indigo-500 sm:text-sm sm:leading-6">
                        </div>
                        @error('password')
                            <div class="flex items-center mt-1 ml-1 text-xs font-medium tracking-wide text-red-500">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div>
                        <button type="submit"
                            class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Sign
                            in</button>
                    </div>
                </form>

                <p class="mt-10 text-sm text-center text-gray-400">
                    Not a member?
                    <a href="#" class="font-semibold leading-6 text-indigo-400 hover:text-indigo-300">Start a 14 day
                        free
                        trial</a>
                </p>
            </div>
        </div>
    </div> --}}
@endsection
