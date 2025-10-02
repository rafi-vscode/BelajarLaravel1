<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Anime {{ $genreName }} - AnimeVerse</title>
    <link rel="stylesheet" href="{{ asset('css/landing.css') }}">
</head>
<body>
    
    <nav id="navbar">
        <div class="nav-container">
            <div class="logo">AnimeVerse</div>
            <ul class="nav-links">
                <li><a href="{{ route('landing') }}#home">Home</a></li>
                <li><a href="{{ route('landing') }}#features">Features</a></li>
                <li><a href="{{ route('landing') }}#gallery">Gallery</a></li>
                <li><a href="{{ route('landing') }}#contact">Contact</a></li>

                @guest
                    <li><a href="{{ route('login') }}" class="nav-button login-btn">Login</a></li>
                    <li><a href="{{ route('register') }}" class="nav-button register-btn">Register</a></li>
                @endguest

                @auth
                    <li><a href="{{ url('/dashboard') }}" class="nav-button dashboard-btn">Dashboard</a></li>
                @endauth
            </ul>
        </div>
    </nav>

    {{-- Data genre dari Controller di-passing ke tag <main> untuk dibaca oleh JavaScript --}}
    <main data-genre-id="{{ $genreId }}" data-genre-name="{{ $genreName }}">
        <div class="container">
            
            {{-- PERUBAHAN UTAMA: Tombol dan Judul dibungkus dalam satu div --}}
            <div class="page-header">
                <a href="{{ route('landing') }}#gallery" class="back-button">&larr; Kembali ke Pilihan Genre</a>
                <h2 id="list-title" class="section-title">Anime Genre: {{ $genreName }}</h2>
            </div>
            
            {{-- Container ini akan diisi oleh list.js --}}
            <div id="anime-list-container">
                <p style="text-align: center; font-size: 1.2rem; color: #ccc;">Sedang memuat daftar anime, harap tunggu...</p>
            </div>
        </div>
    </main>

    <footer>
        <div class="container">
            <div class="footer-bottom">
                <p>&copy; {{ date('Y') }} AnimeVerse. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script src="{{ asset('js/list.js') }}"></script>
</body>
</html>