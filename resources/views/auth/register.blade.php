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

            <!-- Validation Errors -->
            <x-auth-validation-errors class="mb-4" :errors="$errors" />

            <form method="POST" action="{{ route('register') }}">
                @csrf

                <!-- Name -->
                <div class="fields">

                    <div class="field">
                        <label for="name" :value="__('Name')" />

                        <input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus placeholder="Name" />
                    </div>

                    <!-- Email Address -->
                    <div class="field">
                        <label for="email" :value="__('Email')" />

                        <input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required placeholder="Email" />
                    </div>

                    <!-- Password -->
                    <div class="field">
                        <label for="password" :value="__('Password')" />

                        <input id="password" class="block mt-1 w-full"
                                        type="password"
                                        name="password"
                                        required autocomplete="new-password"
                                        placeholder="Password" />
                    </div>

                    <!-- Confirm Password -->
                    <div class="field">
                        <label for="password_confirmation" :value="__('Confirm Password')" />

                        <input id="password_confirmation" class="block mt-1 w-full"
                                        type="password"
                                        name="password_confirmation" required
                                        placeholder="Confirm Password" />
                    </div>

                    <div class="redirect">
                        <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                            {{ __('Already registered?') }}
                        </a>
                    </div>

                    <div class="actions">

                        <x-button class="button primary">
                            {{ __('Register') }}
                        </x-button>
                    </div>

                </div>
            </form>

        </div>
    </div>
</x-guest-layout>
