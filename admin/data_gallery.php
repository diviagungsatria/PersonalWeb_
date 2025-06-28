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
  <title>Kelola Gallery | FC Barcelona</title>
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
        <img src="https://upload.wikimedia.org/wikipedia/en/4/47/FC_Barcelona_%28crest%29.svg" alt="Barca"
          class="w-10 h-10">
        Halaman Admin
      </h1>
    </div>
  </header>

  <div class="flex max-w-7xl mx-auto mt-8 px-4">
    <!-- Sidebar -->
    <aside class="w-1/4 bg-white rounded-xl shadow-lg p-6 border-t-4 border-barcaRed">
      <h2 class="text-xl font-bold text-barcaBlue text-center mb-4">MENU</h2>
      <ul class="space-y-4 font-medium text-gray-700">
        <li><a href="beranda_admin.php" class="block hover:text-barcaBlue">🏠 Beranda</a></li>
        <li><a href="data_artikel.php" class="block hover:text-barcaBlue">📰 Kelola Artikel</a></li>
        <li><a href="data_gallery.php" class="block font-semibold text-barcaBlue">🖼️ Kelola Gallery</a></li>
        <li><a href="about.php" class="block hover:text-barcaBlue">ℹ️ About</a></li>
        <li>
          <a href="logout.php" onclick="return confirm('Apakah anda yakin ingin keluar?');"
            class="block text-barcaRed hover:underline font-medium">🚪 Logout</a>
        </li>
      </ul>
    </aside>

    <!-- Main Content -->
    <main class="w-3/4 bg-white rounded-xl shadow-lg p-6 ml-6">
      <div class="flex justify-between items-center mb-4">
        <h2 class="text-2xl font-bold text-barcaBlue">Daftar Gallery</h2>
        <a href="add_gallery.php"
          class="bg-barcaBlue text-white px-4 py-2 rounded hover:bg-barcaRed transition font-semibold">
          + Tambah Gambar
        </a>
      </div>

      <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
        <?php
        $sql = "SELECT * FROM tbl_gallery";
        $query = mysqli_query($db, $sql);
        while ($data = mysqli_fetch_array($query)) {
          echo "<div class='bg-gray-50 border rounded-xl shadow overflow-hidden'>";
          echo "<img src='../images/{$data['foto']}' class='w-full h-48 object-cover'>";
          echo "<div class='p-4'>";
          echo "<p class='font-semibold text-gray-800 mb-2'>" . htmlspecialchars($data['judul']) . "</p>";
          echo "<div class='flex justify-between text-sm'>";
          echo "<a href='edit_gallery.php?id_gallery={$data['id_gallery']}' class='text-barcaBlue hover:underline'>Edit</a>";
          echo "<a href='delete_gallery.php?id_gallery={$data['id_gallery']}' onclick='return confirm(\"Yakin ingin menghapus?\")' class='text-barcaRed hover:underline'>Hapus</a>";
          echo "</div>";
          echo "</div></div>";
        }
        ?>
      </div>
    </main>
  </div>

  <!-- Footer -->
  <footer class="bg-barcaBlue text-white text-center py-4 mt-10">
    &copy; <?php echo date('Y'); ?> | Created by Divi Agung Satria | Força Barça 💙❤️ "Més Que Un Club"
  </footer>
</body>

</html>