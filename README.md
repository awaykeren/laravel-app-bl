Laravel 9.12 - Panduan Instalasi dan Penggunaan di Localhost

## Persyaratan Sistem
Sebelum menjalankan proyek ini, pastikan sistem Anda telah menginstal:
- PHP 8.1 
- Composer (Dependency Manager untuk PHP)
- MySQL atau PostgreSQL (Database)

##1. Clone Repository
Clone repository ini dari GitHub ke dalam folder lokal Anda:
- git clone https://github.com/awaykeren/laravel-app-bl.git
- cd laravel-app-bl


## 2. Instal Dependensi
Jalankan perintah berikut untuk menginstal dependensi Laravel:
- composer install

## 3. Konfigurasi Environment
Buat file .env dengan menyalin contoh konfigurasi:
- cp .env.example .env
- Kemudian, buka .env dan atur konfigurasi database sesuai dengan sistem Anda:

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=nama_database
DB_USERNAME=root
DB_PASSWORD=

Note : database bisa diimport menggunakan phpmyadmin, nama file laravel_app.sql

## 4. Generate Application Key
Laravel membutuhkan application key untuk enkripsi. Jalankan:
- php artisan key:generate

## 6. Menjalankan Server Laravel
Untuk menjalankan proyek di localhost, gunakan perintah berikut:
- php artisan serve
- Akses aplikasi melalui browser: http://127.0.0.1:8000

## 7. Troubleshooting

Jika terjadi error, coba langkah berikut:
- Pastikan PHP, Composer sudah terinstal.
- Jalankan composer dump-autoload jika ada error class tidak ditemukan.
- Gunakan php artisan cache:clear dan php artisan config:clear jika ada error cache.

## 8. Penutup
Sekarang aplikasi Laravel 9.12 Anda siap digunakan di localhost! 🚀
Jika mengalami kendala, silakan periksa dokumentasi Laravel atau buka issue di repository ini. Happy coding! 😃