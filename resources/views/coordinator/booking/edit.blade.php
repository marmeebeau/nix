<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Edit Booking</title>

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
                <h2 class="title">Edit Booking</h2>
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

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form method="POST" action="{{ url('/coordinator/update-booking/' .$booking->booking_id) }}">
                @csrf
                @method('PUT')
                <div class="fields">
                    <div class="field">
                        <label for="event_date">{{ __('Event Date') }}</label>
                        <input id="event_date" class="block mt-1 w-full" type="date" name="event_date" value="{{ $booking->event_date }}" required autofocus />
                    </div>

                    <div class="field">
                        <label for="event_time">{{ __('Event Time') }}</label>
                        <input id="event_time" class="block mt-1 w-full" type="time" name="event_time" value="{{ $booking->event_time }}" required />
                    </div>

                    <div class="field">
                        <label for="guests">{{ __('Number of Guests') }}</label>
                        <input id="guests" class="block mt-1 w-full" type="number" name="guests" value="{{ $booking->guests }}" required />
                    </div>

                    <div class="field">
                        <label for="venue">{{ __('Venue') }}</label>
                        <input id="venue" class="block mt-1 w-full" type="text" name="venue" value="{{ $booking->venue }}" required />
                    </div>

                    <div class="field">
                        <label for="budget">{{ __('Budget') }}</label>
                        <input id="budget" class="block mt-1 w-full" type="text" name="budget" value="{{ $booking->budget }}" required />
                    </div>

                    <div class="field">
                        <label for="message">{{ __('Message') }}</label>
                        <textarea id="message" class="block mt-1 w-full" name="message" rows="3">{{ $booking->message }}</textarea>
                    </div>

                    <div class="field">
                        <label for="client_id">{{ __('Client') }}</label>
                        <select id="client_id" class="block mt-1 w-full" name="client_id" required>
                            @foreach ($clients as $client)
                                <option value="{{ $client->client_id }}" {{ $client->client_id == $booking->client_id ? 'selected' : '' }}>{{ $client->client_fname }} {{ $client->client_lname }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="field">
                        <label for="package_id">{{ __('Event Package') }}</label>
                        <select id="package_id" class="block mt-1 w-full" name="package_id" required>
                            @foreach ($packages as $package)
                                <option value="{{ $package->package_id }}" {{ $package->package_id == $booking->package_id ? 'selected' : '' }}>{{ $package->package_name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="field">
                        <label for="coordinator_id">{{ __('Coordinator') }}</label>
                        <select id="coordinator_id" class="block mt-1 w-full" name="coordinator_id" required>
                            @if (empty($booking->coordinator_id))
                                @foreach ($coordinators as $coordinator)
                                    <option value="{{ $coordinator->id }}">{{ $coordinator->name }}</option>
                                @endforeach
                            @else
                                @foreach ($coordinators as $coordinator)
                                    <option value="{{ $coordinator->coordinator_id }}">{{ $coordinator->coordinator_fname }} {{ $coordinator->coordinator_lname }}</option>
                                @endforeach
                            @endif
                        </select>
                    </div>

                    <div class="actions">
                        <a href="{{ url('/bookings') }}" class="button outline">
                            {{ __('Go Back') }}
                        </a>
                        <x-button class="button primary">
                            {{ __('Update') }}
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
