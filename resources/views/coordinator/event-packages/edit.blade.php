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
                <h2 class="title">Event Packages</h2>
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

            <form method="POST" action="{{ url('/coordinator/update-event-packages/' . $eventPackage->package_id) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="fields">
                    <div class="field">
                        <label for="package_name">{{ __('Package Name') }}</label>
                        <input id="package_name" class="block mt-1 w-full" type="text" name="package_name" value="{{ old('package_name', $eventPackage->package_name) }}" required autofocus placeholder="Package Name" />
                    </div>

                    <div class="field">
                        <label for="package_type">{{ __('Package Type') }}</label>
                        <input id="package_type" class="block mt-1 w-full" type="text" name="package_type" value="{{ old('package_type', $eventPackage->package_type) }}" required placeholder="Package Type" />
                    </div>

                    <div class="field">
                        <label for="package_description">{{ __('Package Description') }}</label>
                        <textarea id="package_description" class="block mt-1 w-full" name="package_description" required placeholder="Package Description">{{ old('package_description', $eventPackage->package_description) }}</textarea>
                    </div>

                    <div class="field">
                        <label for="package_guest">{{ __('Number of Guests') }}</label>
                        <input id="package_guest" class="block mt-1 w-full" type="number" name="package_guest" value="{{ old('package_guest', $eventPackage->package_guest) }}" required placeholder="Number of Guests" />
                    </div>

                    <div class="field">
                        <label for="package_price">{{ __('Package Price') }}</label>
                        <input id="package_price" class="block mt-1 w-full" type="text" name="package_price" value="{{ old('package_price', $servicePrice) }}" required />
                    </div>

                    <div class="field">
                        <label for="package_image">{{ __('Package Image') }}</label>
                        <input id="package_image" class="block mt-1 w-full" type="file" name="package_image" accept="image/*" />
                    </div>

                    @if ($eventPackage->package_image)
                    <div class="field">
                        <p>Current Image:</p>
                        <img src="{{ asset($eventPackage->package_image) }}" alt="{{ $eventPackage->package_name }}" width="200">
                    </div>
                    @endif

                    <div class="actions">
                        <a href="{{ url('/coordinator/event-packages') }}" class="button outline">
                            {{ __('Go Back') }}
                        </a>
                        <x-button class="button primary">
                            {{ __('Submit') }}
                        </x-button>
                    </div>
                </div>
            </form>

        </main>
        <script src="{{ asset('js/index.js') }}" type="module"></script>
        <script src="{{ asset('js/menuToggle.js') }}" type="module"></script>
        <script src="{{ asset('js/radioCheckboxToggle.js') }}" type="module"></script>
    </body>
</html>

