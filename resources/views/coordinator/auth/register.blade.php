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

            <form method="POST" action="{{ route('coordinator.register') }}">
                @csrf

                <!-- Name -->
                <div class="fields">

                    <div class="field">
                        <label for="coordinator_username" :value="__('Username')"></label>
                        <input id="coordinator_username" class="block mt-1 w-full" type="text" name="coordinator_username" :value="old('coordinator_username')" required autofocus placeholder="Username" />
                    </div>

                    <!-- Email Address -->
                    <div class="field">
                        <label for="email" :value="__('Email')"></label>
                        <input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required placeholder="Email" />
                    </div>

                    <!-- Password -->
                    <div class="field">
                        <label for="password" :value="__('Password')"></label>
                        <input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password"
                            placeholder="Password" />
                    </div>

                    <div class="group">
                        <!-- First Name -->
                        <div class="field">
                            <label for="coordinator_fname" :value="__('First Name')"></label>
                            <input id="coordinator_fname" class="block mt-1 w-full" type="text" name="coordinator_fname" :value="old('coordinator_fname')" required placeholder="First Name" />
                        </div>

                        <!-- Last Name -->
                        <div class="field">
                            <label for="coordinator_lname" :value="__('Last Name')"></label>
                            <input id="coordinator_lname" class="block mt-1 w-full" type="text" name="coordinator_lname" :value="old('coordinator_lname')" required placeholder="Last Name" />
                        </div>

                    </div>

                    {{-- <div class="group">

                        <!-- Birthday -->
                        <div class="field">
                            <label for="coordinator_birthday" :value="__('Birthday')"></label>
                            <input id="coordinator_birthday" class="block mt-1 w-full" type="date" name="coordinator_birthday" :value="old('coordinator_birthday')" required />
                        </div>

                        <!-- Gender -->
                        <div class="field">
                            <label for="coordinator_gender" :value="__('Gender')"></label>
                            <select id="coordinator_gender" class="block mt-1 w-full" name="coordinator_gender" required>
                                <option value="">Select Gender</option>
                                <option value="M" {{ old('coordinator_gender') == 'M' ? 'selected' : '' }}>Male</option>
                                <option value="F" {{ old('coordinator_gender') == 'F' ? 'selected' : '' }}>Female</option>
                            </select>
                        </div> --}}

                    </div>

                    <!-- Contact Number -->
                    <div class="field">
                        <label for="coordinator_contact" :value="__('Contact Number')"></label>
                        <input id="coordinator_contact" class="block mt-1 w-full" type="text" name="coordinator_contact" :value="old('coordinator_contact')" required placeholder="Contact Number" />
                    </div>

                    <!-- City -->
                    <div class="field">
                        <label for="coordinator_city" :value="__('City')"></label>
                        <input id="coordinator_city" class="block mt-1 w-full" type="text" name="coordinator_city" :value="old('coordinator_city')" required placeholder="City" />
                    </div>

                    <div class="redirect">
                        <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('coordinator.login') }}">
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
