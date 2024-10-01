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
                <h2 class="title">Feedbacks</h2>
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

            <form method="POST" action="{{ url('/coordinator/update-feedback/' . $review->review_id) }}">
                @csrf
                @method('PUT')

                <div class="fields">
                    <div class="field">
                        <label for="rating">{{ __('Rating') }}</label>
                        <select id="rating" class="block mt-1 w-full" name="rating" required>
                            @for ($i = 1; $i <= 5; $i++)
                                <option value="{{ $i }}" {{ old('rating', $review->rating) == $i ? 'selected' : '' }}>
                                    {{ $i }} Stars
                                </option>
                            @endfor
                        </select>
                    </div>

                    <div class="field">
                        <label for="review_description">{{ __('Review Description') }}</label>
                        <textarea id="review_description" class="block mt-1 w-full" name="review_description" required placeholder="Write your review here...">{{ old('review_description', $review->review_description) }}</textarea>
                    </div>

                    <div class="field">
                        <label for="package_id">{{ __('Event Package') }}</label>
                        <select id="package_id" class="block mt-1 w-full" name="package_id" required>
                            @foreach ($eventPackages as $package)
                                <option value="{{ $package->package_id }}" {{ old('package_id', $review->package_id) == $package->package_id ? 'selected' : '' }}>
                                    {{ $package->package_name }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="field">
                        <label for="client_id">{{ __('Client') }}</label>
                        <select id="client_id" class="block mt-1 w-full" name="client_id" required>
                            @foreach ($clients as $client)
                                <option value="{{ $client->client_id }}" {{ old('client_id', $review->client_id) == $client->client_id ? 'selected' : '' }}>
                                    {{ $client->client_fname }} {{ $client->client_lname }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="actions">
                        <a href="{{ route('go.back') }}" class="button outline">
                            {{ __('Go Back') }}
                        </a>
                        <x-button class="button primary">
                            {{ __('Update') }}
                        </x-button>
                    </div>
                </div>
            </form>

        </main>
    </body>
</html>

