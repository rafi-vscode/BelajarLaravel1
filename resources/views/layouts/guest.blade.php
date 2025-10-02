<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        
        <!-- Custom Anime Dark Theme CSS -->
        <style>
            * {
                margin: 0;
                padding: 0;
                box-sizing: border-box;
            }

            body {
                font-family: 'Figtree', sans-serif;
                background: #0a0a0a;
                color: #fff;
                overflow-x: hidden;
            }

            /* Animated Background */
            .bg-animation {
                position: fixed;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                z-index: -1;
                background: linear-gradient(135deg, #0a0a0a 0%, #1a0a2e 50%, #0a0a0a 100%);
                    /* Memanggil file SVG sebagai gambar latar belakang */
                background-image: url('/images/animated-lines-bg.svg');
    
            }
    
            .bg-animation::before {
                content: '';
                position: absolute;
                width: 200%;
                height: 200%;
                background: radial-gradient(circle, rgba(138, 43, 226, 0.1) 1px, transparent 1px);
                background-size: 50px 50px;
                animation: bgScroll 20s linear infinite;
            }

            @keyframes bgScroll {
                0% { transform: translate(0, 0); }
                100% { transform: translate(50px, 50px); }
            }

            .auth-container {
                min-height: 100vh;
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                padding: 1.5rem;
                position: relative;
            }

            /* Logo Container */
            .logo-container {
                margin-bottom: 2rem;
            }

            .logo-container a {
                display: inline-block;
                transition: transform 0.3s ease;
            }

            .logo-container a:hover {
                transform: scale(1.1);
            }

            .app-logo {
    width: 20rem;
    height: 5rem;
    filter: drop-shadow(0 0 20px rgba(138, 43, 226, 0.6));
}
            /* Auth Card */
            .auth-card {
                width: 100%;
                max-width: 28rem;
                padding: 2.5rem;
                background: rgba(26, 10, 46, 0.6);
                backdrop-filter: blur(20px);
                border: 1px solid rgba(138, 43, 226, 0.3);
                border-radius: 20px;
                box-shadow: 0 15px 50px rgba(138, 43, 226, 0.3);
                position: relative;
                overflow: hidden;
            }

            .auth-card::before {
                content: '';
                position: absolute;
                top: -50%;
                left: -50%;
                width: 200%;
                height: 200%;
                background: radial-gradient(circle, rgba(138, 43, 226, 0.1) 0%, transparent 70%);
                animation: rotate 10s linear infinite;
                pointer-events: none;
            }

            @keyframes rotate {
                0% { transform: rotate(0deg); }
                100% { transform: rotate(360deg); }
            }

            .auth-card-content {
                position: relative;
                z-index: 1;
            }

            /* Floating Particles */
            .floating-particles {
                position: absolute;
                width: 100%;
                height: 100%;
                pointer-events: none;
                overflow: hidden;
            }

            .particle {
                position: absolute;
                width: 4px;
                height: 4px;
                background: linear-gradient(135deg, #8a2be2, #ff1493);
                border-radius: 50%;
                opacity: 0.6;
                animation: float-particle 15s linear infinite;
            }

            .particle:nth-child(1) { left: 10%; animation-delay: 0s; }
            .particle:nth-child(2) { left: 30%; animation-delay: 2s; }
            .particle:nth-child(3) { left: 50%; animation-delay: 4s; }
            .particle:nth-child(4) { left: 70%; animation-delay: 6s; }
            .particle:nth-child(5) { left: 90%; animation-delay: 8s; }

            @keyframes float-particle {
                0% {
                    transform: translateY(100vh) scale(0);
                    opacity: 0;
                }
                10% {
                    opacity: 0.6;
                }
                90% {
                    opacity: 0.6;
                }
                100% {
                    transform: translateY(-100vh) scale(1);
                    opacity: 0;
                }
            }

            /* Responsive Design */
            @media (max-width: 640px) {
                .auth-card {
                    padding: 1.5rem;
                }
            }
        </style>
    </head>
    <body>
        <!-- Animated Background -->
        <div class="bg-animation"></div>

        <!-- Floating Particles -->
        <div class="floating-particles">
            <div class="particle"></div>
            <div class="particle"></div>
            <div class="particle"></div>
            <div class="particle"></div>
            <div class="particle"></div>
        </div>

        <!-- Auth Container -->
        <div class="auth-container">
            <!-- Logo -->
            <div class="logo-container">
                <a href="/">
                    <x-application-logo class="app-logo" />
                </a>
            </div>

            <!-- Auth Card -->
            <div class="auth-card">
                <div class="auth-card-content">
                    {{ $slot }}
                </div>
            </div>
        </div>
    </body>
</html>