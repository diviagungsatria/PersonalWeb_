<?php include "koneksi.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <title>Galeri | Divi Agung Satria</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    .fade-in {
      animation: fadeIn 0.8s ease-out;
    }

    @keyframes fadeIn {
      from {
        opacity: 0;
        transform: translateY(20px);
      }

      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    .hover-zoom:hover {
      transform: scale(1.03);
      transition: transform 0.3s ease-in-out;
    }

    body {
      background-color: #0a0a0a;
      color: #f1f1f1;
    }

    .gold {
      color: #FFD700;
    }

    .gold-bg {
      background-color: #FFD700;
      color: #0a0a0a;
    }

    .gold-hover:hover {
      background-color: #e6c200;
    }

    .hover-gold:hover {
      color: #FFD700;
    }
  </style>
</head>

<body class="font-sans leading-relaxed">

  <!-- Header -->
  <header class="text-center py-8 bg-black fade-in shadow-md">
    <h1 class="text-4xl font-extrabold gold tracking-wide">Galeri Foto</h1>
    <p class="text-gray-400 mt-2 text-sm">by Divi Agung Satria</p>
  </header>

  <!-- Navigation -->
  <nav class="bg-zinc-900 py-3 shadow-md">
    <ul class="flex justify-center gap-10 text-lg font-medium text-white">
      <li><a href="index.php" class="hover-gold transition">Artikel</a></li>
      <li><a href="gallery.php" class="gold border-b-2 border-yellow-400 pb-1">Galeri</a></li>
      <li><a href="about.php" class="hover-gold transition">About</a></li>
      <li><a href="admin/login.php" class="hover-gold transition">Login</a></li>
    </ul>
  </nav>

  <!-- Gallery Content -->
  <main class="max-w-6xl mx-auto px-6 py-12 fade-in">
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
      <?php
      $sql = "SELECT * FROM tbl_gallery ORDER BY id_gallery DESC";
      $query = mysqli_query($db, $sql);
      while ($data = mysqli_fetch_array($query)) {
        echo "<div class='bg-zinc-800 rounded-2xl shadow-md overflow-hidden hover-zoom'>";
        echo "<img src='images/{$data['foto']}' alt='Gambar' class='w-full h-56 object-cover'>";
        echo "<div class='p-4'>";
        echo "<h3 class='text-xl font-semibold gold'>" . htmlspecialchars($data['judul']) . "</h3>";
        echo "</div></div>";
      }
      ?>
    </div>
  </main>

  <!-- Footer -->
  <footer class="bg-zinc-900 text-gray-400 text-center py-4 text-sm mt-10">
    &copy; <?= date('Y'); ?> | Dibuat oleh <span class="text-white font-semibold">Divi Agung Satria</span>
  </footer>

</body>

</html>
