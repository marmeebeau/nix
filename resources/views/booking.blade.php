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

        <main class="client-booking">
            <header>
                <h2 class="title">Booking</h2>
            </header>

            <form action="" id="bookingForm">
                <div class="fields">
                    <div class="group">
                        <div class="field">
                            <input id="first_name" name="first_name" placeholder="First Name" required type="text">
                        </div>
                        <div class="field">
                            <input id="last_name" name="last_name" placeholder="Last Name" required type="text">
                        </div>
                        <div class="field">
                            <input id="date" name="date" required type="date">
                        </div>
                    </div>
                    <div class="group">
                        <div class="field">
                            <input id="email" name="email" placeholder="Email" required type="text">
                        </div>
                        <div class="field">
                            <input id="phonenum" name="phonenum" placeholder="Phone Number" required type="text">
                        </div>
                    </div>
                </div>

                <div class="columns">
                    <div class="fields">
                        <div class="field">
                            <select name="event_type" id="event_type">
                                <option value="">Choose Event Type</option>
                                @foreach ($uniquePackageType as $package)
                                    <option value="{{ $package->package_type }}">
                                        {{ $package->package_type }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="field">
                            <select name="guests" id="guests">
                                <option value="">Re-estimated Guests</option>
                                @foreach ($uniquePackageGuest as $package)
                                    <option value="{{ $package->package_guest }}">
                                        {{ $package->package_guest }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="field">
                            <input type="text" id="venue" name="venue" placeholder="Reception/Celebration Venue" required>
                        </div>
                        <div class="field">
                            <input type="text" id="budget" name="budget" placeholder="Budget for the Whole Event" required>
                        </div>
                    </div>

                    <div class="fields group">
                        <label for="motifs">Select Motifs</label>
                        <ul class="options">
                            <li class="option">
                                <label for="whimsical">Whimsical</label>
                                <input type="checkbox" id="whimsical" name="motif" value="Whimsical">
                            </li>
                            <li class="option">
                                <label for="vintage">Vintage</label>
                                <input type="checkbox" id="vintage" name="motif" value="Vintage">
                            </li>
                            <li class="option">
                                <label for="civil">Civil</label>
                                <input type="checkbox" id="civil" name="motif" value="Civil">
                            </li>
                            <li class="option">
                                <label for="traditional">Traditional</label>
                                <input type="checkbox" id="traditional" name="motif" value="Traditional">
                            </li>
                            <li class="option">
                                <label for="micro">Micro</label>
                                <input type="checkbox" id="micro" name="motif" value="Micro">
                            </li>
                            <li class="option">
                                <label for="elopement">Elopement</label>
                                <input type="checkbox" id="elopement" name="motif" value="Elopement">
                            </li>
                            <li class="option">
                                <label for="modern">Modern</label>
                                <input type="checkbox" id="modern" name="motif" value="Modern">
                            </li>
                            <li class="option">
                                <label for="interfaith">Interfaith</label>
                                <input type="checkbox" id="interfaith" name="motif" value="Interfaith">
                            </li>
                            <li class="option">
                                <label for="greek">Greek</label>
                                <input type="checkbox" id="greek" name="motif" value="Greek">
                            </li>
                            <li class="option">
                                <label for="bohemian">Bohemian</label>
                                <input type="checkbox" id="bohemian" name="motif" value="Bohemian">
                            </li>
                            <li class="option">
                                <label for="simple">Simple</label>
                                <input type="checkbox" id="simple" name="motif" value="Simple">
                            </li>
                            <li class="option">
                                <label for="non-religious">Non-Religious</label>
                                <input type="checkbox" id="non-religious" name="motif" value="Non-Religious">
                            </li>
                            <li class="option">
                                <label for="intimate">Intimate</label>
                                <input type="checkbox" id="intimate" name="motif" value="Intimate">
                            </li>
                            <li class="option">
                                <label for="fairytale">Fairytale</label>
                                <input type="checkbox" id="fairytale" name="motif" value="Fairytale">
                            </li>
                            <li class="option">
                                <label for="festival">Festival</label>
                                <input type="checkbox" id="festival" name="motif" value="Festival">
                            </li>
                            <li class="option">
                                <label for="black-tie">Black tie</label>
                                <input type="checkbox" id="black-tie" name="motif" value="Black tie">
                            </li>
                            <li class="option">
                                <label for="religious">Religious</label>
                                <input type="checkbox" id="religious" name="motif" value="Religious">
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="actions">
                    <button type="submit" class="primary">See Recommendations</button>
                </div>
            </form>

            <div class="recommendations-wrapper">
                <header>
                    <h2 class="title">Generated Recommended Event Packages</h2>
                </header>
                <div class="content">
                    <div class="column">Package 1</div>
                    <div class="column">Package 2</div>
                    <div class="column">Package 3</div>
                </div>
            </div>
        </main>


        @include('layouts.footer')
        <script src="{{ asset('js/index.js') }}" type="module"></script>
        <script src="{{ asset('js/menuToggle.js') }}" type="module"></script>
        <script src="{{ asset('js/booking.js') }}" type="module"></script>
        <script src="{{ asset('js/checkboxToggle.js') }}" type="module"></script>
    </body>
</html>
