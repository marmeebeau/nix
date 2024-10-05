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

        <main class="contact-container">

            <img src="assets/images/pic-six.png" alt="">

            <form method="POST" action="{{ route('contact.store') }}">
                @csrf
                @method('POST')
                <h2 class="title">Contact Us</h2>

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

                <div class="fields">

                    <div class="field">
                        <!-- <label for=""></label> -->
                        <input id="first_name" name="first_name" type="text" placeholder="First Name" required>
                    </div>
                    <div class="field">
                        <!-- <label for=""></label> -->
                        <input id="last_name" name="last_name" type="text" placeholder="Last Name" required>
                    </div>
                    <div class="field">
                        <!-- <label for=""></label> -->
                        <input id="email" name="email" type="email" placeholder="Email" required>
                    </div>
                    <div class="field">
                        <!-- <label for=""></label> -->
                        <input id="phone_num" name="phone_num" type="text" placeholder="phone_num" required>
                    </div>
                    <div class="field">
                        <!-- <label for=""></label> -->
                        <input id="date" name="date" type="date" placeholder="Date of Event" required>
                    </div>
                    <div class="field">
                        <!-- <label for=""></label> -->
                        <input id="venue" name="venue" type="text" placeholder="Reception/Celebration Venue" required>
                    </div>
                    <div class="field">
                        <!-- <label for=""></label> -->
                        <input id="budget" name="budget" type="text" placeholder="Budget for the Whole Event" required>
                    </div>
                    <div class="field">
                        <!-- <label for=""></label> -->
                        <input id="guests" name="guests" type="text" placeholder="Re-estimated Guests" required>
                    </div>
                    <div class="field">
                        <!-- <label for=""></label> -->
                        <textarea id="message" name="message" type="text" placeholder="Message" required></textarea>
                    </div>
                    <div class="actions">
                        <button type="submit" class="primary">Inquire Now</button>
                    </div>
                </div>
            </form>

        </main>
        @include('layouts.footer')
        <script src="{{ asset('js/index.js') }}" type="module"></script>
        <script src="{{ asset('js/menuToggle.js') }}" type="module"></script>
        <script src="{{ asset('js/radioCheckboxToggle.js') }}" type="module"></script>
    </body>
</html>
