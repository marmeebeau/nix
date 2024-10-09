<nav class="nav">

    <header>
        <a href="{{ url('/welcome') }}">
            <h1 class="title">Nix Production & Events</h1>
        </a>
        <p class="description">
            <italic>“The small details make the difference”</italic>
            <span class="normal">-Dwight D. Eisenhower</span>
        </p>
    </header>

    <ul class="nav-items" id="nav-items">
        @auth('coordinator')
            <li class="nav-item">
                <a href="{{ url('/coordinator/clients') }}">Clients</a>
            </li>
            <li class="nav-item">
                <a href="{{ url('/coordinator/event-packages') }}">Event Packages</a>
            </li>
            <li class="nav-item">
                <a href="{{ url('/coordinator/receipt') }}">Receipts</a>
            </li>
            <li class="nav-item">
                <a href="{{ url('/coordinator/booking') }}">Booking</a>
            </li>
            <li class="nav-item">
                <a href="{{ url('/coordinator/feedback') }}">Feedbacks</a>
            </li>
            <li class="nav-item">
                <a href="{{ url('/coordinator/profile') }}">Profile</a>
            </li>
        @else
            <li class="nav-item">
                <a href="/welcome">Home</a>
            </li>
            <li class="nav-item">
                <a href="/booking">Booking</a>
            </li>
            <li class="nav-item">
                <a href="/services">Services</a>
            </li>
            <li class="nav-item">
                <a href="/portfolio">Portfolio</a>
            </li>
            <li class="nav-item">
                <a href="/review">Reviews</a>
            </li>
            <li class="nav-item">
                <a href="/contact">Contact Us</a>
            </li>
        @endauth

        @if (Route::has('login'))
            @auth('web')
                <li class="nav-item">
                    <a href="{{ url('/dashboard') }}">Dashboard</a>
                </li>
                <li class="nav-item">
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="nav-item">
                            Logout
                        </button>
                    </form>
                </li>
            @else
                @auth('coordinator')
                    <li class="nav-item">
                        <form method="POST" action="{{ route('coordinator.logout') }}">
                            @csrf
                            <button type="submit" class="nav-item">
                                Logout
                            </button>
                        </form>
                    </li>
                @else
                    <li class="nav-item">
                        <a href="{{ url('/coordinator/login') }}">Login</a>
                    </li>

                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a href="{{ url('/coordinator/register') }}">Register</a>
                        </li>
                    @endif
                @endauth
            @endauth
        @endif
    </ul>

    <div class="right-content">

        <!-- <a href="login.php" class="ghost login" aria-label="Log In">
            <img src="assets/images/icons/user.svg" alt="User" width="20">
        </a> -->

        <button class="ghost menu" id="menu-btn">
            <img src="assets/images/icons/menu.svg" id="menu-icon" alt="Menu" width="20">
        </button>
    </div>

</nav>
