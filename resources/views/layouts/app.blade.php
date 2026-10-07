<!doctype html>

<html lang="en">

<head>
    <meta charset="UTF-8" />
    <title>@yield('title','title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="" />
    <link rel="icon" type="image/png" href="{{ asset('images/fav.png') }}?v=1" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
</head>

<body>
    <header>
        <div class="banner">
            <h5>☕ Freshly Roasted Coffee — Get 20% Off Your First Order. Shop Now →</h5>
        </div>
        <div class="header-space">
            <a href="{{ route('home') }}"><img src="{{ asset('images/logo-t.png') }}" alt="website-log" /></a>
            <div class="menu">
                <a href="#About-Us">
                    <p>About Us</p>
                </a>
                <a href="#Featured-Coffee">
                    <p>Featured Coffee</p>
                </a>
                <a href="#Why-Choose-Us">
                    <p>Why Choose Us</p>
                </a>
                <a href="#Testimonials">
                    <p>Testimonials</p>
                </a>
                <a href="#Call-to-Action">
                    <p>Call to Action</p>
                </a>
                <a href="#Contact">
                    <p>Contact</p>
                </a>
            </div>
        </div>
    </header>

    <main>
        @yield('content')
    </main>
</body>

</html>