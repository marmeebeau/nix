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
                <div class="actions">
                    <a href="{{ url('/coordinator/client-add/') }}" class="button primary">Add User</a>
                    <a href="" class="button outline">Download Pdf</a>
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

            <form action="">
                <div class="fields">
                    <div class="field">
                    <div class="field">
                        <label for="coordinator_username" :value="__('Username')"></label>
                        <input id="coordinator_username" class="block mt-1 w-full" type="text" name="coordinator_username" :value="old('coordinator_username')" required autofocus placeholder="Username" />
                    </div>
                    </div>
                </div>
            </form>
        </main>
    </body>
</html>

