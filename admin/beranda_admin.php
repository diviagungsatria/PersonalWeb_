<?php
session_start();
if (!isset($_SESSION['username'])) {
  header('location:login.php');
  exit;
}
require_once("../koneksi.php");

$username = $_SESSION['username'];
$sql = "SELECT * FROM tbl_user WHERE username = '$username'";
$query = mysqli_query($db, $sql);
$hasil = mysqli_fetch_array($query);

$jumlah_artikel = mysqli_num_rows(mysqli_query($db, "SELECT id_artikel FROM tbl_artikel"));
$jumlah_gallery = mysqli_num_rows(mysqli_query($db, "SELECT id_gallery FROM tbl_gallery"));
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Dashboard Admin | FC Barcelona</title>
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
        }
      }
    };
  </script>
</head>

<body class="bg-gradient-to-br from-barcaBlue to-barcaRed min-h-screen font-sans">
  <!-- Header -->
  <header class="bg-barcaBlue text-white py-6 shadow-md">
    <div class="max-w-7xl mx-auto px-4 flex items-center justify-between">
      <h1 class="text-3xl font-bold flex items-center gap-2">
        <img src="https://upload.wikimedia.org/wikipedia/en/4/47/FC_Barcelona_%28crest%29.svg" alt="Barca" class="w-10 h-10">
        Halaman Admin
      </h1>
    </div>
  </header>

  <!-- Layout -->
  <div class="flex flex-col lg:flex-row max-w-7xl mx-auto mt-8 px-4 gap-6">
    
    <!-- Sidebar -->
    <aside class="lg:w-1/4 bg-white shadow-lg rounded-xl p-6 border-t-4 border-barcaRed">
      <h2 class="text-xl font-bold text-barcaBlue text-center mb-4">MENU</h2>
      <ul class="space-y-4 font-medium text-gray-700">
        <li><a href="beranda_admin.php" class="block hover:text-barcaBlue">🏠 Beranda</a></li>
        <li><a href="data_artikel.php" class="block hover:text-barcaBlue">📰 Kelola Artikel</a></li>
        <li><a href="data_gallery.php" class="block hover:text-barcaBlue">🖼️ Kelola Gallery</a></li>
        <li><a href="about.php" class="block hover:text-barcaBlue">ℹ️ Tentang saya</a></li>
        <li><a href="logout.php" onclick="return confirm('Apakah anda yakin ingin keluar?');"
            class="block text-barcaRed hover:underline">🚪 Logout</a></li>
      </ul>
    </aside>

    <!-- Main Content -->
    <main class="lg:w-3/4 bg-white rounded-xl shadow-lg p-6">
      <div class="text-lg text-gray-800 mb-4">
        Halo, <strong class="text-barcaBlue"><?php echo htmlspecialchars($_SESSION['username']); ?></strong>! 🔵🔴
      </div>
      <p class="text-sm text-gray-500"></p>

      <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-6">
        <div class="bg-barcaBlue text-white rounded-lg shadow-lg p-6 text-center border-t-4 border-barcaGold">
          <h3 class="text-xl font-semibold mb-2">Jumlah Artikel</h3>
          <p class="text-4xl font-bold"><?php echo $jumlah_artikel; ?></p>
        </div>
        <div class="bg-barcaRed text-white rounded-lg shadow-lg p-6 text-center border-t-4 border-barcaGold">
          <h3 class="text-xl font-semibold mb-2">Jumlah Gallery</h3>
          <p class="text-4xl font-bold"><?php echo $jumlah_gallery; ?></p>
        </div>
      </div>
    </main>
  </div>

  <!-- Footer -->
  <footer class="bg-barcaBlue text-white text-center py-4 mt-10">
    &copy; <?php echo date('Y'); ?> | Created by Divi Agung Satria | Força Barça 💙❤️ "Més Que Un Club"
  </footer>
</body>

</html>