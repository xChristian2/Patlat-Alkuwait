<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Patlat Alkuwait</title>
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

    html, body {
        height: 100%;
        width: 100%;
        overflow: hidden; /* Prevent scrolling by default */
    }

    body {
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, sans-serif;
        background: linear-gradient(135deg, var(--off-white) 0%, var(--light-gray) 100%);
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 20px;
    }

    .auth-container {
        position: relative;
        width: 100%;
        max-width: 450px;
        height: 700px;
        perspective: 1000px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .card-stack {
        position: relative;
        width: 100%;
        height: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .auth-card {
        position: absolute;
        width: 100%;
        max-width: 420px;
        background: var(--white);
        border-radius: 20px;
        padding: 40px;
        box-shadow: 0 15px 50px rgba(0, 0, 0, 0.1);
        transition: all 0.6s cubic-bezier(0.68, -0.55, 0.265, 1.55);
        backface-visibility: hidden;
    }

    /* Login Card Positioning */
    .auth-card.login {
        transform: translateY(0) rotateX(0);
        z-index: 2;
        opacity: 1;
    }

    .auth-card.login.hidden {
        transform: translateY(-200px) rotateX(-20deg) scale(0.9);
        z-index: 1;
        opacity: 0;
        pointer-events: none;
    }

    /* Register Card Positioning */
    .auth-card.register {
        transform: translateY(200px) rotateX(20deg) scale(0.9);
        z-index: 1;
        opacity: 0;
    }

    .auth-card.register.active {
        transform: translateY(0) rotateX(0);
        z-index: 2;
        opacity: 1;
    }

    .logo-section {
        text-align: center;
        margin-bottom: 30px;
    }

    .logo-section img {
        width: 80px;
        height: auto;
        margin-bottom: 15px;
    }

    .logo-section h1 {
        font-size: 28px;
        font-weight: 700;
        color: var(--black);
        margin-bottom: 5px;
    }

    .logo-section p {
        color: var(--medium-gray);
        font-size: 14px;
    }

    .form-group {
        margin-bottom: 20px;
    }

    .form-group label {
        display: block;
        margin-bottom: 8px;
        font-weight: 600;
        color: var(--black);
        font-size: 14px;
    }

    .form-group input {
        width: 100%;
        padding: 14px 16px;
        border: 2px solid var(--light-gray);
        border-radius: 10px;
        font-size: 15px;
        transition: all 0.3s ease;
        outline: none;
    }

    .form-group input:focus {
        border-color: var(--accent-coral);
        box-shadow: 0 0 0 3px rgba(255, 107, 107, 0.1);
    }

    .checkbox-group {
        display: flex;
        align-items: center;
        gap: 8px;
        margin-bottom: 20px;
    }

    .checkbox-group input[type="checkbox"] {
        width: 18px;
        height: 18px;
        accent-color: var(--accent-coral);
        cursor: pointer;
    }

    .checkbox-group label {
        font-size: 14px;
        color: var(--medium-gray);
        cursor: pointer;
        margin: 0;
    }

    .btn-submit {
        width: 100%;
        padding: 15px;
        background: var(--accent-coral);
        color: var(--white);
        border: none;
        border-radius: 10px;
        font-size: 16px;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.3s ease;
        margin-bottom: 20px;
    }

    .btn-submit:hover {
        background: var(--accent-coral-hover);
        transform: translateY(-2px);
        box-shadow: 0 8px 20px rgba(255, 107, 107, 0.3);
    }

    .divider {
        display: flex;
        align-items: center;
        margin: 25px 0;
    }

    .divider-line {
        flex: 1;
        height: 1px;
        background: var(--light-gray);
    }

    .divider-text {
        padding: 0 15px;
        color: var(--medium-gray);
        font-size: 13px;
    }

    .social-login {
        margin-bottom: 25px;
    }

    .social-btn {
        width: 100%;
        padding: 12px;
        border: 2px solid var(--light-gray);
        background: var(--white);
        border-radius: 10px;
        cursor: pointer;
        transition: all 0.3s ease;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 8px;
        font-size: 14px;
        font-weight: 500;
        color: var(--black);
    }

    .social-btn:hover {
        border-color: var(--accent-coral);
        background: var(--off-white);
        transform: translateY(-2px);
    }

    .switch-section {
        text-align: center;
        margin-top: 20px;
    }

    .switch-section p {
        color: var(--medium-gray);
        font-size: 14px;
        margin-bottom: 8px;
    }

    .switch-btn {
        background: none;
        border: none;
        color: var(--accent-coral);
        font-size: 15px;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.3s ease;
    }

    .switch-btn:hover {
        color: var(--accent-coral-hover);
        text-decoration: underline;
    }

    /* Or Register Section */
    .or-register-section {
        text-align: center;
        margin-top: 15px;
        padding-top: 15px;
        border-top: 1px solid var(--light-gray);
    }

    .or-register-section p {
        color: var(--medium-gray);
        font-size: 13px;
        margin-bottom: 8px;
    }

    .or-register-btn {
        background: none;
        border: none;
        color: var(--accent-coral);
        font-size: 14px;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.3s ease;
    }

    .or-register-btn:hover {
        color: var(--accent-coral-hover);
        text-decoration: underline;
    }

    .alert {
        padding: 12px 16px;
        border-radius: 8px;
        margin-bottom: 20px;
        font-size: 14px;
        display: none;
    }

    .alert.show {
        display: block;
    }

    .alert-error {
        background: #f8d7da;
        color: #721c24;
        border: 1px solid #f5c6cb;
    }

    .alert-success {
        background: #d4edda;
        color: #155724;
        border: 1px solid #c3e6cb;
    }

    /* Responsive - Tablet */
    @media (max-width: 768px) {
        .auth-container {
            height: 650px;
        }

        .auth-card {
            padding: 30px 25px;
        }
    }

    /* Responsive - Mobile */
    @media (max-width: 480px) {
        body {
            padding: 15px;
        }

        .auth-container {
            height: 600px;
        }

        .auth-card {
            padding: 25px 20px;
        }

        .logo-section h1 {
            font-size: 24px;
        }
    }

    /* iPhone SE and smaller screens - ONLY these get scrollable */
    @media (max-height: 667px) and (max-width: 375px) {
        html, body {
            overflow-x: hidden; /* Only hide horizontal */
            overflow-y: auto; /* Allow vertical scroll */
        }

        body {
            padding: 10px;
            align-items: flex-start;
            padding-top: 20px;
            min-height: 100vh;
        }

        .auth-container {
            height: auto;
            min-height: auto;
            max-height: none;
            margin: 0 auto;
        }

        .auth-card {
            position: relative;
            padding: 30px 25px;
            border-radius: 15px;
            transform: none !important;
            opacity: 1 !important;
        }

        .auth-card.hidden {
            display: none;
        }

        .logo-section img {
            width: 60px;
            margin-bottom: 10px;
        }

        .logo-section h1 {
            font-size: 22px;
            margin-bottom: 5px;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            font-size: 13px;
            margin-bottom: 6px;
        }

        .form-group input {
            padding: 12px 14px;
            font-size: 14px;
        }

        .btn-submit {
            padding: 13px;
            font-size: 15px;
            margin-bottom: 15px;
        }

        .divider {
            margin: 20px 0;
        }

        .divider-text {
            font-size: 11px;
            padding: 0 10px;
        }

        .social-btn {
            padding: 10px;
            font-size: 13px;
        }

        .switch-section {
            margin-top: 15px;
        }

        .switch-section p {
            font-size: 12px;
            margin-bottom: 6px;
        }

        .switch-btn {
            font-size: 13px;
        }

        .or-register-section {
            margin-top: 12px;
            padding-top: 12px;
        }

        .or-register-section p {
            font-size: 11px;
            margin-bottom: 6px;
        }

        .or-register-btn {
            font-size: 12px;
        }
    }

    /* Extra small screens */
    @media (max-width: 375px) {
        .auth-card {
            padding: 25px 20px;
        }

        .logo-section h1 {
            font-size: 20px;
        }

        .form-group input {
            padding: 11px 12px;
        }
    }

    /* Very small screens */
    @media (max-width: 320px) {
        body {
            padding: 5px;
        }

        .auth-card {
            padding: 20px 15px;
            border-radius: 12px;
        }

        .logo-section img {
            width: 50px;
        }

        .logo-section h1 {
            font-size: 18px;
        }

        .form-group label {
            font-size: 12px;
        }

        .form-group input {
            padding: 10px;
            font-size: 13px;
        }

        .btn-submit {
            padding: 12px;
            font-size: 14px;
        }
    }
</style>
</head>
<body>

<div class="auth-container">
    <div class="card-stack">
        <!-- Login Card -->
        <div class="auth-card login" id="loginCard">
            <div class="logo-section">
                <img src="{{ asset('images/Logo.png') }}" alt="Patlat Alkuwait">
                <h1>Welcome Back</h1>
                <p>Login to your account</p>
            </div>

            @if(session('error'))
                <div class="alert alert-error show">{{ session('error') }}</div>
            @endif

            @if(session('success'))
                <div class="alert alert-success show">{{ session('success') }}</div>
            @endif

            <form method="POST" action="{{ route('login') }}" id="loginForm">
                @csrf
                
                <div class="form-group">
                    <label for="loginUsername">Username or Email</label>
                    <input type="text" id="loginUsername" name="username" placeholder="Enter your username" required value="{{ old('username') }}">
                </div>

                <div class="form-group">
                    <label for="loginPassword">Password</label>
                    <input type="password" id="loginPassword" name="password" placeholder="Enter your password" required>
                </div>

                <div class="checkbox-group">
                    <input type="checkbox" id="remember" name="remember">
                    <label for="remember">Remember me</label>
                </div>

                <button type="submit" class="btn-submit">Login</button>
            </form>

            <div class="divider">
                <div class="divider-line"></div>
                <span class="divider-text">or continue with</span>
                <div class="divider-line"></div>
            </div>

            <div class="social-login">
                <button class="social-btn" onclick="window.location.href='{{ route('auth.google') }}'">
                    <svg width="18" height="18" viewBox="0 0 24 24">
                        <path fill="#4285F4" d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z"/>
                        <path fill="#34A853" d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z"/>
                        <path fill="#FBBC05" d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z"/>
                        <path fill="#EA4335" d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z"/>
                    </svg>
                    Google
                </button>
            </div>
            
            <!-- Or Register Section -->
            <div class="or-register-section">
                <p>Or</p>
                <button class="or-register-btn" onclick="showRegister()">Register</button>
            </div>
        </div>

        <!-- Register Card -->
        <div class="auth-card register" id="registerCard">
            <div class="logo-section">
                <img src="{{ asset('images/Logo.png') }}" alt="Patlat Alkuwait">
                <h1>Create Account</h1>
                <p>Join us today</p>
            </div>

            <form method="POST" action="{{ route('register') }}" id="registerForm">
                @csrf
                
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" id="username" name="username" placeholder="Choose a username" required value="{{ old('username') }}">
                    <span class="error-message" id="usernameError">@error('username'){{ $message }}@enderror</span>
                </div>

                <div class="form-group">
                    <label for="display_name">Display Name</label>
                    <input type="text" id="display_name" name="display_name" placeholder="Your display name" value="{{ old('display_name') }}">
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" placeholder="your@email.com" required value="{{ old('email') }}">
                    <span class="error-message" id="emailError">@error('email'){{ $message }}@enderror</span>
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" placeholder="Create a password" required>
                    <span class="error-message" id="passwordError">@error('password'){{ $message }}@enderror</span>
                </div>

                <div class="form-group">
                    <label for="password_confirmation">Confirm Password</label>
                    <input type="password" id="password_confirmation" name="password_confirmation" placeholder="Confirm your password" required>
                </div>

                <button type="submit" class="btn-submit">Create Account</button>
            </form>

            <div class="switch-section">
                <p>Already have an account?</p>
                <button class="switch-btn" onclick="showLogin()">Login here</button>
            </div>
        </div>
    </div>
</div>

<script>
    // Check URL parameter to determine which card to show first
    document.addEventListener('DOMContentLoaded', function() {
        const urlParams = new URLSearchParams(window.location.search);
        const show = urlParams.get('show');
        
        if (show === 'register') {
            showRegister();
        }

        // Real-time validation for password confirmation
        const passwordInput = document.getElementById('password');
        const confirmPasswordInput = document.getElementById('password_confirmation');

        if (confirmPasswordInput && passwordInput) {
            confirmPasswordInput.addEventListener('input', function() {
                const errorSpan = document.getElementById('passwordConfirmationError');
                if (passwordInput.value !== this.value && this.value !== '') {
                    if (errorSpan) {
                        errorSpan.textContent = 'Passwords do not match';
                        errorSpan.classList.add('show');
                        this.style.borderColor = '#dc3545';
                    }
                } else {
                    if (errorSpan) {
                        errorSpan.textContent = '';
                        errorSpan.classList.remove('show');
                        this.style.borderColor = '';
                    }
                }
            });
        }
    });

    // Show Login Card
    function showLogin() {
        const loginCard = document.getElementById('loginCard');
        const registerCard = document.getElementById('registerCard');

        registerCard.classList.remove('active');
        registerCard.classList.add('hidden');
        
        setTimeout(() => {
            loginCard.classList.remove('hidden');
        }, 100);

        const url = new URL(window.location);
        url.searchParams.delete('show');
        window.history.pushState({}, '', url);
    }

    // Show Register Card
    function showRegister() {
        const loginCard = document.getElementById('loginCard');
        const registerCard = document.getElementById('registerCard');

        loginCard.classList.add('hidden');
        
        setTimeout(() => {
            registerCard.classList.remove('hidden');
            registerCard.classList.add('active');
        }, 100);

        const url = new URL(window.location);
        url.searchParams.set('show', 'register');
        window.history.pushState({}, '', url);
    }
</script>

</body>
</html>