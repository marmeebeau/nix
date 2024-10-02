<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Receipts</title>

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
                <h2 class="title">Receipts</h2>
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

            <table>
                <thead>
                    <tr>
                        <th>Booking ID</th>
                        <th>Client Name</th>
                        <th>Event Package</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($bookings as $booking)
                        <tr>
                            <td>{{ $booking->booking_id }}</td>
                            <td>{{ $booking->client->client_fname }} {{ $booking->client->client_lname }}</td>
                            <td>{{ $booking->eventPackage->package_name }}</td>
                            <td>{{ $booking->status }}</td>
                            <td>
                                <a href="{{ url('/coordinator/receipt-pdf/'. $booking->booking_id) }}" class="button primary">Generate Receipt</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </main>
        <script src="{{ asset('js/index.js') }}" type="module"></script>
        <script src="{{ asset('js/menuToggle.js') }}" type="module"></script>
        <script src="{{ asset('js/radioCheckboxToggle.js') }}" type="module"></script>
    </body>
</html>

