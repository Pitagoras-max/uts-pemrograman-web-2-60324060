# Sistem Manajemen Kategori Buku (UTS)

## Informasi Mahasiswa
* **Nama**: M. Risqi Agung Pratama
* **NIM**: 60324060
* **Program Studi**: Informatika

## Deskripsi Aplikasi
Aplikasi berbasis web sederhana untuk mengelola Kategori Buku perpustakaan. Aplikasi ini dilengkapi dengan fitur CRUD (Create, Read, Update, Delete) yang terintegrasi dengan database MySQL menggunakan PHP Native.

## Cara Instalasi dan Menjalankan Aplikasi
1. Clone atau download repository ini ke dalam folder `www` (Laragon) atau `htdocs` (XAMPP).
2. Pastikan nama foldernya adalah `uts_perpustakaan_60324060`.
3. Buka phpMyAdmin, buat database baru dengan nama `uts_perpustakaan_60324060`.
4. Import file `database_backup.sql` yang ada di repository ini ke dalam database tersebut.
5. Jalankan Apache dan MySQL.
6. Buka browser dan akses: `http://localhost/uts_perpustakaan_60324060/`

## Struktur Folder
* `config/` - Berisi konfigurasi koneksi database (`database.php`)
* `index.php` - Halaman utama (Read data)
* `create.php` - Halaman tambah data
* `edit.php` - Halaman ubah data
* `delete.php` - Proses hapus data
* `database_backup.sql` - File export database
* `README.md` - Dokumentasi aplikasi

## Link Repository GitHub
https://github.com/[username-github-kamu]/uts-pemrograman-web-2-60324060