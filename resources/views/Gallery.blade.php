<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery - Patlat Alkuwait</title>
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

        .nav-link:hover,
        .nav-link.active {
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

        /* Hamburger Menu */
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

        /* Profile Dropdown */
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

        /* Gallery Section */
        .gallery-section {
            padding: 80px 0 100px;
        }

        .gallery-header {
            text-align: center;
            margin-bottom: 60px;
        }

        .gallery-title {
            font-size: 48px;
            font-weight: 700;
            color: var(--black);
            margin-bottom: 15px;
        }

        .gallery-subtitle {
            font-size: 18px;
            color: var(--medium-gray);
            max-width: 600px;
            margin: 0 auto;
        }

        .gallery-filters {
            display: flex;
            justify-content: center;
            gap: 12px;
            margin-bottom: 50px;
            flex-wrap: wrap;
        }

        .filter-btn {
            padding: 12px 28px;
            background-color: var(--white);
            border: 2px solid var(--light-gray);
            border-radius: 25px;
            font-size: 14px;
            font-weight: 600;
            color: var(--medium-gray);
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .filter-btn:hover,
        .filter-btn.active {
            background-color: var(--accent-coral);
            border-color: var(--accent-coral);
            color: var(--white);
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(255, 107, 107, 0.3);
        }

        .gallery-grid {
            display: grid;
            grid-template-columns: repeat(5, 1fr);
            gap: 20px;
        }

        .gallery-card {
            background: var(--white);
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);
            transition: all 0.5s cubic-bezier(0.68, -0.55, 0.265, 1.55);
            opacity: 0;
            transform: translateY(50px);
        }

        .gallery-card.revealed {
            opacity: 1;
            transform: translateY(0);
        }

        .gallery-card:hover {
            transform: translateY(-10px) scale(1.02);
            box-shadow: 0 20px 50px rgba(0, 0, 0, 0.15);
        }

        .gallery-card-image {
            position: relative;
            width: 100%;
            height: 280px;
            overflow: hidden;
        }

        .gallery-card-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        .gallery-card:hover .gallery-card-image img {
            transform: scale(1.1);
        }

        .gallery-card-overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(to top, rgba(0, 0, 0, 0.8) 0%, rgba(0, 0, 0, 0.4) 50%, transparent 100%);
            opacity: 0;
            transition: opacity 0.3s ease;
            display: flex;
            flex-direction: column;
            justify-content: flex-end;
            padding: 20px;
        }

        .gallery-card:hover .gallery-card-overlay {
            opacity: 1;
        }

        .gallery-card-status {
            display: inline-block;
            padding: 6px 14px;
            background: var(--accent-coral);
            color: var(--white);
            border-radius: 20px;
            font-size: 12px;
            font-weight: 600;
            margin-bottom: 10px;
            width: fit-content;
        }

        .gallery-card-info {
            padding: 20px;
        }

        .gallery-card-order {
            font-size: 13px;
            color: var(--medium-gray);
            margin-bottom: 8px;
        }

        .gallery-card-title {
            font-size: 16px;
            font-weight: 700;
            color: var(--black);
            margin-bottom: 10px;
            line-height: 1.4;
        }

        .gallery-card-customer {
            display: flex;
            align-items: center;
            gap: 8px;
            margin-bottom: 12px;
        }

        .customer-avatar {
        width: 32px;
        height: 32px;
        background: linear-gradient(135deg, var(--accent-coral) 0%, var(--accent-coral-hover) 100%);
        border-radius: 50% !important; /* Force circle */
        display: flex;
        align-items: center;
        justify-content: center;
        color: var(--white);
        font-size: 12px;
        font-weight: 700;
        flex-shrink: 0; /* Prevent flex stretching */
        overflow: hidden; /* Ensure circle shape */
        min-width: 32px; /* Force minimum width */
        min-height: 32px; /* Force minimum height */
    }

        .customer-name {
            font-size: 14px;
            font-weight: 600;
            color: var(--black);
        }

        .verified-badge {
            display: inline-flex;
            align-items: center;
            gap: 4px;
            font-size: 11px;
            color: #28a745;
            font-weight: 600;
        }

        .verified-badge svg {
            width: 14px;
            height: 14px;
        }

        .gallery-card-date {
            font-size: 12px;
            color: var(--medium-gray);
            display: flex;
            align-items: center;
            gap: 6px;
        }

        .gallery-card-date svg {
            width: 14px;
            height: 14px;
        }

        .gallery-card-price {
            font-size: 18px;
            font-weight: 700;
            color: var(--accent-coral);
            margin-top: 12px;
            padding-top: 12px;
            border-top: 1px solid var(--light-gray);
        }

        .gallery-load-more {
            text-align: center;
            margin-top: 60px;
        }

        .btn-load-more {
            padding: 16px 48px;
            background-color: var(--white);
            border: 2px solid var(--accent-coral);
            border-radius: 30px;
            font-size: 16px;
            font-weight: 600;
            color: var(--accent-coral);
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .btn-load-more:hover {
            background-color: var(--accent-coral);
            color: var(--white);
            transform: translateY(-3px);
            box-shadow: 0 10px 30px rgba(255, 107, 107, 0.3);
        }

        /* Footer */
        .footer {
            background-color: var(--white);
            color: var(--black);
            padding: 64px 0 24px;
            border-top: 1px solid var(--light-gray);
            margin-top: 80px;
        }

        .footer-bottom {
            text-align: center;
            padding-top: 32px;
            border-top: 1px solid var(--light-gray);
            color: var(--medium-gray);
            font-size: 14px;
        }

        /* Stagger Animation Delays */
        .gallery-card:nth-child(1) { transition-delay: 0.05s; }
        .gallery-card:nth-child(2) { transition-delay: 0.1s; }
        .gallery-card:nth-child(3) { transition-delay: 0.15s; }
        .gallery-card:nth-child(4) { transition-delay: 0.2s; }
        .gallery-card:nth-child(5) { transition-delay: 0.25s; }
        .gallery-card:nth-child(6) { transition-delay: 0.3s; }
        .gallery-card:nth-child(7) { transition-delay: 0.35s; }
        .gallery-card:nth-child(8) { transition-delay: 0.4s; }
        .gallery-card:nth-child(9) { transition-delay: 0.45s; }
        .gallery-card:nth-child(10) { transition-delay: 0.5s; }
        .gallery-card:nth-child(11) { transition-delay: 0.55s; }
        .gallery-card:nth-child(12) { transition-delay: 0.6s; }
        .gallery-card:nth-child(13) { transition-delay: 0.65s; }
        .gallery-card:nth-child(14) { transition-delay: 0.7s; }
        .gallery-card:nth-child(15) { transition-delay: 0.75s; }
        .gallery-card:nth-child(16) { transition-delay: 0.8s; }
        .gallery-card:nth-child(17) { transition-delay: 0.85s; }
        .gallery-card:nth-child(18) { transition-delay: 0.9s; }
        .gallery-card:nth-child(19) { transition-delay: 0.95s; }
        .gallery-card:nth-child(20) { transition-delay: 1.0s; }

        /* Responsive */
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
            .gallery-grid {
                grid-template-columns: repeat(3, 1fr);
            }
            .gallery-title {
                font-size: 36px;
            }
        }

        @media (max-width: 768px) {
            .footer-grid {
                grid-template-columns: 1fr !important;
                gap: 32px;
            }
            .gallery-grid {
                grid-template-columns: repeat(2, 1fr);
            }
            .gallery-card-image {
                height: 220px;
            }
            .gallery-title {
                font-size: 32px;
            }
            .gallery-filters {
                gap: 8px;
            }
            .filter-btn {
                padding: 10px 20px;
                font-size: 13px;
            }
        }

        @media (max-width: 480px) {
            .gallery-grid {
                grid-template-columns: 1fr;
            }
            .gallery-card-image {
                height: 250px;
            }
            .gallery-title {
                font-size: 28px;
            }
            .gallery-subtitle {
                font-size: 15px;
            }
        }
    </style>
</head>
<body>

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
                    <a href="/gallery" class="nav-link active">
                        Gallery
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
        </div>
    </div>
</nav>

<!-- Gallery Section -->
<section class="gallery-section">
    <div class="container">
        <!-- Header -->
        <div class="gallery-header scroll-reveal">
            <h1 class="gallery-title">Our Happy Customers</h1>
            <p class="gallery-subtitle">Real orders, real smiles, real beauty delivered across Kuwait</p>
        </div>

        <!-- Filter Buttons -->
        <div class="gallery-filters scroll-reveal">
            <button class="filter-btn active" data-filter="all">All Orders</button>
            <button class="filter-btn" data-filter="bouquet">Bouquets</button>
            <button class="filter-btn" data-filter="arrangement">Arrangements</button>
            <button class="filter-btn" data-filter="wedding">Weddings</button>
            <button class="filter-btn" data-filter="event">Events</button>
            <button class="filter-btn" data-filter="birthday">Birthdays</button>
        </div>

        <!-- Gallery Grid -->
        <div class="gallery-grid">
            <!-- Card 1 -->
            <div class="gallery-card" data-category="bouquet">
                <div class="gallery-card-image">
                    <img src="{{ asset('images/gallery/boquets.jpg') }}" alt="Rose Bouquet Order">
                    <div class="gallery-card-overlay">
                        <span class="gallery-card-status">✓ Delivered</span>
                    </div>
                </div>
                <div class="gallery-card-info">
                    <p class="gallery-card-order">Order #ORD-2026-001</p>
                    <h3 class="gallery-card-title">Valentine's Red Rose Bouquet</h3>
                    <div class="gallery-card-customer">
                        <div class="customer-avatar">A</div>
                        <span class="customer-name">Ahmed K.</span>
                        <span class="verified-badge">
                            <svg fill="currentColor" viewBox="0 0 24 24">
                                <path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/>
                            </svg>
                            Verified
                        </span>
                    </div>
                    <p class="gallery-card-date">
                        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                        </svg>
                        Feb 14, 2026
                    </p>
                    <p class="gallery-card-price">د.ك49.99</p>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="gallery-card" data-category="wedding">
                <div class="gallery-card-image">
                    <img src="{{ asset('images/gallery/boquets2.jpg') }}" alt="Wedding Arrangement">
                    <div class="gallery-card-overlay">
                        <span class="gallery-card-status">✓ Delivered</span>
                    </div>
                </div>
                <div class="gallery-card-info">
                    <p class="gallery-card-order">Order #ORD-2026-045</p>
                    <h3 class="gallery-card-title">Wedding Centerpiece - 50 Tables</h3>
                    <div class="gallery-card-customer">
                        <div class="customer-avatar">F</div>
                        <span class="customer-name">Fatima A.</span>
                        <span class="verified-badge">
                            <svg fill="currentColor" viewBox="0 0 24 24">
                                <path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/>
                            </svg>
                            Verified
                        </span>
                    </div>
                    <p class="gallery-card-date">
                        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                        </svg>
                        Feb 10, 2026
                    </p>
                    <p class="gallery-card-price">د.ك450.00</p>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="gallery-card" data-category="arrangement">
                <div class="gallery-card-image">
                    <img src="{{ asset('images/gallery/arrangement.jpg') }}" alt="Tulip Arrangement">
                    <div class="gallery-card-overlay">
                        <span class="gallery-card-status">✓ Delivered</span>
                    </div>
                </div>
                <div class="gallery-card-info">
                    <p class="gallery-card-order">Order #ORD-2026-089</p>
                    <h3 class="gallery-card-title">Spring Tulip Garden Arrangement</h3>
                    <div class="gallery-card-customer">
                        <div class="customer-avatar">S</div>
                        <span class="customer-name">Sarah M.</span>
                        <span class="verified-badge">
                            <svg fill="currentColor" viewBox="0 0 24 24">
                                <path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/>
                            </svg>
                            Verified
                        </span>
                    </div>
                    <p class="gallery-card-date">
                        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                        </svg>
                        Feb 8, 2026
                    </p>
                    <p class="gallery-card-price">د.ك44.99</p>
                </div>
            </div>

            <!-- Card 4 -->
            <div class="gallery-card" data-category="event">
                <div class="gallery-card-image">
                    <img src="{{ asset('images/cherry blossom.jpg') }}" alt="Corporate Event">
                    <div class="gallery-card-overlay">
                        <span class="gallery-card-status">✓ Delivered</span>
                    </div>
                </div>
                <div class="gallery-card-info">
                    <p class="gallery-card-order">Order #ORD-2026-112</p>
                    <h3 class="gallery-card-title">Corporate Event - Grand Opening</h3>
                    <div class="gallery-card-customer">
                        <div class="customer-avatar">K</div>
                        <span class="customer-name">Kuwait Corp.</span>
                        <span class="verified-badge">
                            <svg fill="currentColor" viewBox="0 0 24 24">
                                <path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/>
                            </svg>
                            Verified
                        </span>
                    </div>
                    <p class="gallery-card-date">
                        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                        </svg>
                        Feb 5, 2026
                    </p>
                    <p class="gallery-card-price">د.ك320.00</p>
                </div>
            </div>

            <!-- Card 5 -->
            <div class="gallery-card" data-category="birthday">
                <div class="gallery-card-image">
                    <img src="{{ asset('images/gallery/birthday.png') }}" alt="Birthday Bouquet">
                    <div class="gallery-card-overlay">
                        <span class="gallery-card-status">✓ Delivered</span>
                    </div>
                </div>
                <div class="gallery-card-info">
                    <p class="gallery-card-order">Order #ORD-2026-156</p>
                    <h3 class="gallery-card-title">Birthday Surprise - Mixed Flowers</h3>
                    <div class="gallery-card-customer">
                        <div class="customer-avatar">M</div>
                        <span class="customer-name">Mohammed R.</span>
                        <span class="verified-badge">
                            <svg fill="currentColor" viewBox="0 0 24 24">
                                <path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/>
                            </svg>
                            Verified
                        </span>
                    </div>
                    <p class="gallery-card-date">
                        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                        </svg>
                        Feb 1, 2026
                    </p>
                    <p class="gallery-card-price">د.ك65.00</p>
                </div>
            </div>

            <!-- Cards 6-10 (Example - Duplicate structure for cards 11-20) -->
            <!-- Card 6 -->
            <div class="gallery-card" data-category="arrangement">
                <div class="gallery-card-image">
                    <img src="{{ asset('images/gallery/arrangement2.jpg') }}" alt="Anniversary">
                    <div class="gallery-card-overlay">
                        <span class="gallery-card-status">✓ Delivered</span>
                    </div>
                </div>
                <div class="gallery-card-info">
                    <p class="gallery-card-order">Order #ORD-2026-178</p>
                    <h3 class="gallery-card-title">10th Anniversary Special</h3>
                    <div class="gallery-card-customer">
                        <div class="customer-avatar">K</div>
                        <span class="customer-name">Khalid & Nora</span>
                        <span class="verified-badge">✓ Verified</span>
                    </div>
                    <p class="gallery-card-date">Jan 28, 2026</p>
                    <p class="gallery-card-price">د.ك89.99</p>
                </div>
            </div>

            <div class="gallery-card" data-category="arrangement">
                <div class="gallery-card-image">
                    <img src="{{ asset('images/gallery/arragement3.jpg') }}" alt="Anniversary">
                    <div class="gallery-card-overlay">
                        <span class="gallery-card-status">✓ Delivered</span>
                    </div>
                </div>
                <div class="gallery-card-info">
                    <p class="gallery-card-order">Order #ORD-2026-178</p>
                    <h3 class="gallery-card-title">10th Anniversary Special</h3>
                    <div class="gallery-card-customer">
                        <div class="customer-avatar">K</div>
                        <span class="customer-name">Khalid & Nora</span>
                        <span class="verified-badge">✓ Verified</span>
                    </div>
                    <p class="gallery-card-date">Jan 28, 2026</p>
                    <p class="gallery-card-price">د.ك89.99</p>
                </div>
            </div>

            <div class="gallery-card" data-category="arrangement">
                <div class="gallery-card-image">
                    <img src="{{ asset('images/gallery/arrangement4.jpg') }}" alt="Anniversary">
                    <div class="gallery-card-overlay">
                        <span class="gallery-card-status">✓ Delivered</span>
                    </div>
                </div>
                <div class="gallery-card-info">
                    <p class="gallery-card-order">Order #ORD-2026-178</p>
                    <h3 class="gallery-card-title">10th Anniversary Special</h3>
                    <div class="gallery-card-customer">
                        <div class="customer-avatar">K</div>
                        <span class="customer-name">Khalid & Nora</span>
                        <span class="verified-badge">✓ Verified</span>
                    </div>
                    <p class="gallery-card-date">Jan 28, 2026</p>
                    <p class="gallery-card-price">د.ك89.99</p>
                </div>
            </div>

            <div class="gallery-card" data-category="arrangement">
                <div class="gallery-card-image">
                    <img src="{{ asset('images/gallery/arrangement5.jpg') }}" alt="Anniversary">
                    <div class="gallery-card-overlay">
                        <span class="gallery-card-status">✓ Delivered</span>
                    </div>
                </div>
                <div class="gallery-card-info">
                    <p class="gallery-card-order">Order #ORD-2026-178</p>
                    <h3 class="gallery-card-title">10th Anniversary Special</h3>
                    <div class="gallery-card-customer">
                        <div class="customer-avatar">K</div>
                        <span class="customer-name">Khalid & Nora</span>
                        <span class="verified-badge">✓ Verified</span>
                    </div>
                    <p class="gallery-card-date">Jan 28, 2026</p>
                    <p class="gallery-card-price">د.ك89.99</p>
                </div>
            </div>


            <!-- Card 7 -->
            <div class="gallery-card" data-category="bouquet">
                <div class="gallery-card-image">
                    <img src="{{ asset('images/gallery/boquets2.jpg') }}" alt="Sunflower">
                    <div class="gallery-card-overlay">
                        <span class="gallery-card-status">✓ Delivered</span>
                    </div>
                </div>
                <div class="gallery-card-info">
                    <p class="gallery-card-order">Order #ORD-2026-189</p>
                    <h3 class="gallery-card-title">Sunflower Delight Bouquet</h3>
                    <div class="gallery-card-customer">
                        <div class="customer-avatar">N</div>
                        <span class="customer-name">Noura S.</span>
                        <span class="verified-badge">✓ Verified</span>
                    </div>
                    <p class="gallery-card-date">Jan 25, 2026</p>
                    <p class="gallery-card-price">د.ك39.99</p>
                </div>
            </div>

            <div class="gallery-card" data-category="bouquet">
                <div class="gallery-card-image">
                    <img src="{{ asset('images/gallery/boquets3.jpg') }}" alt="Sunflower">
                    <div class="gallery-card-overlay">
                        <span class="gallery-card-status">✓ Delivered</span>
                    </div>
                </div>
                <div class="gallery-card-info">
                    <p class="gallery-card-order">Order #ORD-2026-189</p>
                    <h3 class="gallery-card-title">Sunflower Delight Bouquet</h3>
                    <div class="gallery-card-customer">
                        <div class="customer-avatar">N</div>
                        <span class="customer-name">Noura S.</span>
                        <span class="verified-badge">✓ Verified</span>
                    </div>
                    <p class="gallery-card-date">Jan 25, 2026</p>
                    <p class="gallery-card-price">د.ك39.99</p>
                </div>
            </div>

            <div class="gallery-card" data-category="bouquet">
                <div class="gallery-card-image">
                    <img src="{{ asset('images/gallery/boquets4.jpg') }}" alt="Sunflower">
                    <div class="gallery-card-overlay">
                        <span class="gallery-card-status">✓ Delivered</span>
                    </div>
                </div>
                <div class="gallery-card-info">
                    <p class="gallery-card-order">Order #ORD-2026-189</p>
                    <h3 class="gallery-card-title">Sunflower Delight Bouquet</h3>
                    <div class="gallery-card-customer">
                        <div class="customer-avatar">N</div>
                        <span class="customer-name">Noura S.</span>
                        <span class="verified-badge">✓ Verified</span>
                    </div>
                    <p class="gallery-card-date">Jan 25, 2026</p>
                    <p class="gallery-card-price">د.ك39.99</p>
                </div>
            </div>

            <div class="gallery-card" data-category="bouquet">
                <div class="gallery-card-image">
                    <img src="{{ asset('images/gallery/boquets5.jpg') }}" alt="Sunflower">
                    <div class="gallery-card-overlay">
                        <span class="gallery-card-status">✓ Delivered</span>
                    </div>
                </div>
                <div class="gallery-card-info">
                    <p class="gallery-card-order">Order #ORD-2026-189</p>
                    <h3 class="gallery-card-title">Sunflower Delight Bouquet</h3>
                    <div class="gallery-card-customer">
                        <div class="customer-avatar">N</div>
                        <span class="customer-name">Noura S.</span>
                        <span class="verified-badge">✓ Verified</span>
                    </div>
                    <p class="gallery-card-date">Jan 25, 2026</p>
                    <p class="gallery-card-price">د.ك39.99</p>
                </div>
            </div>

            <!-- Card 8 -->
            <div class="gallery-card" data-category="wedding">
                <div class="gallery-card-image">
                    <img src="{{ asset('images/cherry blossom.jpg') }}" alt="Wedding">
                    <div class="gallery-card-overlay">
                        <span class="gallery-card-status">✓ Delivered</span>
                    </div>
                </div>
                <div class="gallery-card-info">
                    <p class="gallery-card-order">Order #ORD-2026-201</p>
                    <h3 class="gallery-card-title">Bridal Bouquet - Premium</h3>
                    <div class="gallery-card-customer">
                        <div class="customer-avatar">A</div>
                        <span class="customer-name">Amira H.</span>
                        <span class="verified-badge">✓ Verified</span>
                    </div>
                    <p class="gallery-card-date">Jan 20, 2026</p>
                    <p class="gallery-card-price">د.ك150.00</p>
                </div>
            </div>

            <!-- Card 9 -->
            <div class="gallery-card" data-category="birthday">
                <div class="gallery-card-image">
                    <img src="{{ asset('images/boquet.jpg') }}" alt="Birthday">
                    <div class="gallery-card-overlay">
                        <span class="gallery-card-status">✓ Delivered</span>
                    </div>
                </div>
                <div class="gallery-card-info">
                    <p class="gallery-card-order">Order #ORD-2026-215</p>
                    <h3 class="gallery-card-title">Kids Birthday Party Pack</h3>
                    <div class="gallery-card-customer">
                        <div class="customer-avatar">L</div>
                        <span class="customer-name">Layla M.</span>
                        <span class="verified-badge">✓ Verified</span>
                    </div>
                    <p class="gallery-card-date">Jan 15, 2026</p>
                    <p class="gallery-card-price">د.ك75.00</p>
                </div>
            </div>

            <!-- Card 10 -->
            <div class="gallery-card" data-category="event">
                <div class="gallery-card-image">
                    <img src="{{ asset('images/tulip.jpg') }}" alt="Event">
                    <div class="gallery-card-overlay">
                        <span class="gallery-card-status">✓ Delivered</span>
                    </div>
                </div>
                <div class="gallery-card-info">
                    <p class="gallery-card-order">Order #ORD-2026-228</p>
                    <h3 class="gallery-card-title">Conference Hall Decoration</h3>
                    <div class="gallery-card-customer">
                        <div class="customer-avatar">K</div>
                        <span class="customer-name">Kuwait Events</span>
                        <span class="verified-badge">✓ Verified</span>
                    </div>
                    <p class="gallery-card-date">Jan 10, 2026</p>
                    <p class="gallery-card-price">د.ك280.00</p>
                </div>
            </div>

            <!-- 🔄 Duplicate cards 1-10 structure for cards 11-20 with different data -->
        </div>

        <!-- Load More Button -->
        <div class="gallery-load-more scroll-reveal">
            <button class="btn-load-more">Load More Orders</button>
        </div>
    </div>
</section>

<!-- Footer -->
<footer class="footer">
    <div class="container">
        <div class="footer-bottom">
            <p>&copy; {{ date('Y') }} Patlat Alkuwait. All rights reserved.</p>
        </div>
    </div>
</footer>

<script>
    // Scroll Reveal Animation
    function initScrollReveal() {
        const revealElements = document.querySelectorAll('.scroll-reveal, .gallery-card');
        
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

    // Filter Functionality
    function initGalleryFilters() {
        const filterBtns = document.querySelectorAll('.filter-btn');
        const galleryCards = document.querySelectorAll('.gallery-card');

        filterBtns.forEach(btn => {
            btn.addEventListener('click', function() {
                
                filterBtns.forEach(b => b.classList.remove('active'));
                
                this.classList.add('active');

                const filter = this.getAttribute('data-filter');

                galleryCards.forEach(card => {
                    if (filter === 'all' || card.getAttribute('data-category') === filter) {
                        card.style.display = 'block';
                        setTimeout(() => {
                            card.classList.add('revealed');
                        }, 100);
                    } else {
                        card.style.display = 'none';
                        card.classList.remove('revealed');
                    }
                });
            });
        });
    }

    document.addEventListener('DOMContentLoaded', function() {
        initScrollReveal();
        initMobileMenu();
        initProfileDropdown();
        initGalleryFilters();
    });
</script>

</body>
</html>