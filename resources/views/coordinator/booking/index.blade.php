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
                <div class="actions">
                    <a href="{{ url('/coordinator/add-booking/') }}" class="button primary">Add Booking</a>
                </div>
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
            <table>
                <thead>
                    {{-- <th>No.</th> --}}
                    <th>Client Name</th>
                    <th>Coordinator Name</th>
                    <th>Event Date</th>
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
                            <td>{{ $bookingItem->event_time }}</td>
                            <td>{{ $bookingItem->status }}</td>
                            <td class="actions">
                                <div class="actions-group">
                                    <a href="{{ url('/coordinator/edit-booking/' . $bookingItem->booking_id) }}" class="button outline">Edit</a>

                                    <form method="POST" action="{{ url('/coordinator/delete-booking/' . $bookingItem->booking_id) }} }}">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="button outline">Delete</button>
                                    </form>
                                </div>

                                <div class="actions-group">
                                    <form method="POST" action="{{ url('/coordinator/update-booking/status/' . $bookingItem->booking_id) }} }}">
                                        @csrf
                                        @method('PATCH')
                                        <input type="hidden" name="status" value="Confirmed">
                                        <button type="submit" class="primary">Accept</button>
                                    </form>

                                    <form method="POST" action="{{ url('/coordinator/update-booking/status/' . $bookingItem->booking_id) }} }}">
                                        @csrf
                                        @method('PATCH')
                                        <input type="hidden" name="status" value="Finished">
                                        <button type="submit" class="primary">Finished</button>
                                    </form>

                                    <form method="POST" action="{{ url('/coordinator/update-booking/status/' . $bookingItem->booking_id) }} }}">
                                        @csrf
                                        @method('PATCH')
                                        <input type="hidden" name="status" value="Declined">
                                        <button type="submit" class="destructive">Decline</button>
                                    </form>
                                </div>
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

