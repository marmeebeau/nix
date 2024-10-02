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

        <main class="landing-container">
            <section class="hero">
                <img src="assets/images/nix-productions.png" alt="">
            </section>


            <section class="events">
                <header>
                    <h1 class="title">The small details make the difference.</h1>
                    <p class="description">"Plans are nothing: planning is everything." -Dwight D. Eisenhower</p>
                </header>
                <div class="cards">
                    <div class="card">
                        <h2 class="title">WEDDINGS</h2>
                        <img src="assets/images/Weddings.png" alt="">
                    </div>
                    <div class="card">
                        <h2 class="title">Corporate Events</h2>
                        <img src="assets/images/corporate-events.png" alt="">
                    </div>
                    <div class="card">
                        <h2 class="title">Social Gathering</h2>
                        <img src="assets/images/social-gathering.png" alt="">
                    </div>
                </div>
                <div class="actions">
                    <a href="" class="button primary">BOOK YOUR EVENT</a>
                </div>
            </section>
        </main>

        @include('layouts.footer')
        <script src="{{ asset('js/index.js') }}" type="module"></script>
        <script src="{{ asset('js/menuToggle.js') }}" type="module"></script>
        <script src="{{ asset('js/radioCheckboxToggle.js') }}" type="module"></script>
    </body>
</html>

