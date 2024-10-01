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

        <main class="portfolio-container">
            <section class="hero">
                <img src="assets/images/nix-productions.png" alt="">
            </section>

            <section class="gallery">
                <img src="assets/images/pic-one.png" alt="">
                <img src="assets/images/pic-two.png" alt="">
                <img src="assets/images/pic-three.png" alt="">
                <img src="assets/images/pic-four.png" alt="">
                <img src="assets/images/pic-five.png" alt="">
            </section>

            <section class="features">
                <header>
                    <p class="description">
                        <b>Nix Productions and Events</b> is a well-known event planning and coordinating company based in Dumaguete City.  Renowned for delivering memorable experiences through professional and comprehensive planning.
                    </p>
                </header>
                <div class="cards">
                    <div class="card">
                        <h2 class="title">WEDDINGS</h2>
                        <img src="assets/images/Weddings.png" alt="">
                    </div>
                    <div class="card">
                        <h2 class="title">SOCIALS</h2>
                        <img src="assets/images/corporate-events.png" alt="">
                    </div>
                    <div class="card">
                        <h2 class="title">CORPORATE</h2>
                        <img src="assets/images/social-gathering.png" alt="">
                    </div>
                </div>

                <div class="actions">
                    <a href="" class="button primary">Inquire</a>
                </div>
            </section>
        </main>
        @include('layouts.footer')
    </body>
</html>

