<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Receipt</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="{{ asset('css/global.css') }}">
        <link rel="stylesheet" href="{{ asset('css/auth.css') }}">
        <link rel="stylesheet" href="{{ asset('css/common.css') }}">
        <link rel="stylesheet" href="{{ asset('css/layouts.css') }}">
        <link rel="stylesheet" href="{{ asset('css/index.css') }}">

    </head>
    <body class="">

        <div class="receipts">
            <div class="wrapper">
                <header>
                    {{-- <img src="{{ asset('assets/images/') }}" alt="NIX Events and Productions" width="100"> --}}
                    <h1 class="title">NIX Events and Productions</h1>
                    <span class="">Nix Events and Productions Inc.</span>
                    <span class="address">1 Hibbard Avenue, Dumaguete City Negros Oriental</span>
                    <span class="website">nix-events.com</span>
                </header>

                <section class="booking-details">
                    <h2>Booking Details</h2>
                    <div class="details">
                        <div class="detail">
                            <span class="name">Client</span>
                            <span class="value">{{ $booking->client->client_fname }} {{ $booking->client->client_lname }}</span>
                        </div>
                        <div class="detail">
                            <span class="name">Event Date</span>
                            <span class="value">{{ $booking->event_date }}</span>
                        </div>
                        <div class="detail">
                            <span class="name">Event Time</span>
                            <span class="value">{{ $booking->event_time }}</span>
                        </div>
                        <div class="detail">
                            <span class="name">Event Package</span>
                            <span class="value">{{ $booking->eventPackage->package_name }}</span>
                        </div>
                        <div class="detail">
                            <span class="name">Number of Est. Guests</span>
                            <span class="value">{{ $booking->package_guest }}</span>
                        </div>
                        <div class="detail">
                            <span class="name">Total Price</span>
                            <span class="value">{{ $booking->eventPackage->package_price }}</span>
                        </div>
                        <div class="detail">
                            <span class="name">Booking Status</span>
                            <span class="value">{{ $booking->status }}</span>
                        </div>
                    </div>
                </section>

                @if ($rating)
                    <section class="client-rating">
                        <div class="details">
                            <div class="detail">
                                <span class="name">Client Rating</span>
                                <span class="value">{{ $rating }} Stars</span>
                            </div>
                        </div>
                    </section>
                @endif

                {{-- @if ($recommendation)
                    <section class="recommendation">
                        <h2>You Might Also Like</h2>
                        <img src="{{ asset($recommendation->package_image) }}" alt="{{ $recommendation->package_name }}" width="200">
                        <h3>{{ $recommendation->package_name }}</h3>
                        <p>{{ $recommendation->package_description }}</p>
                        <a href="{{ route('event-packages.show', $recommendation->package_id) }}" class="button primary">View Package</a>
                    </section>
                @endif --}}

                <div class="summary">
                    <p>Contact us at: nix@test.com</p>
                    <p>Visit our website: <a href="">nix.com</a></p>
                </div>
            </div>
        </div>
    </body>
</html>

