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
https://github.com/diviagungsatria/PersonalWeb_/blob/f257c29a8f194dd218f39e959ea34e5b99c34395/ss/Beranda.png

2. Galeri Foto
https://github.com/diviagungsatria/PersonalWeb_/blob/c2a96c2cc1c8becfcd46a6f175739f95a761a6c1/ss/Galeri.png

3. Tentang Saya
https://github.com/diviagungsatria/PersonalWeb_/blob/c2a96c2cc1c8becfcd46a6f175739f95a761a6c1/ss/About.png

4. Form Login Admin
https://github.com/diviagungsatria/PersonalWeb_/blob/c2a96c2cc1c8becfcd46a6f175739f95a761a6c1/ss/Login.png

5. Dashboard Admin
https://github.com/diviagungsatria/PersonalWeb_/blob/c2a96c2cc1c8becfcd46a6f175739f95a761a6c1/ss/Dasboard.png

6. Tambah Artikel Baru
https://github.com/diviagungsatria/PersonalWeb_/blob/c2a96c2cc1c8becfcd46a6f175739f95a761a6c1/ss/Tambah%20Artikel.png

7. Kelola Halaman About
https://github.com/diviagungsatria/PersonalWeb_/blob/c2a96c2cc1c8becfcd46a6f175739f95a761a6c1/ss/Kelola%20About.png

8. Kelola Galeri
https://github.com/diviagungsatria/PersonalWeb_/blob/c2a96c2cc1c8becfcd46a6f175739f95a761a6c1/ss/Tamabah%20Galeri.png

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
http://localhost/personal_web_div_d1a240038/admin/login.php

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
