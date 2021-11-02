@extends('layouts.default')
@section('content')
    <div class="pt-6 px-7 pb-10 md:flex md:justify-center lg:p-0 lg:items-center lg:h-full">
        <div class="md:w-3/5 md:shadow-2xl md:px-7 md:py-6 md:border md:border-gray-300 md:rounded-xl md:my-10
        lg:w-2/4 lg:border-0 lg:shadow-none lg:px-28 lg:py-0 lg:my-0 lg:max-w-3xl lg:min-w-max">
            <div class="text-center pt-5 pb-9 lg:pb-14">
                <h2 class="font-semibold text-2xl lg:text-4xl">Sign in to your account</h2>
            <!-- Session Status -->
            <x-auth-session-status class="mb-4" :status="session('status')" />

            <!-- Validation Errors -->
            <x-auth-validation-errors :errors="$errors" />
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
                        <a href="#" class="block text-purple-700 hover:text-purple-400">Forgot your password?</a>
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