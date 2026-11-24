# Aplikasi Inventaris Barang

Aplikasi Inventaris Barang merupakan aplikasi berbasis web yang dibuat menggunakan Laravel. Aplikasi ini digunakan untuk mengelola data inventaris barang agar proses pencatatan dan pengelolaan barang menjadi lebih mudah.

Project ini dibuat sebagai bagian dari pengerjaan Ujian Tengah Semester (UTS) mata kuliah Pemrograman Berorientasi Objek.

## Teknologi yang Digunakan

- PHP
- Laravel
- HTML
- CSS
- Blade Template
- Laragon
- Visual Studio Code

## Fitur Aplikasi

Aplikasi ini memiliki beberapa fitur utama:

1. **Create** – Menambahkan data barang baru.
2. **Read** – Menampilkan daftar barang yang tersedia.
3. **Detail** – Melihat informasi lengkap suatu barang.
4. **Update** – Mengubah informasi barang.
5. **Delete** – Menghapus data barang.

## Informasi Data Barang

Setiap data barang memiliki beberapa informasi:

- Kode Barang
- Nama Barang
- Kategori
- Lokasi
- Jumlah
- Kondisi


## Cara Menjalankan Project

1. Pastikan Laragon dan PHP sudah terinstal.
2. Clone repository:

```bash
git clone https://github.com/AndraTheLast06/UTS-PBO.git
```

3. Masuk ke folder project:

```bash
cd UTS-PBO
```

4. Install dependency Laravel:

```bash
composer install
```

5. Salin file konfigurasi:

```bash
copy .env.example .env
```

6. Generate application key:

```bash
php artisan key:generate
```

7. Bersihkan konfigurasi Laravel:

```bash
php artisan optimize:clear
```

8. Jalankan aplikasi:

```bash
php artisan serve
```

9. Buka browser:

```text
http://127.0.0.1:8000/example
```

## Pengujian

Pengujian dilakukan secara langsung melalui browser dengan mencoba seluruh fungsi CRUD, yaitu menambahkan, melihat, mengubah, dan menghapus data barang.

## Repository

GitHub: https://github.com/AndraTheLast06/UTS-PBO

---

**Project UTS Pemrograman Berorientasi Objek**