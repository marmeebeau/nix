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
                <div class="actions">
                    <a href="{{ url('/coordinator/add-client/') }}" class="button primary">Add User</a>
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

            <table>
                <thead>
                    {{-- <th>No.</th> --}}
                    <th>Client Name</th>
                    <th>Package Name</th>
                    <th>Review Description</th>
                    <th>Review Rating</th>
                    <th>Actions</th>
                </thead>
                <tbody>
                    @forelse ($data as $index => $dataItem)
                        <tr>
                            {{-- <td>{{ $index + 1 }}</td> --}}
                            <td>{{ $dataItem->client->client_fname }}</td>
                            <td>{{ $dataItem->eventPackage->package_name }}</td>
                            <td>{{ $dataItem->review_description }}</td>
                            <td>{{ $dataItem->rating }}</td>
                            <td class="actions">
                                <a href="{{ url('/coordinator/edit-feedback/' . $dataItem->package_id) }}" class="button outline">Edit</a>

                                {{-- <form method="POST" action="{{ url('/coordinator/delete-client/' . $dataItem->client_id) }} }}">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="button outline">Delete</button>
                                </form> --}}
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

