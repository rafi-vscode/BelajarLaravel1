Proyek Tengah Semester Pemrograman Web II (Laravel 12)

Nama Proyek: Rapi-App Content Management System (CMS)

Deskripsi

Aplikasi web ini adalah Sistem Manajemen Konten (CMS) yang dibangun menggunakan Laravel 12. Proyek ini berfokus pada implementasi arsitektur MVC, autentikasi berbasis peran (Admin/User), dan pengelolaan data terstruktur dengan relasi, validasi, dan fitur utama lainnya.

Fitur yang Sudah Terimplementasi:

Otorisasi Kustom: Memisahkan akses Admin (/admin) dan User biasa (/dashboard).

CRUD Lengkap: Anime, Episode (Video), dan User.

Relasi Data: One-to-Many (Anime ke Episode) dan Many-to-Many (Anime ke Genre).

Data Management: Search, Pagination, dan Upload File (Poster & Video).

UI/UX: Layout Admin terpisah dengan sidebar yang profesional.

Kebutuhan Sistem

PHP: Versi 8.2 atau lebih tinggi (Direkomendasikan PHP 8.3).

Composer: Manajer Dependensi PHP.

Database: MySQL/MariaDB.

Node.js & NPM: Untuk kompilasi aset (Tailwind CSS/Vite).

Cara Instalasi (Langkah Cepat)

Ikuti langkah-langkah di bawah ini di terminal Anda:

Clone Repository:

git clone [LINK_REPO_GIT_ANDA] rapi-app
cd rapi-app


Instal Dependensi:

composer install
npm install
npm run dev


Konfigurasi Environment:

Salin file environment: cp .env.example .env

Buat APP_KEY: php artisan key:generate

PENTING: Edit file .env dan sesuaikan detail koneksi database Anda (DB_DATABASE, DB_USERNAME, DB_PASSWORD).

Setup Database (Migrasi & Seeding Data Awal):
Perintah ini akan membuat semua tabel dan mengisi data awal (user admin dan genre).

# Ini akan menghapus semua tabel dan membuat ulang
php artisan migrate:fresh --seed

# Membuat symbolic link agar gambar dan video bisa diakses web
php artisan storage:link


Jalankan Aplikasi:

php artisan serve


Aplikasi dapat diakses di http://127.0.0.1:8000.

Akun Demo & Pengujian

Setelah menjalankan migrate:fresh --seed, Anda perlu membuat akun baru melalui halaman Register dan mengatur role-nya secara manual di database.

Peran

Email

Password

Akses URL

Admin

[Email Pilihan Anda]

[Password Pilihan Anda]

/admin/dashboard

User Biasa

[Email Pilihan Lain]

[Password Pilihan Lain]

/dashboard

Cara Mengubah Role ke Admin:

Setelah register, buka phpMyAdmin/alat database Anda.

Cari tabel users.

Ubah kolom role untuk akun Anda menjadi admin.

Struktur Utama Folder (Fokus Proyek)

rapi-app/
├── app/
│   ├── Http/
│   │   ├── Controllers/
│   │   │   └── Admin/ (AnimeController, EpisodeController, UserController)
│   │   └── Middleware/
│   │       └── AdminMiddleware.php (Otorisasi)
│   └── Models/
│       ├── Anime.php, Episode.php, Genre.php (Relasi & Eloquent)
│       └── User.php (Kolom 'role' ditambahkan)
├── bootstrap/
│   └── app.php (Tempat pendaftaran Middleware alias di Laravel 12)
├── database/
│   ├── migrations/ (Blueprint Tabel)
│   └── seeders/
│       └── GenreSeeder.php (Data awal genre)
└── resources/
    └── views/
        └── layouts/
            └── admin.blade.php (Layout Admin Terpisah)
