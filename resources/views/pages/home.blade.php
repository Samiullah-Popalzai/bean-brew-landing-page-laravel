<!doctype html>

<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />


    <title>Bean & Brew | Your Perfect Cup Starts Here</title>

    <meta
        name="description"
        content="Freshly roasted coffee beans, rich flavors, and expertly brewed coffee made for every moment." />

    <link rel="icon" href="{{ asset('images/fav.png') }}" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />


</head>

<body>


    <!-- Promotional Banner -->
    <div class="promo-banner">
        <p>
            ☕ Freshly Roasted Coffee — Get 20% Off Your First Order.
            <a href="#featured-coffee">Shop Now →</a>
        </p>
    </div>

    <!-- Header -->
    <header class="site-header">
        <div class="container header-container">

            <a href="/" class="logo">
                <img
                    src="{{ asset('images/logo.png') }}"
                    alt="Bean & Brew logo" />
            </a>

            <nav class="main-nav" aria-label="Main navigation">
                <a href="#about">About Us</a>
                <a href="#featured-coffee">Featured Coffee</a>
                <a href="#why-us">Why Choose Us</a>
                <a href="#testimonials">Testimonials</a>
                <a href="#contact">Contact</a>
            </nav>

        </div>
    </header>

    <main>

        <!-- Hero -->
        <section class="hero">
            <div class="container hero-container">

                <div class="hero-content">
                    <p class="eyebrow">Freshly Roasted. Expertly Brewed.</p>

                    <h1>Your Perfect Cup Starts Here.</h1>

                    <p class="hero-text">
                        Freshly roasted beans, rich flavors, and expertly brewed coffee
                        made to turn every sip into a moment worth savoring.
                    </p>

                    <div class="hero-actions">
                        <a href="#featured-coffee" class="btn btn-primary">
                            Explore Our Coffee
                        </a>

                        <a href="#about" class="btn btn-secondary">
                            Learn More
                        </a>
                    </div>
                </div>

                <div class="hero-image">
                    <img
                        src="{{ asset('images/Freshly brewed coffee.png') }}"
                        alt="Freshly brewed coffee" />
                </div>

            </div>
        </section>

        <!-- About Us -->
        <section id="about" class="section about-section">
            <div class="container two-column">

                <div class="section-image">
                    <img
                        src="{{ asset('images/Coffee beans being prepared.png') }}"
                        alt="Coffee beans being prepared" />
                </div>

                <div class="section-content">
                    <p class="eyebrow">About Us</p>

                    <h2>More Than Just Coffee</h2>

                    <p>
                        At Bean & Brew, we believe great coffee has the power to make
                        ordinary moments extraordinary.
                    </p>

                    <p>
                        We carefully select quality beans, roast them with care, and
                        create coffee experiences that bring people together.
                    </p>

                    <a href="#contact" class="text-link">
                        Get to Know Us →
                    </a>
                </div>

            </div>
        </section>

        <!-- Featured Coffee -->
        <section id="featured-coffee" class="section featured-section">
            <div class="container">

                <div class="section-heading">
                    <p class="eyebrow">Our Favorites</p>
                    <h2>Featured Coffee</h2>
                    <p>Discover some of our most loved coffee selections.</p>
                </div>

                <div class="coffee-grid">

                    <article class="coffee-card">
                        <img
                            src="{{ asset('images/Classic espresso.png') }}"
                            alt="Classic espresso" />

                        <div class="coffee-card-content">
                            <h3>Classic Espresso</h3>

                            <p>
                                Bold, smooth, and perfectly balanced with a rich finish.
                            </p>

                            <span class="coffee-price">$4.50</span>
                        </div>
                    </article>

                    <article class="coffee-card">
                        <img
                            src="{{ asset('images/Caramel latte.png') }}"
                            alt="Caramel latte" />

                        <div class="coffee-card-content">
                            <h3>Caramel Latte</h3>

                            <p>
                                Smooth espresso blended with creamy milk and caramel.
                            </p>

                            <span class="coffee-price">$5.50</span>
                        </div>
                    </article>

                    <article class="coffee-card">
                        <img
                            src="{{ asset('images/Cold brew coffee.png') }}"
                            alt="Cold brew coffee" />

                        <div class="coffee-card-content">
                            <h3>Cold Brew</h3>

                            <p>
                                Refreshing, naturally sweet, and slowly brewed for depth.
                            </p>

                            <span class="coffee-price">$5.00</span>
                        </div>
                    </article>

                </div>
            </div>
        </section>

        <!-- Why Choose Us -->
        <section id="why-us" class="section why-section">
            <div class="container">

                <div class="section-heading">
                    <p class="eyebrow">Why Bean & Brew</p>
                    <h2>Why Choose Us?</h2>
                </div>

                <div class="features-grid">

                    <article class="feature-card">
                        <div class="feature-icon">☕</div>

                        <h3>Quality Coffee</h3>

                        <p>
                            Carefully selected beans roasted to bring out their best
                            flavors.
                        </p>
                    </article>

                    <article class="feature-card">
                        <div class="feature-icon">🌱</div>

                        <h3>Fresh Ingredients</h3>

                        <p>
                            We use fresh, quality ingredients in every drink we make.
                        </p>
                    </article>

                    <article class="feature-card">
                        <div class="feature-icon">❤️</div>

                        <h3>Made With Care</h3>

                        <p>
                            Every cup is prepared with attention to detail and passion.
                        </p>
                    </article>

                    <article class="feature-card">
                        <div class="feature-icon">✨</div>

                        <h3>Great Experience</h3>

                        <p>
                            A welcoming place to enjoy coffee, conversation, and good
                            moments.
                        </p>
                    </article>

                </div>
            </div>
        </section>

        <!-- Testimonials -->
        <section id="testimonials" class="section testimonials-section">
            <div class="container">

                <div class="section-heading">
                    <p class="eyebrow">Customer Love</p>
                    <h2>What Our Customers Say</h2>
                </div>

                <div class="testimonial-grid">

                    <article class="testimonial-card">
                        <p>
                            “The coffee is incredible. Smooth, fresh, and full of flavor.”
                        </p>

                        <h3>Sarah M.</h3>
                        <span>Regular Customer</span>
                    </article>

                    <article class="testimonial-card">
                        <p>
                            “Bean & Brew has become my favorite place to start the day.”
                        </p>

                        <h3>David R.</h3>
                        <span>Coffee Lover</span>
                    </article>

                    <article class="testimonial-card">
                        <p>
                            “Great coffee, friendly service, and a beautiful atmosphere.”
                        </p>

                        <h3>Emma K.</h3>
                        <span>Happy Customer</span>
                    </article>

                </div>
            </div>
        </section>

        <!-- Call To Action -->
        <section class="cta-section">
            <div class="container cta-container">

                <div>
                    <p class="eyebrow">Your Next Favorite Coffee</p>

                    <h2>Ready for Your Perfect Cup?</h2>

                    <p>
                        Discover fresh flavors and find the coffee that's right for you.
                    </p>
                </div>

                <a href="#featured-coffee" class="btn btn-light">
                    Explore Coffee
                </a>

            </div>
        </section>

        <!-- Contact -->
        <section id="contact" class="section contact-section">
            <div class="container two-column">

                <div class="section-content">
                    <p class="eyebrow">Get In Touch</p>

                    <h2>Let's Talk Coffee</h2>

                    <p>
                        Have a question, suggestion, or simply want to say hello?
                        We'd love to hear from you.
                    </p>

                    <div class="contact-details">
                        <p><strong>Email:</strong> hello@beanandbrew.com</p>
                        <p><strong>Phone:</strong> +1 555 123 4567</p>
                        <p><strong>Address:</strong> 123 Coffee Street, Brew City</p>
                    </div>
                </div>

                <form class="contact-form">
                    <label for="name">Name</label>

                    <input
                        type="text"
                        id="name"
                        name="name"
                        placeholder="Your name" />

                    <label for="email">Email</label>

                    <input
                        type="email"
                        id="email"
                        name="email"
                        placeholder="Your email" />

                    <label for="message">Message</label>

                    <textarea
                        id="message"
                        name="message"
                        rows="5"
                        placeholder="Your message"></textarea>

                    <button type="submit" class="btn btn-primary">
                        Send Message
                    </button>
                </form>

            </div>
        </section>

    </main>

    <!-- Footer -->
    <footer class="site-footer">
        <div class="container footer-container">

            <div>
                <h3>Bean & Brew</h3>

                <p>Fresh coffee. Great moments.</p>
            </div>

            <div class="footer-links">
                <a href="#about">About</a>
                <a href="#featured-coffee">Coffee</a>
                <a href="#why-us">Why Us</a>
                <a href="#contact">Contact</a>
            </div>

            <p class="copyright">
                &copy; 2026 Bean & Brew. All rights reserved.
            </p>

        </div>
    </footer>


</body>

</html>