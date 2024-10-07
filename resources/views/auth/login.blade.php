{{-- <x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
                <span class="ms-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ms-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<!--begin::Head-->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Simple Task Management System') }}</title>

    <meta name="description"
        content="A Simple Task Management System is a software solution designed to help users organize, assign, and track tasks efficiently. It allows users to create, prioritize, and manage tasks in a streamlined and user-friendly way. Ideal for teams and individuals seeking to boost productivity." />
    <meta name="keywords"
        content="task management, to-do list, task tracking, productivity, project management, team collaboration, task prioritization" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="Simple Task Management" />
    <meta property="og:url" content="#/SimpleTaskManagement" />
    <meta property="og:site_name" content="Simple Task Management" />

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

    <!-- Global Stylesheets Bundle -->
    <link href="{{ asset('public/assets/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('public/assets/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
</head>
<!--end::Head-->

<!--begin::Body-->

<body id="kt_body" class="bg-body">
    <!--begin::Main-->
    <div class="d-flex flex-column flex-root">
        <!--begin::Authentication - Sign-up -->
        <div class="d-flex flex-column flex-lg-row flex-column-fluid" style="background-color: #F2C98A">
            <!--begin::Body-->
            <div class="d-flex flex-column flex-lg-row-fluid py-10">

                <!--begin::Content-->
                <div class="d-flex flex-center flex-column flex-column-fluid">
                    <!--begin::Logo-->
                    <a href="#" class="">
                        <img alt="Logo" src="{{ asset('public/assets/img/etracker-logo-1.png') }}" class="h-60px" />
                    </a>
                    <!--end::Logo-->
                    <!--begin::Wrapper-->
                    <div class="w-lg-600px mx-auto">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <!--begin::Heading-->
                            <div class="mb-10 text-center">
                                <!--begin::Title-->
                                <h1 class="text-dark mb-3">Login</h1>
                                <!--end::Title-->
                                <!--begin::Link-->
                                <div class="text-gray-400 fw-bold fs-4">Don't have an account?
                                    <a href="{{ route('register') }}" class="link-primary fw-bolder">Sign Up here</a>
                                </div>
                                <!--end::Link-->
                            </div>
                            <!--end::Heading-->
                            <!-- Email Address -->
                            <div class="mb-3">
                                <label for="email" class="form-label">{{ __('Email') }}</label>
                                <input id="email" type="email"
                                    class="form-control @error('email') is-invalid @enderror" name="email"
                                    value="{{ old('email') }}" required autofocus autocomplete="username">
                                @error('email')
                                    <span class="invalid-feedback d-block text-danger">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <!-- Password -->
                            <div class="mb-3">
                                <label for="password" class="form-label">{{ __('Password') }}</label>
                                <input id="password" type="password"
                                    class="form-control @error('password') is-invalid @enderror" name="password"
                                    required autocomplete="current-password">
                                @error('password')
                                    <span class="invalid-feedback d-block text-danger">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <!-- Remember Me -->
                            <div class="form-check mb-3">
                                <input id="remember_me" type="checkbox" class="form-check-input" name="remember">
                                <label for="remember_me" class="form-check-label">{{ __('Remember me') }}</label>
                            </div>

                            <!-- Actions -->
                            <div class="d-flex justify-content-end align-items-center">
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot your password?') }}
                                    </a>
                                @endif

                                <button type="submit" class="btn btn-primary ms-3">
                                    {{ __('Log in') }}
                                </button>
                            </div>
                        </form>


                    </div>
                    <!--end::Wrapper-->
                </div>
                <!--end::Content-->

            </div>
            <!--end::Body-->
        </div>
        <!--end::Authentication - Sign-up-->
    </div>
    <!--end::Main-->

    <!-- Javascript -->
    <!-- Global Javascript Bundle -->
    <script src="{{ asset('public/assets/plugins/global/plugins.bundle.js') }}"></script>
    <script src="{{ asset('public/assets/js/scripts.bundle.js') }}"></script>
    <!-- Page Custom Javascript -->
    <script src="{{ asset('public/assets/custom/authentication/sign-up/general.js') }}"></script>
</body>
<!--end::Body-->

</html>
