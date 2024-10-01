<x-guest-layout>
    <div class="login-container">
        <img class="bg-img" src="{{ asset('assets/images/nix-productions.png') }}" alt="">

        <div class="wrapper">

            <div name="logo" class="logo">
                <a href="/">
                    <img src="{{ asset('assets/images/NIX.png') }}" alt="">
                </a>
                <p class="description">Production and Events</p>
            </div>

            <!-- Session Status -->
            <x-auth-session-status class="alert alert-success" :status="session('status')" />

            <!-- Validation Errors -->
            <x-auth-validation-errors class="error-message" :errors="$errors" />

            <form method="POST" action="{{ route('coordinator.login') }}">
                @csrf

                <div class="fields">

                    <!-- Email Address -->
                    <div class="field">
                        <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus placeholder="Email" />
                    </div>

                    <!-- Password -->
                    <div class="field">
                        <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="current-password"
                                placeholder="Password" />
                    </div>

                    <!-- Remember Me (Optional) -->
                    {{-- <div class="field remember">
                        <label for="remember_me" class="inline-flex items-center">
                            <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                            <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                        </label>
                    </div> --}}

                    <!-- Register Redirect -->
                    <div class="redirect">
                        <span>Don't have an account?</span>
                        <a href="{{ route('coordinator.register') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                    </div>

                    <div class="actions">
                        {{-- Forgot Password (Optional) --}}
                        {{-- @if (Route::has('password.request'))
                            <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                                {{ __('Forgot your password?') }}
                            </a>
                        @endif --}}

                        <x-button class="button primary">
                            {{ __('Log in') }}
                        </x-button>
                    </div>

                </div>
            </form>



        </div>
    </div>
</x-guest-layout>
