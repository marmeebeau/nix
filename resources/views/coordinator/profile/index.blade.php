<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Profile</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="{{ asset('css/global.css') }}">
        <link rel="stylesheet" href="{{ asset('css/auth.css') }}">
        <link rel="stylesheet" href="{{ asset('css/common.css') }}">
        <link rel="stylesheet" href="{{ asset('css/layouts.css') }}">
        <link rel="stylesheet" href="{{ asset('css/index.css') }}">

    </head>
    <body class="">

        @include('layouts.navbar')

        <main class="profile-container">
            <form method="POST" action="{{ url('/coordinator/profile-update/' . auth('coordinator')->user()->coordinator_id) }}">
                @csrf
                @method('PUT')

                <div class="fields">

                    @if (auth('coordinator')->user()->profile_image)
                    <div class="field">
                        <img src="{{ asset(auth('coordinator')->user()->profile_image) }}" alt="{{ auth('coordinator')->user()->coordinator_fname }}" width="200">
                        <div class="details">
                            <span class="username">
                                {{ auth('coordinator')->user()->coordinator_fname }}

                                {{ auth('coordinator')->user()->coordinator_lname }}
                            </span>
                            <span class="email">
                                {{ auth('coordinator')->user()->email }}
                            </span>
                        </div>
                    </div>
                    @endif
                    <div class="actions">

                        <x-button class="button primary">
                            {{ __('Update Profile') }}
                        </x-button>
                    </div>

                    <div class="field">
                        <label for="coordinator_username">{{ __('Username') }}</label>
                        <input id="coordinator_username" class="block mt-1 w-full" type="text" name="coordinator_username" value="{{ old('coordinator_username', auth('coordinator')->user()->coordinator_username) }}" required autofocus placeholder="Username" />
                    </div>


                    <div class="field profile">
                        <label for="profile_image">{{ __('Profile Image') }}</label>
                        <input id="profile_image" class="block mt-1 w-full" type="file" name="profile_image" accept="image/*" />
                    </div>

                    <div class="field">
                        <label for="email">{{ __('Email Address') }}</label>
                        <input id="email" class="block mt-1 w-full" type="email" name="email" value="{{ old('email', auth('coordinator')->user()->email) }}" required placeholder="Email Address" />
                    </div>

                    <div class="field">
                        <label for="coordinator_fname">{{ __('First Name') }}</label>
                        <input id="coordinator_fname" class="block mt-1 w-full" type="text" name="coordinator_fname" value="{{ old('coordinator_fname', auth('coordinator')->user()->coordinator_fname) }}" required placeholder="First Name" />
                    </div>

                    <div class="field">
                        <label for="coordinator_lname">{{ __('Last Name') }}</label>
                        <input id="coordinator_lname" class="block mt-1 w-full" type="text" name="coordinator_lname" value="{{ old('coordinator_lname', auth('coordinator')->user()->coordinator_lname) }}" required placeholder="Last Name" />
                    </div>

                    <div class="field">
                        <label for="coordinator_contactnumber">{{ __('Contact Number') }}</label>
                        <input id="coordinator_contactnumber" class="block mt-1 w-full" type="text" name="coordinator_contactnumber" value="{{ old('coordinator_contactnumber', auth('coordinator')->user()->coordinator_contactnumber) }}" required placeholder="Contact Number" />
                    </div>

                    <div class="field">
                        <label for="coordinator_city">{{ __('City') }}</label>
                        <input id="coordinator_city" class="block mt-1 w-full" type="text" name="coordinator_city" value="{{ old('coordinator_city', auth('coordinator')->user()->coordinator_city) }}" required placeholder="City" />
                    </div>
                </div>
            </form>
        </main>
    </body>
</html>

