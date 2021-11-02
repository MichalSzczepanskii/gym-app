{{--@extends('layouts.default')--}}
{{--@section('content')--}}
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
{{--        @csrf--}}

{{--        <!-- Email Address -->--}}
{{--            <div>--}}
{{--                <x-label for="email" :value="__('Email')" />--}}

{{--                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />--}}
{{--            </div>--}}

{{--            <!-- Password -->--}}
{{--            <div class="mt-4">--}}
{{--                <x-label for="password" :value="__('Password')" />--}}

{{--                <x-input id="password" class="block mt-1 w-full"--}}
{{--                         type="password"--}}
{{--                         name="password"--}}
{{--                         required autocomplete="current-password" />--}}
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
{{--@endsection--}}
@extends('layouts.default')
@section('content')
    <div class="pt-6 px-7 pb-10 md:flex md:justify-center lg:p-0 lg:items-center lg:h-full">
        <div class="md:w-3/5 md:shadow-2xl md:px-7 md:py-6 md:border md:border-gray-300 md:rounded-xl md:my-10
        lg:w-2/4 lg:border-0 lg:shadow-none lg:px-28 lg:py-0 lg:my-0 lg:max-w-3xl lg:min-w-max">
            <div class="text-center pt-5 pb-9 lg:pb-14">
                <h2 class="font-semibold text-2xl lg:text-4xl">Sign in to your account</h2>
            <!-- Session Status -->
            <x-auth-session-status class="mt-4" :status="session('status')" />

            <!-- Validation Errors -->
            <x-auth-validation-errors class="mt-4" :errors="$errors" />
            </div>
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="py-3">
                    <label for="email">Email address</label>
                    <input type="text" name="email" id="email" required
                           class="block border border-gray-300 rounded-md px-3 py-2 w-full">
                </div>
                <div class="py-3">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" required
                           class="block border border-gray-300 rounded-md px-3 py-2 w-full">
                </div>
                <div class="flex justify-between py-5">
                    <div>
                        <label>
                            <input type="checkbox" class="h-4 w-4 border-gray-300 rounded"> Remember me
                        </label>
                    </div>
                    @if (Route::has('password.request'))
                        <a href="{{route('password.request')}}" class="block text-purple-700 hover:text-purple-400">Forgot your password?</a>
                    @endif
                </div>
                <div class="py-4">
                    <button class="w-full py-3 border-2 border-purple-700 rounded-full text-purple-700
                    hover:border-transparent hover:text-white hover:bg-purple-700">Login</button>
                </div>
            </form>
        </div>
        <div class="hidden lg:block w-full h-full" style="background: url('{{asset('img/gym.jpg')}}') center center; background-size: cover">
            &nbsp;
        </div>
    </div>
@endsection