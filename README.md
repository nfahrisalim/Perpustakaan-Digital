# README Proyek Perpustakaan Digital

## Deskripsi Proyek
Perpustakaan Digital adalah sebuah aplikasi berbasis web yang memungkinkan pengguna untuk mengelola buku digital, membaca, memberikan ulasan, serta mendukung fitur sumbangan buku digital. Proyek ini dibangun menggunakan framework Laravel 11 dengan fitur autentikasi dan berbagai role pengguna seperti Admin dan Mahasiswa.

## Fitur Utama
- **Manajemen Kategori** 
- **Manajemen Buku** 
- **Sistem Ulasan** 
- **Pencarian Buku** 
- **Manajemen Anggota** 
- **Sistem Chat** 
- **Sistem Sumbangan** 
- **Autentikasi dan Role** 

## Teknologi yang Digunakan
- **Backend:** Laravel 11
- **Frontend:** Blade Template
- **Database:** MySQL
- **Autentikasi:** Laravel Breeze

## Struktur Folder
```
├── app
│   ├── Http
│   │   └── Controllers
├── database
│   └── seeders
├── routes
│   └── web.php
└── resources
    └── views
```

## Instalasi
1. Clone repositori ini:
   ```bash
   git clone <url-repo>
   ```
2. Masuk ke direktori proyek:
   ```bash
   cd Library
   ```
3. Install dependencies:
   ```bash
   composer install
   npm install
   npm run dev
   ```
4. Salin file `.env.example` menjadi `.env` dan konfigurasi sesuai kebutuhan.
5. Generate application key:
   ```bash
   php artisan key:generate
   ```
6. Migrasi dan seeding database:
   ```bash
   php artisan migrate --seed
   ```
7. Jalankan server lokal:
   ```bash
   php artisan serve
   ```

## Rute Utama
| Rute                  | Method | Deskripsi                     |
|-----------------------|--------|-------------------------------|
| `/dashboard`          | GET    | Dashboard utama              |
| `/kategory`           | GET    | Menampilkan kategori         |
| `/book`               | GET    | Daftar buku                  |
| `/book/add`           | GET    | Form tambah buku             |
| `/anggota`            | GET    | Daftar anggota               |
| `/sumbang`            | GET    | Form sumbangan buku          |
| `/search`             | GET    | Pencarian buku               |

## Seeder yang Digunakan
- **RolesTableSeeder:** Mengisi data role.
- **UsersTableSeeder:** Mengisi data pengguna.
- **CategoryTableSeeder:** Mengisi data kategori buku.
- **BookTableSeeder:** Mengisi data buku digital.

## Penggunaan
### Login
Akses aplikasi melalui halaman login dengan menggunakan akun yang telah disediakan atau dibuat melalui Seeder.

### Manajemen Buku
Admin dapat menambahkan, mengedit, memverifikasi, dan menghapus buku. Mahasiswa hanya dapat melihat dan membaca buku yang tersedia.

### Pencarian Buku
Pengguna dapat mencari buku dengan fitur autocomplete di kolom pencarian.

### Sumbangan Buku
Pengguna dapat menyumbangkan buku digital melalui fitur sumbangan.



