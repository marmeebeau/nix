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
                <h2 class="title">Booking</h2>
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
                    {{-- <th>No.</th> --}}
                    <th>Client Name</th>
                    <th>Coordinator Name</th>
                    <th>Event Date</th>
                    <th>Event Description</th>
                    <th>Event Time</th>
                    <th>Status</th>
                    <th>Actions</th>
                </thead>
                <tbody>
                    @forelse ($booking as $index => $bookingItem)
                        <tr>
                            {{-- <td>{{ $index + 1 }}</td> --}}
                            <td>{{ $bookingItem->client->client_fname}}</td>
                            <td>{{ $bookingItem->coordinator->coordinator_fname}}</td>
                            <td>{{ $bookingItem->event_date }}</td>
                            <td>{{ $bookingItem->event_description }}</td>
                            <td>{{ $bookingItem->event_time }}</td>
                            <td>{{ $bookingItem->status }}</td>
                            <td class="actions">
                                <form method="POST" action="{{ url('/coordinator/update-booking/' . $bookingItem->booking_id) }} }}">
                                    @csrf
                                    @method('PATCH')
                                    <input type="hidden" name="status" value="Confirmed">
                                    <button type="submit" class="primary">Accept</button>
                                </form>

                                <form method="POST" action="{{ url('/coordinator/update-booking/' . $bookingItem->booking_id) }} }}">
                                    @csrf
                                    @method('PATCH')
                                    <input type="hidden" name="status" value="Declined">
                                    <button type="submit" class="destructive">Decline</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4">No bookings found.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </main>
        <script src="{{ asset('js/index.js') }}" type="module"></script>
        <script src="{{ asset('js/menuToggle.js') }}" type="module"></script>
        <script src="{{ asset('js/radioCheckboxToggle.js') }}" type="module"></script>
    </body>
</html>

