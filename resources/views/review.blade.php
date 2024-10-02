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
                <h2 class="title">Latest Reviews</h2>
            </header>
            <div class="content">
                <div class="cards">
                    <div class="card">
                        <div class="rating">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>

                        <span class="title">Topaz Package</span>

                        <div class="user-details">
                            <span class="name">Jane Doe</span>
                            <span class="date">06/07/2024</span>
                        </div>
                    </div>
                    <div class="card">
                        <div class="rating">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>

                        <span class="title">Diamond Package</span>

                        <div class="user-details">
                            <span class="name">Jane Doe</span>
                            <span class="date">06/07/2024</span>
                        </div>
                    </div>
                    <div class="card">
                        <div class="rating">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>

                        <span class="title">Topaz Package</span>

                        <div class="user-details">
                            <span class="name">Jane Doe</span>
                            <span class="date">06/07/2024</span>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        @include('layouts.footer')
        <script src="{{ asset('js/index.js') }}" type="module"></script>
        <script src="{{ asset('js/menuToggle.js') }}" type="module"></script>
        <script src="{{ asset('js/radioCheckboxToggle.js') }}" type="module"></script>
    </body>
</html>
