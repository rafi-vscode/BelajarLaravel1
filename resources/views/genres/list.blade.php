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

        <button class="hamburger-menu" aria-label="Toggle navigation" aria-expanded="false">
            <span class="line"></span>
            <span class="line"></span>
            <span class="line"></span>
        </button>

        <ul class="nav-links">
            <li><a href="#home">Home</a></li>
            <li><a href="#features">Features</a></li>
            <li><a href="#gallery">Gallery</a></li>
            <li><a href="#contact">Contact</a></li>

            @guest
                <li><a href="{{ route('login') }}" class="nav-button login-btn">Login</a></li>
                <li><a href="{{ route('register') }}" class="nav-button register-btn">Register</a></li>
            @endguest

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
                <p>&copy; {{ date('Y') }} AnimeVerse. RafiCompany.</p>
            </div>
        </div>
    </footer>

       <script>
        // Navbar scroll effect
        window.addEventListener('scroll', function() {
            const navbar = document.getElementById('navbar');
            if (window.scrollY > 50) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        });

        // Smooth scroll
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

            // KODE BARU UNTUK HAMBURGER MENU
        const hamburger = document.querySelector('.hamburger-menu');
        const navLinks = document.querySelector('.nav-links');
        const links = document.querySelectorAll('.nav-links li a'); // Ambil semua link

        // Toggle menu saat hamburger di-klik
        hamburger.addEventListener('click', () => {
            navLinks.classList.toggle('active');
            hamburger.classList.toggle('active');

            // Update atribut ARIA untuk aksesibilitas
            const isExpanded = navLinks.classList.contains('active');
            hamburger.setAttribute('aria-expanded', isExpanded);
        });

        // Tutup menu saat salah satu link di-klik (berguna untuk Single Page)
        links.forEach(link => {
            link.addEventListener('click', () => {
                if (navLinks.classList.contains('active')) {
                    navLinks.classList.remove('active');
                    hamburger.classList.remove('active');
                    hamburger.setAttribute('aria-expanded', 'false');
                }
            });
        });

    </script>

    <script src="{{ asset('js/list.js') }}"></script>
</body>
</html>