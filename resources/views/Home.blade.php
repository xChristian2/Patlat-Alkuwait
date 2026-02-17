<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patlat Alkuwait</title>
</head>
<body>

<!-- Welcome Screen -->
<div class="welcome-screen" id="welcomeScreen">
    <div class="welcome-content">
        <div class="welcome-logo">
            <img src="{{ asset('images/Logo.png') }}" alt="Patlat Alkuwait Logo" class="logo-animate">
        </div>
        <h1 class="welcome-title">
            <span class="word word-1">Welcome</span>
            <span class="word word-2">to</span>
            <span class="word word-3">Patlat</span>
            <span class="word word-4">Alkuwait</span>
        </h1>
        <p class="welcome-subtitle">Your Premier Destination for Fresh Flowers</p>
        <div class="welcome-decoration">
            <span class="petal petal-1">🌸</span>
            <span class="petal petal-2">🌺</span>
            <span class="petal petal-3">🌷</span>
            <span class="petal petal-4">🌹</span>
        </div>
    </div>
</div>

<!-- Navigation -->
<nav class="navbar">
    <div class="container">
        <div class="nav-wrapper">
            <div class="logo">
                <img src="{{ asset('images/Logo.png') }}" alt="Patlat Alkuwait Logo" class="nav-logo">
                <span class="logo-text">Patlat Alkuwait</span>
            </div>

            <!-- Hamburger Button (Mobile) -->
            <button class="hamburger-menu" aria-label="Toggle navigation">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </button>

            <!-- Navigation Links -->
            <ul class="nav-links">
                <li><a href="/" class="nav-link">Home</a></li>
                <li><a href="/shop" class="nav-link">Shop</a></li>
                <li>
                    <a href="/product" class="nav-link nav-dropdown">
                        Product
                        <svg class="dropdown-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                        </svg>
                    </a>
                </li>
                <li><a href="/blog" class="nav-link">Blog</a></li>
                <li>
                    <a href="/pages" class="nav-link nav-dropdown">
                        Pages
                        <svg class="dropdown-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                        </svg>
                    </a>
                </li>
            </ul>
                <div class="nav-icons">
    <!-- Search Icon -->
    <button class="icon-btn">
        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
        </svg>
    </button>
    
    <!-- Wishlist/Heart Icon -->
    <button class="icon-btn">
        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
        </svg>
    </button>
    
    <!-- Cart Icon -->
    <button class="icon-btn cart-btn">
        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"/>
        </svg>
        <span class="cart-count">2</span>
    </button>
    
    <!-- Profile Dropdown (LAST POSITION) -->
    <div class="profile-dropdown">
        <button class="icon-btn profile-btn">
            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
            </svg>
        </button>
        <div class="dropdown-menu">
            <div class="dropdown-header">
                <svg class="dropdown-avatar" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                </svg>
                <div class="dropdown-user-info">
                    <span class="dropdown-greeting">Hi,</span>
                    @auth
                        <span class="dropdown-username">{{ auth()->user()->display_name ?? auth()->user()->username }}</span>
                    @else
                        <span class="dropdown-username">Guest</span>
                    @endauth
                </div>
            </div>
            <div class="dropdown-divider"></div>
            @auth
                <a href="/profile" class="dropdown-item">
                    <svg class="dropdown-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                    </svg>
                    View my profile
                </a>
                <form method="POST" action="/logout" class="dropdown-item-form">
                    @csrf
                    <button type="submit" class="dropdown-item">
                        <svg class="dropdown-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"/>
                        </svg>
                        Logout
                    </button>
                </form>
            @else
                <a href="{{ route('logreg') }}" class="dropdown-item">
                    <svg class="dropdown-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1"/>
                    </svg>
                    Login
                </a>
                <a href="{{ route('logreg') }}#register-section" class="dropdown-item">
                    <svg class="dropdown-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z"/>
                    </svg>
                    Register
                </a>
            @endauth
        </div>
    </div>
</div>
</nav>

<!-- Main Content -->
<main class="main-content">
    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <div class="hero-content scroll-reveal">
                <h2 class="hero-title">Discover Beauty in Every Petal</h2>
                <p class="hero-subtitle">From elegant bouquets to stunning arrangements, we bring nature's finest directly to you</p>
                <div class="hero-buttons">
                    <a href="/shop" class="btn btn-primary">Shop Now</a>
                    <a href="/about" class="btn btn-secondary">Learn More</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="features-section">
        <div class="container">
            <div class="section-header scroll-reveal">
                <h2 class="section-title">Why Choose Us</h2>
                <p class="section-subtitle">We deliver excellence with every order</p>
            </div>
            <div class="features-grid">
                <div class="feature-card scroll-reveal">
                    <div class="feature-icon">🌹</div>
                    <h3 class="feature-title">Fresh Flowers</h3>
                    <p class="feature-text">Hand-picked daily to ensure maximum freshness and beauty</p>
                </div>
                <div class="feature-card scroll-reveal">
                    <div class="feature-icon">🚚</div>
                    <h3 class="feature-title">Fast Delivery</h3>
                    <p class="feature-text">Same-day delivery available for your urgent needs</p>
                </div>
                <div class="feature-card scroll-reveal">
                    <div class="feature-icon">💐</div>
                    <h3 class="feature-title">Custom Arrangements</h3>
                    <p class="feature-text">Personalized designs tailored to your preferences</p>
                </div>
                <div class="feature-card scroll-reveal">
                    <div class="feature-icon">💚</div>
                    <h3 class="feature-title">Expert Care</h3>
                    <p class="feature-text">Professional florists with years of experience</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Products Preview Section -->
    <section class="products-section">
        <div class="container">
            <div class="section-header scroll-reveal">
                <h2 class="section-title">Popular Collections</h2>
                <p class="section-subtitle">Browse our most loved arrangements</p>
            </div>
            <div class="products-grid">
                <div class="product-card scroll-reveal">
                    <img src="{{ asset('images/boquet.jpg') }}" alt="Rose Bouquet" class="product-image">
                    <h3 class="product-title">Rose Bouquet</h3>
                    <p class="product-price">د.ك49.99</p>
                </div>
                <div class="product-card scroll-reveal">
                    <img src="{{ asset('images/sunflower.jpg') }}" alt="Rose Bouquet" class="product-image">
                    <h3 class="product-title">Sunflower Delight</h3>
                    <p class="product-price">د.ك39.99</p>
                </div>
                <div class="product-card scroll-reveal">
                    <img src="{{ asset('images/tulip.jpg') }}" alt="Rose Bouquet" class="product-image">
                    <h3 class="product-title">Tulip Garden</h3>
                    <p class="product-price">د.ك44.99</p>
                </div>
                <div class="product-card scroll-reveal">
                    <img src="{{ asset('images/cherry blossom.jpg') }}" alt="Rose Bouquet" class="product-image">
                    <h3 class="product-title">Cherry Blossom</h3>
                    <p class="product-price">د.ك54.99</p>
                </div>
            </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="about-section">
        <div class="container">
            <div class="about-content scroll-reveal">
                <div class="about-text">
                    <h2 class="section-title">Our Story</h2>
                    <p class="about-paragraph">
                        At Patlat Alkuwait, we believe in the power of flowers to transform moments into memories. 
                        Since our establishment, we've been dedicated to providing the freshest, most beautiful 
                        arrangements for every occasion.
                    </p>
                    <p class="about-paragraph">
                        Our team of expert florists combines creativity with passion to create stunning designs 
                        that exceed expectations. Whether it's a birthday, anniversary, or just because, we're 
                        here to help you express your feelings through the language of flowers.
                    </p>
                    <a href="/about" class="btn btn-primary">Read More</a>
                </div>
                <div class="about-image">
                    <div class="image-placeholder">🌺</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="testimonials-section">
        <div class="container">
            <div class="section-header scroll-reveal">
                <h2 class="section-title">What Our Customers Say</h2>
                <p class="section-subtitle">Real reviews from happy customers</p>
            </div>
            <div class="testimonials-grid">
                <div class="testimonial-card scroll-reveal">
                    <div class="testimonial-rating">⭐⭐⭐⭐⭐</div>
                    <p class="testimonial-text">"Absolutely stunning flowers! The arrangement was even more beautiful than I imagined. Will definitely order again!"</p>
                    <div class="testimonial-author">- Sarah M.</div>
                </div>
                <div class="testimonial-card scroll-reveal">
                    <div class="testimonial-rating">⭐⭐⭐⭐⭐</div>
                    <p class="testimonial-text">"Fast delivery and exceptional quality. The flowers lasted for over a week. Highly recommended!"</p>
                    <div class="testimonial-author">- Ahmed K.</div>
                </div>
                <div class="testimonial-card scroll-reveal">
                    <div class="testimonial-rating">⭐⭐⭐⭐⭐</div>
                    <p class="testimonial-text">"Best flower shop in Kuwait! Their customer service is outstanding and the arrangements are always perfect."</p>
                    <div class="testimonial-author">- Fatima A.</div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-section">
        <div class="container">
            <div class="cta-content scroll-reveal">
                <h2 class="cta-title">Ready to Order?</h2>
                <p class="cta-subtitle">Browse our collection and find the perfect arrangement for any occasion</p>
                <a href="/shop" class="btn btn-primary btn-large">Shop Now</a>
            </div>
        </div>
    </section>
</main>

<!-- Footer -->
<footer class="footer">
    <div class="container">
        <div class="footer-grid">
            <div class="footer-col">
                <div class="footer-logo">
                    <img src="{{ asset('images/Logo.png') }}" alt="Patlat Alkuwait Logo" class="footer-logo-img">
                    <span class="logo-text">Patlat Alkuwait</span>
                </div>
                <p class="footer-desc">
                    We provide the freshest flowers for any occasion. Quality and beauty in every bouquet.
                </p>
            </div>

            <div class="footer-col">
                <h4 class="footer-title">Company</h4>
                <ul class="footer-links">
                    <li><a href="/about" class="footer-link">About Us</a></li>
                    <li><a href="/services" class="footer-link">Services</a></li>
                    <li><a href="/careers" class="footer-link">Careers</a></li>
                    <li><a href="/blog" class="footer-link">Blog</a></li>
                </ul>
            </div>

            <div class="footer-col">
                <h4 class="footer-title">Contact Us</h4>
                <ul class="footer-contact">
                    <li class="contact-item">
                        <svg class="contact-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                        </svg>
                        <span>123 Flower Street, Garden City, GC 12345</span>
                    </li>
                    <li class="contact-item">
                        <svg class="contact-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                        </svg>
                        <span>hello@kissune@gmail.com</span>
                    </li>
                    <li class="contact-item">
                        <svg class="contact-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                        </svg>
                        <span>+1 (555) 123-4567</span>
                    </li>
                </ul>
            </div>

            <div class="footer-col">
                <h4 class="footer-title">Get the latest information</h4>
                <form class="newsletter-form">
                    <input type="email" placeholder="Your Email" class="newsletter-input">
                    <button type="submit" class="newsletter-btn">Subscribe</button>
                </form>
            </div>
        </div>

        <div class="footer-bottom">
            <div class="bottom-wrapper">
                <p class="copyright">&copy; {{ date('Y') }} Patlat Alkuwait. All rights reserved.</p>
                <div class="social-links">
                    <a href="#" class="social-link" aria-label="Facebook">
                        <svg fill="currentColor" viewBox="0 0 24 24">
                            <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                        </svg>
                    </a>
                    <a href="#" class="social-link" aria-label="Instagram">
                        <svg fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.468 2.373c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z"/>
                        </svg>
                    </a>
                    <a href="#" class="social-link" aria-label="Twitter">
                        <svg fill="currentColor" viewBox="0 0 24 24">
                            <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/>
                        </svg>
                    </a>
                    <a href="#" class="social-link" aria-label="TikTok">
                        <svg fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12.525.02c1.31-.02 2.61-.01 3.91-.02.08 1.53.63 3.09 1.75 4.17 1.12 1.11 2.7 1.62 4.24 1.79v4.03c-1.44-.05-2.89-.35-4.2-.97-.57-.26-1.1-.59-1.62-.93-.01 2.92.01 5.84-.02 8.75-.08 1.4-.54 2.79-1.35 3.94-1.31 1.92-3.58 3.17-5.91 3.21-1.43.08-2.86-.31-4.08-1.03-2.02-1.19-3.44-3.37-3.65-5.71-.02-.5-.03-1-.01-1.49.18-1.9 1.12-3.72 2.58-4.96 1.66-1.44 3.98-2.13 6.15-1.72.02 1.48-.04 2.96-.04 4.44-.99-.32-2.15-.23-3.02.37-.63.41-1.11 1.04-1.36 1.75-.21.51-.15 1.07-.14 1.61.24 1.64 1.82 3.02 3.5 2.87 1.12-.01 2.19-.66 2.77-1.61.19-.33.4-.67.41-1.06.1-1.79.06-3.57.07-5.36.01-4.03-.01-8.05.02-12.07z"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</footer>

<style>
    /* Color Variables - Light Theme */
    :root {
        --white: #ffffff;
        --off-white: #f8f9fa;
        --light-gray: #e9ecef;
        --medium-gray: #6c757d;
        --dark-gray: #343a40;
        --black: #000000;
        --accent-coral: #ff6b6b;
        --accent-coral-hover: #ff5252;
        --accent-gold: #ffd93d;
    }

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, sans-serif;
        background-color: var(--off-white);
        overflow-x: hidden;
    }

    /* Welcome Screen Styles */
    .welcome-screen {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100vh;
        background: linear-gradient(135deg, var(--white) 0%, var(--off-white) 100%);
        display: flex;
        align-items: center;
        justify-content: center;
        z-index: 10000;
        overflow: visible !important;
    }

    .welcome-screen.fade-out {
        animation: fadeOut 0.8s ease-out forwards;
    }

    @keyframes fadeOut {
        0% {
            opacity: 1;
            visibility: visible;
        }
        100% {
            opacity: 0;
            visibility: hidden;
            pointer-events: none;
        }
    }

    .welcome-content {
        text-align: center !important;
        position: relative;
        z-index: 2;
        width: 100%;
        max-width: 100%;
        padding: 0 20px;
    }

    .welcome-logo {
        margin-bottom: 40px;
        display: flex;
        justify-content: center;
        align-items: center;
        width: 100%;
    }

    .logo-animate {
        width: 330px !important;
        height: auto !important;
        max-width: none !important;
        max-height: none !important;
        animation: logoBounce 1s ease-out;
        object-fit: contain;
        display: block;
        margin: 0 auto;
    }

    @keyframes logoBounce {
        0% {
            transform: scale(0) rotate(-180deg);
            opacity: 0;
        }
        50% {
            transform: scale(1.2) rotate(10deg);
        }
        100% {
            transform: scale(1) rotate(0deg);
            opacity: 1;
        }
    }

    .welcome-title {
        font-size: 72px;
        font-weight: 700;
        color: var(--black);
        margin-bottom: 20px;
        line-height: 1.2;
        overflow: hidden;
        text-align: center;
    }

    .word {
        display: inline-block;
        opacity: 0;
        transform: translateY(50px);
        margin: 0 10px;
    }

    .word-1 {
        animation: slideUp 0.8s ease-out 0.5s forwards;
    }

    .word-2 {
        animation: slideUp 0.8s ease-out 0.7s forwards;
    }

    .word-3 {
        animation: slideUp 0.8s ease-out 0.9s forwards;
        color: var(--accent-coral);
    }

    .word-4 {
        animation: slideUp 0.8s ease-out 1.1s forwards;
        color: var(--accent-coral);
    }

    @keyframes slideUp {
        0% {
            opacity: 0;
            transform: translateY(50px);
        }
        100% {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .welcome-subtitle {
        font-size: 24px;
        color: var(--medium-gray);
        opacity: 0;
        animation: fadeIn 1s ease-out 1.5s forwards;
        margin-bottom: 40px;
        text-align: center;
    }

    @keyframes fadeIn {
        0% {
            opacity: 0;
            transform: translateY(20px);
        }
        100% {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .welcome-decoration {
        position: relative;
        height: 60px;
        opacity: 0;
        animation: fadeIn 1s ease-out 1.8s forwards;
        width: 100%;
    }

    .petal {
        position: absolute;
        font-size: 30px;
        opacity: 0;
        animation: float 3s ease-in-out infinite;
    }

    .petal-1 {
        left: 20%;
        animation-delay: 0s;
    }

    .petal-2 {
        left: 40%;
        animation-delay: 0.5s;
    }

    .petal-3 {
        right: 40%;
        animation-delay: 1s;
    }

    .petal-4 {
        right: 20%;
        animation-delay: 1.5s;
    }

    @keyframes float {
        0%, 100% {
            opacity: 0.6;
            transform: translateY(0) rotate(0deg);
        }
        50% {
            opacity: 1;
            transform: translateY(-30px) rotate(180deg);
        }
    }

    .scroll-indicator {
        margin-top: 60px;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        gap: 10px;
        color: var(--medium-gray);
        font-size: 14px;
        opacity: 0;
        animation: fadeIn 1s ease-out 2.2s forwards;
    }

    .scroll-arrow {
        width: 30px;
        height: 30px;
        color: var(--accent-coral);
        animation: bounce 2s infinite;
    }

    @keyframes bounce {
        0%, 20%, 50%, 80%, 100% {
            transform: translateY(0);
        }
        40% {
            transform: translateY(10px);
        }
        60% {
            transform: translateY(5px);
        }
    }

    .container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 24px;
    }

    /* Navigation Styles */
    .navbar {
        background-color: var(--white);
        padding: 16px 0;
        position: sticky;
        top: 0;
        z-index: 1000;
        box-shadow: 0 2px 10px rgba(0,0,0,0.08);
    }

    .nav-wrapper {
        display: flex;
        align-items: center;
        justify-content: space-between;
        position: relative;
    }

    .logo {
        display: flex;
        align-items: center;
        gap: 8px;
        z-index: 1001;
    }

    .nav-logo {
        width: 40px;
        height: auto;
    }

    .logo-text {
        font-size: 24px;
        font-weight: 600;
        color: var(--black);
    }

    .nav-links {
        display: flex;
        list-style: none;
        gap: 32px;
        align-items: center;
        transition: all 0.3s ease;
    }

    .nav-link {
        color: var(--black);
        text-decoration: none;
        font-size: 15px;
        transition: color 0.3s ease;
        display: flex;
        align-items: center;
        gap: 4px;
        font-weight: 500;
    }

    .nav-link:hover {
        color: var(--accent-coral);
    }

    .dropdown-icon {
        width: 16px;
        height: 16px;
    }

    .nav-icons {
        display: flex;
        gap: 16px;
        align-items: center;
        z-index: 1001;
    }

    .icon-btn {
        background: none;
        border: none;
        cursor: pointer;
        color: var(--black);
        transition: color 0.3s ease;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .icon-btn:hover {
        color: var(--accent-coral);
    }

    .icon-btn svg {
        width: 20px;
        height: 20px;
    }

    .cart-btn {
        position: relative;
    }

    .cart-count {
        position: absolute;
        top: -8px;
        right: -8px;
        background-color: var(--accent-coral);
        color: var(--white);
        font-size: 11px;
        font-weight: 700;
        width: 18px;
        height: 18px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    /* Main Content Styles */
    .main-content {
        background-color: var(--off-white);
    }

    /* Hero Section */
    .hero-section {
        padding: 120px 0;
        background: linear-gradient(135deg, var(--white) 0%, var(--light-gray) 100%);
    }

    .hero-content {
        text-align: center;
        max-width: 800px;
        margin: 0 auto;
    }

    .hero-title {
        font-size: 56px;
        font-weight: 700;
        color: var(--black);
        margin-bottom: 20px;
        line-height: 1.2;
    }

    .hero-subtitle {
        font-size: 22px;
        color: var(--medium-gray);
        margin-bottom: 40px;
        line-height: 1.6;
    }

    .hero-buttons {
        display: flex;
        gap: 20px;
        justify-content: center;
    }

    .btn {
        padding: 14px 32px;
        font-size: 16px;
        font-weight: 600;
        text-decoration: none;
        border-radius: 8px;
        transition: all 0.3s ease;
        display: inline-block;
        cursor: pointer;
        border: none;
    }

    .btn-primary {
        background-color: var(--accent-coral);
        color: var(--white);
    }

    .btn-primary:hover {
        background-color: var(--accent-coral-hover);
        transform: translateY(-2px);
        box-shadow: 0 8px 20px rgba(255, 107, 107, 0.3);
    }

    .btn-secondary {
        background-color: transparent;
        color: var(--black);
        border: 2px solid var(--dark-gray);
    }

    .btn-secondary:hover {
        background-color: var(--dark-gray);
        color: var(--white);
    }

    .btn-large {
        padding: 18px 48px;
        font-size: 18px;
    }

    /* Features Section */
    .features-section {
        padding: 100px 0;
        background-color: var(--white);
    }

    .section-header {
        text-align: center;
        margin-bottom: 60px;
    }

    .section-title {
        font-size: 42px;
        font-weight: 700;
        color: var(--black);
        margin-bottom: 15px;
    }

    .section-subtitle {
        font-size: 18px;
        color: var(--medium-gray);
    }

    .features-grid {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 30px;
    }

    .feature-card {
        text-align: center;
        padding: 40px 30px;
        background-color: var(--light-gray);
        border-radius: 16px;
        transition: all 0.3s ease;
    }

    .feature-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 20px 50px rgba(0, 0, 0, 0.25);
    }

    .feature-icon {
        font-size: 48px;
        margin-bottom: 20px;
    }

    .feature-title {
        font-size: 22px;
        font-weight: 600;
        color: var(--black);
        margin-bottom: 15px;
    }

    .feature-text {
        font-size: 15px;
        color: var(--medium-gray);
        line-height: 1.6;
    }

    /* Products Section */
    .products-section {
        padding: 100px 0;
        background-color: var(--off-white);
    }

    .products-grid {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 30px;
    }

    .product-card {
        background-color: var(--light-gray);
        border-radius: 16px;
        padding: 30px;
        text-align: center;
        transition: all 0.3s ease;
    }

    .product-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 20px 50px rgba(0, 0, 0, 0.25);
    }

    .product-image {
    width: 100%;
    height: 250px;
    object-fit: cover;
    border-radius: 12px;
    margin-bottom: 20px;
    transition: transform 0.3s ease;
    }

    .product-card:hover .product-image {
        transform: scale(1.05);
    }

    .product-title {
        font-size: 20px;
        font-weight: 600;
        color: var(--black);
        margin-bottom: 10px;
    }

    .product-price {
        font-size: 24px;
        font-weight: 700;
        color: var(--accent-coral);
    }

    /* About Section */
    .about-section {
        padding: 100px 0;
        background-color: var(--white);
    }

    .about-content {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 60px;
        align-items: center;
    }

    .about-text {
        padding-right: 20px;
    }

    .about-paragraph {
        font-size: 16px;
        color: var(--medium-gray);
        line-height: 1.8;
        margin-bottom: 20px;
    }

    .about-image {
        display: flex;
        justify-content: center;
        align-items: center;
    }

.image-placeholder {
    font-size: 200px;
    width: 100%;
    height: 400px;
    background-color: var(--light-gray);
    border-radius: 16px;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: all 0.3s ease;
}

.image-placeholder:hover {
    box-shadow: 0 20px 50px rgba(0, 0, 0, 0.25);
}

    /* Testimonials Section */
    .testimonials-section {
        padding: 100px 0;
        background-color: var(--off-white);
    }

    .testimonials-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 30px;
    }

    .testimonial-card {
        background-color: var(--white);
        padding: 40px 30px;
        border-radius: 16px;
        text-align: center;
        transition: all 0.3s ease;
    }

    .testimonial-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 15px 40px rgba(0, 0, 0, 0.1);
    }

    .testimonial-rating {
        font-size: 24px;
        margin-bottom: 20px;
    }

    .testimonial-text {
        font-size: 16px;
        color: var(--medium-gray);
        line-height: 1.6;
        margin-bottom: 20px;
        font-style: italic;
    }

    .testimonial-author {
        font-size: 16px;
        font-weight: 600;
        color: var(--black);
    }

    /* CTA Section */
    .cta-section {
        padding: 120px 0;
        background: linear-gradient(135deg, var(--accent-coral) 0%, var(--accent-coral-hover) 100%);
        text-align: center;
    }

    .cta-content {
        max-width: 700px;
        margin: 0 auto;
    }

    .cta-title {
        font-size: 48px;
        font-weight: 700;
        color: var(--white);
        margin-bottom: 20px;
    }

    .cta-subtitle {
        font-size: 20px;
        color: var(--white);
        opacity: 0.9;
        margin-bottom: 40px;
    }

    .cta-content .btn-primary {
        background-color: var(--white);
        color: var(--accent-coral);
    }

    .cta-content .btn-primary:hover {
        background-color: var(--off-white);
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
    }

    /* Footer Styles */
    .footer {
        background-color: var(--white);
        color: var(--black);
        padding: 64px 0 24px;
        border-top: 1px solid var(--light-gray);
    }

    .footer-grid {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 48px;
        margin-bottom: 48px;
    }

    .footer-col {
        display: flex;
        flex-direction: column;
    }

    .footer-logo {
        display: flex;
        align-items: center;
        gap: 8px;
        margin-bottom: 16px;
    }

    .footer-logo-img {
        width: 40px;
        height: auto;
    }

    .footer-desc {
        color: var(--medium-gray);
        font-size: 14px;
        line-height: 1.7;
    }

    .footer-title {
        font-size: 18px;
        font-weight: 600;
        margin-bottom: 20px;
        color: var(--black);
    }

    .footer-links {
        list-style: none;
        display: flex;
        flex-direction: column;
        gap: 10px;
    }

    .footer-link {
        color: var(--medium-gray);
        text-decoration: none;
        font-size: 14px;
        transition: color 0.3s ease;
    }

    .footer-link:hover {
        color: var(--accent-coral);
    }

    .footer-contact {
        list-style: none;
        display: flex;
        flex-direction: column;
        gap: 12px;
    }

    .contact-item {
        display: flex;
        align-items: flex-start;
        gap: 10px;
        color: var(--medium-gray);
        font-size: 14px;
    }

    .contact-icon {
        width: 20px;
        height: 20px;
        color: var(--accent-coral);
        flex-shrink: 0;
    }

    .newsletter-form {
        display: flex;
        flex-direction: column;
        gap: 12px;
    }

    .newsletter-input {
        padding: 12px 16px;
        background-color: var(--off-white);
        border: 1px solid var(--light-gray);
        border-radius: 6px;
        color: var(--black);
        font-size: 14px;
        outline: none;
        transition: border-color 0.3s ease;
    }

    .newsletter-input::placeholder {
        color: var(--medium-gray);
    }

    .newsletter-input:focus {
        border-color: var(--accent-coral);
    }

    .newsletter-btn {
        padding: 12px 24px;
        background-color: var(--accent-coral);
        color: var(--white);
        border: none;
        border-radius: 6px;
        font-size: 15px;
        font-weight: 600;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    .newsletter-btn:hover {
        background-color: var(--accent-coral-hover);
    }

    .footer-bottom {
        border-top: 1px solid var(--light-gray);
        padding-top: 32px;
    }

    .bottom-wrapper {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .copyright {
        color: var(--medium-gray);
        font-size: 14px;
    }

    .social-links {
        display: flex;
        gap: 24px;
    }

    .social-link {
        color: var(--medium-gray);
        transition: color 0.3s ease;
    }

    .social-link:hover {
        color: var(--accent-coral);
    }

    .social-link svg {
        width: 20px;
        height: 20px;
    }

    /* Scroll Reveal Animation */
    .scroll-reveal {
        opacity: 0;
        transform: translateY(50px);
        transition: all 0.8s ease-out;
    }

    .scroll-reveal.revealed {
        opacity: 1;
        transform: translateY(0);
    }

    /* Stagger delays for grid items */
    .features-grid .scroll-reveal:nth-child(1) { transition-delay: 0.1s; }
    .features-grid .scroll-reveal:nth-child(2) { transition-delay: 0.2s; }
    .features-grid .scroll-reveal:nth-child(3) { transition-delay: 0.3s; }
    .features-grid .scroll-reveal:nth-child(4) { transition-delay: 0.4s; }

    .products-grid .scroll-reveal:nth-child(1) { transition-delay: 0.1s; }
    .products-grid .scroll-reveal:nth-child(2) { transition-delay: 0.2s; }
    .products-grid .scroll-reveal:nth-child(3) { transition-delay: 0.3s; }
    .products-grid .scroll-reveal:nth-child(4) { transition-delay: 0.4s; }

    .testimonials-grid .scroll-reveal:nth-child(1) { transition-delay: 0.1s; }
    .testimonials-grid .scroll-reveal:nth-child(2) { transition-delay: 0.2s; }
    .testimonials-grid .scroll-reveal:nth-child(3) { transition-delay: 0.3s; }

    /* Hamburger Menu Styles */
    .hamburger-menu {
        display: none;
        flex-direction: column;
        gap: 5px;
        background: none;
        border: none;
        cursor: pointer;
        z-index: 1001;
        padding: 5px;
    }

    .hamburger-menu .bar {
        width: 25px;
        height: 3px;
        background-color: var(--black);
        border-radius: 3px;
        transition: all 0.3s ease;
    }

    .hamburger-menu.active .bar:nth-child(1) {
        transform: translateY(8px) rotate(45deg);
        background-color: var(--accent-coral);
    }

    .hamburger-menu.active .bar:nth-child(2) {
        opacity: 0;
    }

    .hamburger-menu.active .bar:nth-child(3) {
        transform: translateY(-8px) rotate(-45deg);
        background-color: var(--accent-coral);
    }

    /* Responsive - Tablet & Mobile (1100px and below) */
    @media (max-width: 1100px) {
        .hamburger-menu {
            display: flex !important;
        }

        .nav-links {
            position: fixed;
            top: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 90%;
            max-width: 400px;
            background-color: var(--white);
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 100px 40px 40px;
            gap: 25px;
            border-radius: 0 0 16px 16px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            max-height: 0;
            overflow: hidden;
            opacity: 0;
            visibility: hidden;
            transition: all 0.4s ease-in-out;
            z-index: 999;
        }

        .nav-links.active {
            max-height: 500px;
            opacity: 1;
            visibility: visible;
            margin-top: 10px;
        }

        .nav-link {
            text-align: center;
            width: 100%;
            font-size: 18px;
            padding: 10px 0;
        }

        .nav-icons {
            display: none !important;
        }

        .features-grid,
        .products-grid {
            grid-template-columns: repeat(2, 1fr) !important;
        }

        .welcome-title {
            font-size: 48px;
        }

        .logo-animate {
            width: 220px !important;
        }

        .hero-title {
            font-size: 42px;
        }

        .section-title {
            font-size: 36px;
        }

        .about-content {
            grid-template-columns: 1fr !important;
        }

        .testimonials-grid {
            grid-template-columns: 1fr !important;
        }

        .footer-grid {
            grid-template-columns: repeat(2, 1fr) !important;
        }
    }

    @media (max-width: 768px) {
        .footer-grid {
            grid-template-columns: 1fr !important;
            gap: 32px;
        }

        .bottom-wrapper {
            flex-direction: column;
            gap: 16px;
            text-align: center;
        }

        .welcome-title {
            font-size: 36px;
        }

        .welcome-subtitle {
            font-size: 18px;
        }

        .hero-title {
            font-size: 32px;
        }

        .hero-subtitle {
            font-size: 18px;
        }

        .hero-buttons {
            flex-direction: column;
            gap: 15px;
        }

        .features-grid,
        .products-grid {
            grid-template-columns: 1fr !important;
        }

        .section-title {
            font-size: 32px;
        }

        .cta-title {
            font-size: 36px;
        }

        .logo-animate {
            width: 180px !important;
        }
    }

    @media (max-width: 480px) {
        .logo-animate {
            width: 150px !important;
        }

        .welcome-title {
            font-size: 28px;
        }

        .hero-title {
            font-size: 28px;
        }

        .section-title {
            font-size: 28px;
        }
    }

    /* Profile Dropdown Styles */
.profile-dropdown {
    position: relative;
}

.profile-btn {
    padding: 8px;
    cursor: pointer;
}

.dropdown-menu {
    position: absolute;
    top: 100%;
    right: 0;
    background-color: var(--white);
    border-radius: 12px;
    box-shadow: 0 10px 40px rgba(0, 0, 0, 0.15);
    min-width: 220px;
    padding: 16px 0;
    opacity: 0;
    visibility: hidden;
    transform: translateY(-10px);
    transition: all 0.3s ease;
    z-index: 1000;
    border: 1px solid var(--light-gray);
    margin-top: 10px;
}

.dropdown-menu.active {
    opacity: 1;
    visibility: visible;
    transform: translateY(0);
}

.dropdown-header {
    display: flex;
    align-items: center;
    gap: 12px;
    padding: 0 16px 12px;
}

.dropdown-avatar {
    width: 40px;
    height: 40px;
    color: var(--accent-coral);
    flex-shrink: 0;
}

.dropdown-user-info {
    display: flex;
    flex-direction: column;
    gap: 2px;
}

.dropdown-greeting {
    font-size: 12px;
    color: var(--medium-gray);
}

.dropdown-username {
    font-size: 14px;
    font-weight: 600;
    color: var(--black);
}

.dropdown-divider {
    height: 1px;
    background-color: var(--light-gray);
    margin: 8px 16px;
}

.dropdown-item {
    display: flex;
    align-items: center;
    gap: 12px;
    padding: 12px 16px;
    color: var(--black);
    text-decoration: none;
    font-size: 14px;
    font-weight: 500;
    transition: all 0.3s ease;
    border: none;
    background: none;
    width: 100%;
    cursor: pointer;
    text-align: left;
}

.dropdown-item:hover {
    background-color: var(--off-white);
    color: var(--accent-coral);
}

.dropdown-item-form {
    margin: 0;
    padding: 0;
}

.dropdown-item-form .dropdown-item {
    width: 100%;
    justify-content: flex-start;
}

.dropdown-icon {
    width: 18px;
    height: 18px;
    color: var(--medium-gray);
    flex-shrink: 0;
}

.dropdown-item:hover .dropdown-icon {
    color: var(--accent-coral);
}
</style>

<script>
    // Welcome Screen Animation
    window.addEventListener('load', function() {
        const welcomeScreen = document.getElementById('welcomeScreen');
        
        // Remove welcome screen after 4 seconds
        setTimeout(function() {
            welcomeScreen.classList.add('fade-out');
            
            // Remove from DOM after animation completes
            setTimeout(function() {
                welcomeScreen.style.display = 'none';
            }, 800);
        }, 4000);
    });

    // Scroll Reveal Animation
    function initScrollReveal() {
        const revealElements = document.querySelectorAll('.scroll-reveal');
        
        const revealOnScroll = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('revealed');
                }
            });
        }, {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        });

        revealElements.forEach(element => {
            revealOnScroll.observe(element);
        });
    }

    // Mobile Menu Toggle
    function initMobileMenu() {
        const hamburger = document.querySelector('.hamburger-menu');
        const navLinks = document.querySelector('.nav-links');

        if (hamburger) {
            hamburger.addEventListener('click', function() {
                hamburger.classList.toggle('active');
                navLinks.classList.toggle('active');
            });

            // Close menu when clicking outside
            document.addEventListener('click', function(event) {
                if (!hamburger.contains(event.target) && !navLinks.contains(event.target)) {
                    hamburger.classList.remove('active');
                    navLinks.classList.remove('active');
                }
            });
        }
    }

    // Initialize everything when DOM is loaded
    document.addEventListener('DOMContentLoaded', function() {
        initScrollReveal();
        initMobileMenu();
    });

    // Profile Dropdown Toggle
function initProfileDropdown() {
    const profileBtn = document.querySelector('.profile-btn');
    const dropdownMenu = document.querySelector('.dropdown-menu');
    
    if (profileBtn && dropdownMenu) {
        profileBtn.addEventListener('click', function(e) {
            e.stopPropagation();
            dropdownMenu.classList.toggle('active');
        });
        
        // Close dropdown when clicking outside
        document.addEventListener('click', function(e) {
            if (!dropdownMenu.contains(e.target) && !profileBtn.contains(e.target)) {
                dropdownMenu.classList.remove('active');
            }
        });
        
        // Close dropdown when pressing Escape
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape') {
                dropdownMenu.classList.remove('active');
            }
        });
    }
}

// Initialize everything when DOM is loaded
document.addEventListener('DOMContentLoaded', function() {
    initScrollReveal();
    initMobileMenu();
    initProfileDropdown(); // Add this line
});
</script>

</body>
</html>