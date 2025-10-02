<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AnimeVerse - Your Gateway to Anime</title>
    <link rel="stylesheet" href="{{ asset('css/landing.css') }}">
</head>
<body>
    
    <!-- Animated Background -->
    <div class="bg-animation"></div>

    <!-- Navbar -->
    <nav id="navbar">
        <div class="nav-container">
            <div class="logo">AnimeVerse</div>
         <ul class="nav-links">
    <li><a href="#home">Home</a></li>
    <li><a href="#features">Features</a></li>
    <li><a href="#gallery">Gallery</a></li>
    <li><a href="#contact">Contact</a></li>

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

    <!-- Hero Section -->
    <section class="hero" id="home">
        <div class="hero-content">
            <h1>Welcome to AnimeVerse</h1>
            <p>Jelajahi dunia anime tanpa batas. Streaming, diskusi, dan komunitas terbaik untuk para penggemar anime.</p>
            <div class="cta-buttons">
                <a href="#" class="btn btn-primary">Mulai Sekarang</a>
                <a href="#" class="btn btn-secondary">Pelajari Lebih Lanjut</a>
            </div>
        </div>
        <div class="bg-animation">
    <div id="stars1"></div>
    <div id="stars2"></div>
    <div id="stars3"></div>
</div>
    </section>

    <!-- Features Section -->
<section class="features" id="features">
        <div class="container">
            <h2 class="section-title">Fitur Unggulan</h2>
            <div class="features-grid">
                <div class="feature-card">
                    <div class="feature-icon">🎬</div>
                    <h3>Streaming HD</h3>
                    <p>Nikmati anime favorit dalam kualitas HD tanpa buffering.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">💬</div>
                    <h3>Komunitas Aktif</h3>
                    <p>Bergabung dengan ribuan penggemar anime dari seluruh dunia.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">📱</div>
                    <h3>Multi Platform</h3>
                    <p>Akses dari mana saja, kapan saja di semua perangkat Anda.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">🔔</div>
                    <h3>Update Terbaru</h3>
                    <p>Dapatkan notifikasi episode terbaru dari anime favorit.</p>
                </div>

                {{-- KARTU BARU 1 --}}
                <div class="feature-card">
                    <div class="feature-icon">📖</div>
                    <h3>Database Lengkap</h3>
                    <p>Temukan info detail anime, mulai dari sinopsis hingga staf produksi.</p>
                </div>

                {{-- KARTU BARU 2 --}}
                <div class="feature-card">
                    <div class="feature-icon">📅</div>
                    <h3>Jadwal & Pelacak</h3>
                    <p>Jangan pernah ketinggalan episode baru dan lacak progres tontonan Anda.</p>
                </div>

            </div>
        </div>
    </section>

    <!-- Gallery Section -->
<section class="gallery" id="gallery">
    <div class="container">
        <h2 class="section-title">Pilih Genre Favoritmu</h2>
        <div class="gallery-grid" id="genre-grid">
    {{-- Melakukan perulangan untuk setiap genre yang dikirim dari controller --}}
    @foreach ($genres as $genre)
        <a href="{{ route('anime.genre', ['id' => $genre['id'], 'name' => $genre['name']]) }}" 
           class="gallery-item" 
           {{-- Mencetak URL gambar langsung ke style background --}}
           style="background-image: url('{{ $genre['image_url'] }}')">
            <div class="gallery-overlay">
                <h3>{{ $genre['name'] }}</h3>
                <p>{{ $genre['desc'] }}</p>
            </div>
        </a>
    @endforeach
</div>
    </div>
</section>

    <!-- CTA Section -->
    <section class="cta-section">
        <div class="container">
            <h2>Siap Memulai Petualangan?</h2>
            <p>Bergabunglah dengan jutaan penggemar anime di seluruh dunia</p>
            <a href="#" class="btn btn-primary">Daftar Gratis Sekarang</a>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer-content">
                <div class="footer-section">
                    <h3>AnimeVerse</h3>
                    <p>Platform streaming anime terbaik untuk Anda</p>
                </div>
                <div class="footer-section">
                    <h4>Quick Links</h4>
                    <ul>
                        <li><a href="#">Tentang Kami</a></li>
                        <li><a href="#">Kontak</a></li>
                        <li><a href="#">FAQ</a></li>
                    </ul>
                </div>
                <div class="footer-section">
                    <h4>Legal</h4>
                    <ul>
                        <li><a href="#">Kebijakan Privasi</a></li>
                        <li><a href="#">Syarat & Ketentuan</a></li>
                    </ul>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2025 AnimeVerse. All rights reserved.</p>
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

    </script>
    {{-- <script src="{{ asset('js/home.js') }}"></script> --}}
</body>
</html>