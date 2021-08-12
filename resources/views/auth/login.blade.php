{{--<x-guest-layout>--}}
{{--    <x-auth-card>--}}
{{--        <x-slot name="logo">--}}
{{--            <a href="/">--}}
{{--                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />--}}
{{--            </a>--}}
{{--        </x-slot>--}}

{{--        <!-- Session Status -->--}}
{{--        <x-auth-session-status class="mb-4" :status="session('status')" />--}}

{{--        <!-- Validation Errors -->--}}
{{--        <x-auth-validation-errors class="mb-4" :errors="$errors" />--}}

{{--        <form method="POST" action="{{ route('login') }}">--}}
{{--            @csrf--}}

{{--            <!-- Email Address -->--}}
{{--            <div>--}}
{{--                <x-label for="email" :value="__('Email')" />--}}

{{--                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />--}}
{{--            </div>--}}

{{--            <!-- Password -->--}}
{{--            <div class="mt-4">--}}
{{--                <x-label for="password" :value="__('Password')" />--}}

{{--                <x-input id="password" class="block mt-1 w-full"--}}
{{--                                type="password"--}}
{{--                                name="password"--}}
{{--                                required autocomplete="current-password" />--}}
{{--            </div>--}}

{{--            <!-- Remember Me -->--}}
{{--            <div class="block mt-4">--}}
{{--                <label for="remember_me" class="inline-flex items-center">--}}
{{--                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">--}}
{{--                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>--}}
{{--                </label>--}}
{{--            </div>--}}

{{--            <div class="flex items-center justify-end mt-4">--}}
{{--                @if (Route::has('password.request'))--}}
{{--                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">--}}
{{--                        {{ __('Forgot your password?') }}--}}
{{--                    </a>--}}
{{--                @endif--}}

{{--                <x-button class="ml-3">--}}
{{--                    {{ __('Log in') }}--}}
{{--                </x-button>--}}
{{--            </div>--}}
{{--        </form>--}}
{{--    </x-auth-card>--}}
{{--</x-guest-layout>--}}




    <!DOCTYPE html>
<html lang="hy">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('davlab/libs/swiper/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="{{ asset('davlab/libs/magnific-pupup/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('davlab/css/main.css') }}">
    <title>Davidyants</title>
</head>
<body>
<div class="page notfound-page login-page">
    <main class="main notfound-main login-main">
        <div class="login-container">
            <div class="login-content">
                <div class="login-logo">
                    <img src="{{ asset('davlab/img/logo.svg') }}" alt="">
                </div>
                <div class="login-form">
                    <form action="{{ route('login') }}", method="post">
                        @csrf
                        <div class="username_input input-parent"><input type="email" name="email" placeholder="Մուտքանուն*"></div>
                        <div class="password_input input-parent"><input type="password" name="password" placeholder="Գաղտնաբառ*"></div>
                        <x-auth-validation-errors class="mb-4" :errors="$errors" />
                        <div class="login-btn">
                            <button type="submit">Մուտք</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </main>
    <footer class="footer">
        <div class="footer-bottom">
            <div class="container">
                <div class="row footer-bottom-row">
                    <p>© Davidyants laboratories, All rights reserved</p>
                    <p>Designed & Developed by <a href="https://twelve.company/" target="_blank">Twelve company</a></p>
                </div>
            </div>
        </div>
    </footer>
</div>
</body>
</html>
