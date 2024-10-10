<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

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

        <main class="booking-container">
            <header>
                <h2 class="title">Users</h2>
            </header>

            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            @if (session('error'))
                <div class="alert alert-error">
                    {{ session('error') }}
                </div>
            @endif

            <form method="POST" action="{{ url('/coordinator/add-client/') }}">
                @csrf
                @method('POST')
                <div class="fields">
                    <div class="field">
                        <label for="client_username">{{ __('Username') }}</label>
                        <input id="client_username" class="block mt-1 w-full" type="text" name="client_username" :value="old('client_username')" required autofocus placeholder="Username" />
                    </div>

                    <div class="field">
                        <label for="client_fname">{{ __('First Name') }}</label>
                        <input id="client_fname" class="block mt-1 w-full" type="text" name="client_fname" :value="old('client_fname')" required placeholder="First Name" />
                    </div>

                    <div class="field">
                        <label for="client_lname">{{ __('Last Name') }}</label>
                        <input id="client_lname" class="block mt-1 w-full" type="text" name="client_lname" :value="old('client_lname')" required placeholder="Last Name" />
                    </div>

                    <div class="field">
                        <label for="client_phonenum">{{ __('Phone Number') }}</label>
                        <input id="client_phonenum" class="block mt-1 w-full" type="text" name="client_phonenum" :value="old('client_phonenum')" required placeholder="Phone Number" />
                    </div>

                    <div class="field">
                        <label for="client_email">{{ __('Email Address') }}</label>
                        <input id="client_email" class="block mt-1 w-full" type="email" name="client_email" :value="old('client_email')" required placeholder="Email Address" />
                    </div>

                    <div class="actions">
                        <a href="{{ url('/coordinator/clients') }}" class="button outline">
                            {{ __('Go Back') }}
                        </a>
                        <x-button class="button primary">
                            {{ __('Submit') }}
                        </x-button>
                    </div>
                </div>
            </form>
        <script src="{{ asset('js/index.js') }}" type="module"></script>
        <script src="{{ asset('js/menuToggle.js') }}" type="module"></script>
        <script src="{{ asset('js/radioCheckboxToggle.js') }}" type="module"></script>
        </main>
    </body>
</html>

