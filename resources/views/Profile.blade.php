<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Profile - Patlat Alkuwait</title>
    <style>
        /* Color Variables */
        :root {
            --white: #ffffff;
            --off-white: #f8f9fa;
            --light-gray: #e9ecef;
            --medium-gray: #6c757d;
            --dark-gray: #343a40;
            --black: #000000;
            --accent-coral: #ff6b6b;
            --accent-coral-hover: #ff5252;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, sans-serif;
            background-color: var(--off-white);
            min-height: 100vh;
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

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 24px;
        }

        .nav-wrapper {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .logo {
            display: flex;
            align-items: center;
            gap: 8px;
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
        }

        .nav-link {
            color: var(--black);
            text-decoration: none;
            font-size: 15px;
            transition: color 0.3s ease;
            font-weight: 500;
        }

        .nav-link:hover {
            color: var(--accent-coral);
        }

        /* Profile Container */
        .profile-container {
            max-width: 1000px;
            margin: 40px auto;
            padding: 0 24px;
        }

        .profile-header {
            background: var(--white);
            border-radius: 20px;
            padding: 40px;
            margin-bottom: 30px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);
        }

        .profile-header-content {
            display: flex;
            align-items: center;
            gap: 30px;
        }

        .profile-avatar {
            width: 120px;
            height: 120px;
            background: linear-gradient(135deg, var(--accent-coral) 0%, var(--accent-coral-hover) 100%);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--white);
            font-size: 48px;
            font-weight: 700;
            flex-shrink: 0;
        }

        .profile-info h1 {
            font-size: 32px;
            font-weight: 700;
            color: var(--black);
            margin-bottom: 8px;
        }

        .profile-info p {
            color: var(--medium-gray);
            font-size: 16px;
            margin-bottom: 15px;
        }

        .profile-stats {
            display: flex;
            gap: 30px;
        }

        .stat-item {
            text-align: center;
        }

        .stat-value {
            font-size: 24px;
            font-weight: 700;
            color: var(--accent-coral);
        }

        .stat-label {
            font-size: 13px;
            color: var(--medium-gray);
            margin-top: 4px;
        }

        /* Profile Sections */
        .profile-section {
            background: var(--white);
            border-radius: 20px;
            padding: 30px;
            margin-bottom: 30px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);
        }

        .section-title {
            font-size: 24px;
            font-weight: 700;
            color: var(--black);
            margin-bottom: 25px;
            padding-bottom: 15px;
            border-bottom: 2px solid var(--light-gray);
        }

        .info-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 25px;
        }

        .info-item {
            display: flex;
            flex-direction: column;
            gap: 8px;
        }

        .info-label {
            font-size: 13px;
            color: var(--medium-gray);
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .info-value {
            font-size: 16px;
            color: var(--black);
            font-weight: 500;
        }

        /* Orders List */
        .orders-list {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        .order-item {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 20px;
            background: var(--off-white);
            border-radius: 12px;
            transition: all 0.3s ease;
        }

        .order-item:hover {
            background: var(--light-gray);
            transform: translateX(5px);
        }

        .order-info {
            display: flex;
            align-items: center;
            gap: 20px;
        }

        .order-number {
            font-weight: 700;
            color: var(--black);
            font-size: 16px;
        }

        .order-date {
            color: var(--medium-gray);
            font-size: 14px;
        }

        .order-status {
            padding: 6px 16px;
            border-radius: 20px;
            font-size: 13px;
            font-weight: 600;
        }

        .status-delivered {
            background: #d4edda;
            color: #155724;
        }

        .status-processing {
            background: #fff3cd;
            color: #856404;
        }

        .status-pending {
            background: #f8d7da;
            color: #721c24;
        }

        .order-total {
            font-weight: 700;
            color: var(--accent-coral);
            font-size: 16px;
        }

        /* Action Buttons */
        .action-buttons {
            display: flex;
            gap: 15px;
            margin-top: 30px;
        }

        .btn {
            padding: 12px 30px;
            border-radius: 10px;
            font-size: 15px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            border: none;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 8px;
        }

        .btn-primary {
            background: var(--accent-coral);
            color: var(--white);
        }

        .btn-primary:hover {
            background: var(--accent-coral-hover);
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(255, 107, 107, 0.3);
        }

        .btn-secondary {
            background: var(--light-gray);
            color: var(--black);
        }

        .btn-secondary:hover {
            background: var(--medium-gray);
            color: var(--white);
        }

        .btn-danger {
            background: #dc3545;
            color: var(--white);
        }

        .btn-danger:hover {
            background: #c82333;
        }

        /* Footer */
        .footer {
            background-color: var(--white);
            color: var(--black);
            padding: 40px 0 24px;
            border-top: 1px solid var(--light-gray);
            margin-top: 60px;
        }

        .footer-bottom {
            text-align: center;
            padding-top: 24px;
            border-top: 1px solid var(--light-gray);
            color: var(--medium-gray);
            font-size: 14px;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .profile-header-content {
                flex-direction: column;
                text-align: center;
            }

            .profile-stats {
                justify-content: center;
            }

            .info-grid {
                grid-template-columns: 1fr;
            }

            .order-item {
                flex-direction: column;
                align-items: flex-start;
                gap: 15px;
            }

            .action-buttons {
                flex-direction: column;
            }

            .btn {
                width: 100%;
                justify-content: center;
            }

            .nav-links {
                display: none;
            }
        }

        @media (max-width: 480px) {
            .profile-header {
                padding: 25px;
            }

            .profile-info h1 {
                font-size: 24px;
            }

            .profile-avatar {
                width: 100px;
                height: 100px;
                font-size: 40px;
            }

            .profile-section {
                padding: 20px;
            }

            .section-title {
                font-size: 20px;
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
            <ul class="nav-links">
                <li><a href="/" class="nav-link">Home</a></li>
                <li><a href="/shop" class="nav-link">Shop</a></li>
                <li><a href="/profile" class="nav-link" style="color: var(--accent-coral);">Profile</a></li>
            </ul>
        </div>
    </div>
</nav>

<!-- Profile Container -->
<div class="profile-container">
    <!-- Profile Header -->
    <div class="profile-header">
        <div class="profile-header-content">
            <div class="profile-avatar">
                {{ strtoupper(substr(auth()->user()->display_name ?? auth()->user()->username, 0, 1)) }}
            </div>
            <div class="profile-info">
                <h1>{{ auth()->user()->display_name ?? auth()->user()->username }}</h1>
                <p> {{ auth()->user()->username }}</p>
                <div class="profile-stats">
                    <div class="stat-item">
                        <div class="stat-value">{{ auth()->user()->orders->count() ?? 0 }}</div>
                        <div class="stat-label">Orders</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-value">{{ auth()->user()->created_at->diffForHumans(short: true) }}</div>
                        <div class="stat-label">Member Since</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Personal Information -->
    <div class="profile-section">
        <h2 class="section-title">Personal Information</h2>
        <div class="info-grid">
            <div class="info-item">
                <span class="info-label">Username</span>
                <span class="info-value">{{ auth()->user()->username }}</span>
            </div>
            <div class="info-item">
                <span class="info-label">Display Name</span>
                <span class="info-value">{{ auth()->user()->display_name ?? 'Not set' }}</span>
            </div>
            <div class="info-item">
                <span class="info-label">EMAIL ADDRESS</span>
                <span class="info-value">{{ maskEmail(auth()->user()->email) }}</span>
            </div>
            <div class="info-item">
                <span class="info-label">Member Since</span>
                <span class="info-value">{{ auth()->user()->created_at->format('F j, Y') }}</span>
            </div>
            <div class="info-item">
                <span class="info-label">Last Login</span>
                <span class="info-value">{{ auth()->user()->updated_at->format('F j, Y g:i A') }}</span>
            </div>
            <div class="info-item">
                <span class="info-label">Account Status</span>
                <span class="info-value" style="color: #28a745;">● Active</span>
            </div>
        </div>
        <div class="action-buttons">
            <a href="/profile/edit" class="btn btn-primary">
                <svg width="18" height="18" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/>
                </svg>
                Edit Profile
            </a>
            <a href="/profile/change-password" class="btn btn-secondary">
                <svg width="18" height="18" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/>
                </svg>
                Change Password
            </a>
        </div>
    </div>

    <!-- Recent Orders -->
    <div class="profile-section">
        <h2 class="section-title">Recent Orders</h2>
        @if(auth()->user()->orders && auth()->user()->orders->count() > 0)
            <div class="orders-list">
                @foreach(auth()->user()->orders->take(5) as $order)
                    <div class="order-item">
                        <div class="order-info">
                            <div>
                                <div class="order-number">Order #{{ $order->id }}</div>
                                <div class="order-date">{{ $order->created_at->format('M j, Y') }}</div>
                            </div>
                        </div>
                        <span class="order-status status-{{ strtolower($order->status) }}">
                            {{ ucfirst($order->status) }}
                        </span>
                        <div class="order-total">${{ number_format($order->total, 2) }}</div>
                    </div>
                @endforeach
            </div>
            <div class="action-buttons">
                <a href="/orders" class="btn btn-secondary">View All Orders</a>
            </div>
        @else
            <div style="text-align: center; padding: 40px; color: var(--medium-gray);">
                <svg width="64" height="64" fill="none" stroke="currentColor" viewBox="0 0 24 24" style="margin: 0 auto 20px; opacity: 0.3;">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"/>
                </svg>
                <p style="font-size: 16px; margin-bottom: 15px;">No orders yet</p>
                <a href="/shop" class="btn btn-primary">Start Shopping</a>
            </div>
        @endif
    </div>

    <!-- Account Actions -->
    <div class="profile-section">
        <h2 class="section-title">Account Settings</h2>
        <div class="action-buttons">
            <a href="/profile/notifications" class="btn btn-secondary">
                <svg width="18" height="18" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"/>
                </svg>
                Notification Preferences
            </a>
            <a href="/profile/addresses" class="btn btn-secondary">
                <svg width="18" height="18" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                </svg>
                Saved Addresses
            </a>
            <form method="POST" action="/logout" style="display: inline;">
                @csrf
                <button type="submit" class="btn btn-danger">
                    <svg width="18" height="18" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"/>
                    </svg>
                    Logout
                </button>
            </form>
        </div>
    </div>
</div>

<!-- Footer -->
<footer class="footer">
    <div class="container">
        <div class="footer-bottom">
            <p>&copy; {{ date('Y') }} Patlat Alkuwait. All rights reserved.</p>
        </div>
    </div>
</footer>

</body>
</html>