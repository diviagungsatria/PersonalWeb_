<?php
include('../koneksi.php');
session_start();
if (!isset($_SESSION['username'])) {
  header('location:login.php');
  exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Tambah Gambar | FC Barcelona</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            barcaRed: '#A50044',
            barcaBlue: '#004D98',
            barcaGold: '#FDB913',
          },
        },
      },
    };
  </script>
</head>

<body class="bg-gradient-to-br from-barcaBlue to-barcaRed min-h-screen font-sans">
  <!-- Header -->
  <header class="bg-barcaBlue text-white py-6 shadow-md">
    <div class="max-w-7xl mx-auto px-4 flex items-center justify-between">
      <h1 class="text-3xl font-bold flex items-center gap-2">
        <img src="https://upload.wikimedia.org/wikipedia/en/4/47/FC_Barcelona_%28crest%29.svg" alt="Barca" class="w-10 h-10">
        Tambah Gambar ke Gallery
      </h1>
    </div>
  </header>

  <div class="max-w-7xl mx-auto px-4 flex mt-10 gap-6">
    <!-- Sidebar -->
    <aside class="w-1/4 bg-white shadow-md rounded-xl p-6 border-t-4 border-barcaRed">
      <h2 class="text-xl font-bold text-barcaBlue mb-6 text-center">MENU ADMIN</h2>
      <ul class="space-y-3 text-gray-700 font-medium">
        <li><a href="beranda_admin.php" class="block hover:text-barcaBlue">🏠 Beranda</a></li>
        <li><a href="data_artikel.php" class="block hover:text-barcaBlue">📝 Kelola Artikel</a></li>
        <li><a href="data_gallery.php" class="block font-semibold text-barcaBlue">🖼️ Kelola Gallery</a></li>
        <li><a href="about.php" class="block hover:text-barcaBlue">ℹ️ About</a></li>
        <li>
          <a href="logout.php" onclick="return confirm('Apakah anda yakin ingin keluar?');"
            class="block text-barcaRed hover:underline font-medium">🚪 Logout</a>
        </li>
      </ul>
    </aside>

    <!-- Main Content -->
    <main class="w-3/4 bg-white shadow-md rounded-xl p-8">
      <h2 class="text-2xl font-bold text-gray-800 mb-6">Form Tambah Gambar</h2>
      <form action="proses_add_gallery.php" method="post" enctype="multipart/form-data" class="space-y-6">
        <div>
          <label for="judul" class="block text-sm font-medium text-gray-700 mb-2">Judul Gambar</label>
          <input type="text" id="judul" name="judul" required
            class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-barcaBlue focus:border-barcaBlue transition">
        </div>

        <div>
          <label for="foto" class="block text-sm font-medium text-gray-700 mb-2">Pilih Gambar</label>
          <input type="file" id="foto" name="foto" accept="image/*" required
            class="block w-full text-sm text-gray-600 file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:font-semibold file:bg-barcaGold file:text-barcaBlue hover:file:bg-yellow-400 transition-all duration-150">
        </div>

        <div class="flex justify-end gap-4">
          <button type="submit"
            class="bg-barcaBlue text-white px-5 py-2 rounded-lg hover:bg-barcaRed transition-all duration-150 shadow font-semibold">
            💾 Simpan
          </button>
          <a href="data_gallery.php"
            class="bg-gray-300 text-gray-800 px-5 py-2 rounded-lg hover:bg-gray-400 transition shadow">
            ❌ Batal
          </a>
        </div>
      </form>
    </main>
  </div>

  <!-- Footer -->
  <footer class="bg-barcaBlue text-white text-center py-4 mt-12">
    &copy; <?php echo date('Y'); ?> | Created by Divi Agung Satria | Força Barça 💙❤️ "Més Que Un Club"
  </footer>
</body>

</html>
