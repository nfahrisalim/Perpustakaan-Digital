# README Proyek Perpustakaan Digital

## Deskripsi Proyek
Perpustakaan Digital adalah sebuah aplikasi berbasis web yang memungkinkan pengguna untuk mengelola buku digital, membaca, memberikan ulasan, serta mendukung fitur sumbangan buku digital. Proyek ini dibangun menggunakan framework Laravel 11 dengan fitur autentikasi dan berbagai role pengguna seperti Admin dan Mahasiswa.

## Fitur Utama
- **Manajemen Kategori:** CRUD kategori buku.
- **Manajemen Buku:** CRUD buku digital, membaca buku, serta verifikasi buku.
- **Sistem Ulasan:** Pengguna dapat memberikan ulasan pada buku.
- **Pencarian Buku:** Fitur pencarian dengan autocomplete.
- **Manajemen Anggota:** CRUD data anggota dengan fitur ubah profil dan password.
- **Sistem Chat:** Fitur komunikasi antar pengguna.
- **Sistem Sumbangan:** Pengguna dapat menyumbangkan buku digital.
- **Autentikasi dan Role:** Admin memiliki akses penuh, sedangkan mahasiswa hanya dapat melihat data buku.

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

## Masalah yang Sempat Ditemui
1. **Foreign Key Constraint:** Error saat melakukan seeding buku karena foreign key `user_id`.
   - Solusi: Pastikan tabel `users` memiliki data yang sesuai sebelum seeding buku.
2. **Target Class Not Found:** Error pada Laravel karena penggunaan controller tanpa FQCN.
   - Solusi: Menggunakan namespace lengkap pada file `web.php`, seperti:
     ```php
     use App\Http\Controllers\DashboardController;
     ```
3. **Cache Route:** Masalah rute tidak terdeteksi setelah perubahan.
   - Solusi: Membersihkan cache dengan:
     ```bash
     php artisan route:clear
     php artisan config:clear
     php artisan cache:clear
     composer dump-autoload
     ```

## Penggunaan
### Login
Akses aplikasi melalui halaman login dengan menggunakan akun yang telah disediakan atau dibuat melalui Seeder.

### Manajemen Buku
Admin dapat menambahkan, mengedit, memverifikasi, dan menghapus buku. Mahasiswa hanya dapat melihat dan membaca buku yang tersedia.

### Pencarian Buku
Pengguna dapat mencari buku dengan fitur autocomplete di kolom pencarian.

### Sumbangan Buku
Pengguna dapat menyumbangkan buku digital melalui fitur sumbangan.



