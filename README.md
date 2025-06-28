# PersonalWeb_
Personal web Divi dibuat dengan tailwindcss CDN 4.0
🌐 Personal Web | Divi Agung Satria
Berbagi cerita, ide, dan inspirasi melalui tulisan dan galeri pribadi.
Dibuat sebagai proyek pembelajaran menggunakan PHP, Tailwind CSS, dan MySQL.

📌 Deskripsi Proyek
Website ini adalah personal web milik Divi Agung Satria yang menampilkan artikel pribadi, galeri foto, dan fitur admin untuk mengelola konten. Web ini bertujuan menjadi ruang ekspresi sekaligus latihan praktis dalam membuat web dinamis dan interaktif.

✨ Fitur-Fitur Aplikasi
📝 Halaman Publik
Beranda / Artikel Terbaru
Menampilkan daftar artikel yang ditulis oleh pemilik web.

Galeri Foto
Galeri publik berisi kumpulan momen atau karya visual.

About (Tentang Saya)
Menampilkan profil dan penjelasan singkat mengenai pemilik website.

Login Admin
Halaman untuk masuk ke sistem admin.

🛠 Halaman Admin
Dashboard Admin
Menampilkan statistik jumlah artikel, galeri, dan tombol navigasi.

Kelola Artikel
Tambah, edit, dan hapus artikel.

Kelola Galeri
Upload, edit, dan hapus gambar galeri.

Kelola About
Edit konten halaman “Tentang Saya”.

Logout
Keluar dari sesi login admin.

📷 Screenshot Tampilan
1. Beranda
[beranda]https://github.com/diviagungsatria/PersonalWeb_/blob/a2c33ac87baa2061264cd452252586c3ae5eaac3/ss/Beranda.png

2. Galeri Foto


3. Tentang Saya


4. Form Login Admin


5. Dashboard Admin


6. Tambah Artikel Baru


7. Kelola Halaman About


8. Kelola Galeri


🧰 Teknologi yang Digunakan
Frontend: HTML5, Tailwind CSS v4.0

Backend: PHP Native

Database: MySQL

Web Server: XAMPP (localhost)

🚀 Cara Menjalankan Aplikasi
Clone atau download repositori ini ke direktori htdocs XAMPP.

Jalankan XAMPP, aktifkan Apache dan MySQL.

Buka phpMyAdmin, lalu import file db_divi_d1a240038.sql.

Akses web melalui browser:
http://localhost/personal_web_divi_d1a240038/

Login admin di:
http://localhost/personal_web_div_d1a240038i/admin/login.php

📁 Struktur Folder
pgsql
Salin
Edit
├── admin/
│   ├── add_about.php
│   ├── add_artikel.php
│   ├── add_gallery.php
│   ├── data_artikel.php
│   ├── data_gallery.php
│   ├── edit_about.php
│   ├── edit_artikel.php
│   ├── edit_gallery.php
│   ├── delete_artikel.php
│   ├── delete_gallery.php
│   ├── proses_add_about.php
│   ├── proses_add_artikel.php
│   ├── proses_add_gallery.php
│   ├── login.php
│   └── logout.php
│
├── images/
│   └── (gambar galeri)
│
├── mp3/
│   └── (file audio mp3)
│
├── ss/
│   └── about.php (salinan halaman)
│
├── index.php
├── about.php
├── gallery.php
├── koneksi.php
