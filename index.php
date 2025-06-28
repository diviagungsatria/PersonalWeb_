<?php include "koneksi.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Personal Web | Divi Agung Satria</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .fade-in {
            animation: fadeIn 1s ease-in-out;
        }

        @keyframes fadeIn {
            0% {
                opacity: 0;
                transform: translateY(15px);
            }

            100% {
                opacity: 1;
                transform: translateY(0);
            }
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

<body class="font-sans">
    <!-- Header -->
    <header class="bg-black text-white text-center p-6 text-3xl font-extrabold shadow-md fade-in">
        Personal Web | <span class="gold">Divi Agung Satria</span>
    </header>

    <!-- Navigation -->
    <nav class="bg-zinc-900 text-white py-3 shadow-sm">
        <ul class="flex justify-center space-x-10 font-medium text-lg">
            <li><a href="index.php" class="gold underline underline-offset-4">Artikel</a></li>
            <li><a href="gallery.php" class="hover-gold transition">Gallery</a></li>
            <li><a href="about.php" class="hover-gold transition">About</a></li>
            <li><a href="admin/login.php" class="hover-gold transition">Login</a></li>
        </ul>
    </nav>

    <!-- Main Content -->
    <main class="max-w-6xl mx-auto p-6 grid grid-cols-1 md:grid-cols-3 gap-6 mt-8 fade-in">
        <!-- Artikel Utama -->
        <section class="md:col-span-2 bg-zinc-800 p-6 rounded-xl shadow-lg">
            <h2 class="text-2xl font-bold mb-4 gold">Artikel Terbaru</h2>
            <div class="space-y-6">
                <?php
                $sql = "SELECT * FROM tbl_artikel ORDER BY id_artikel DESC";
                $query = mysqli_query($db, $sql);
                while ($data = mysqli_fetch_array($query)) {
                    echo "<div class='border-b border-zinc-700 pb-4'>";
                    echo "<h3 class='text-lg font-semibold gold'>" . htmlspecialchars($data['nama_artikel']) . "</h3>";
                    echo "<p class='text-gray-300 mt-2'>" . nl2br(htmlspecialchars($data['isi_artikel'])) . "</p>";
                    echo "</div>";
                }
                ?>
            </div>
        </section>

        <!-- Sidebar -->
        <aside class="bg-zinc-800 p-6 rounded-xl shadow-lg">
            <h2 class="text-xl font-bold mb-4 gold">Daftar Artikel</h2>
            <ul class="space-y-3 list-disc list-inside text-gray-300">
                <?php
                $sql = "SELECT * FROM tbl_artikel ORDER BY id_artikel DESC";
                $query = mysqli_query($db, $sql);
                while ($data = mysqli_fetch_array($query)) {
                    echo "<li>" . htmlspecialchars($data['nama_artikel']) . "</li>";
                }
                ?>
            </ul>
        </aside>
    </main>

    <!-- Custom Audio Player -->
    <section class="bg-zinc-800 p-6 rounded-xl shadow-lg max-w-xl mx-auto mt-12 fade-in text-center">
        <h2 class="text-xl font-bold mb-4 gold">🎧 Now Playing</h2>

        <div class="flex items-center justify-between bg-zinc-700 rounded-lg p-4 shadow-inner">
            <div class="flex items-center space-x-4">
                <img src="https://img.icons8.com/color/96/000000/music--v1.png" alt="Music" class="w-12 h-12 rounded-md" />
                <div class="text-left">
                    <p class="text-lg font-semibold text-white">Lagu Favorit</p>
                    <p class="text-sm text-gray-400">Tarot .Feast</p>
                </div>
            </div>
            <button onclick="togglePlay()" class="gold-bg hover:gold-hover p-3 rounded-full shadow transition" id="playBtn">
                ▶️
            </button>
        </div>
        <audio id="audioPlayer" class="hidden">
            <source src="mp3/Audio WhatsApp 2025-06-27 pukul 13.52.02_1069524f_[cut_257sec].mp3" type="audio/mpeg">
            Browser Anda tidak mendukung audio.
        </audio>
    </section>

    <script>
        const audio = document.getElementById('audioPlayer');
        const playBtn = document.getElementById('playBtn');
        let isPlaying = false;

        function togglePlay() {
            if (isPlaying) {
                audio.pause();
                playBtn.innerHTML = '▶️';
            } else {
                audio.play();
                playBtn.innerHTML = '⏸️';
            }
            isPlaying = !isPlaying;
        }
    </script>

    <!-- Footer -->
    <footer class="bg-zinc-900 text-gray-400 text-center py-4 mt-12 text-sm">
        &copy; <?php echo date('Y'); ?> | Created by <span class="text-white font-medium">Divi Agung Satria</span>
    </footer>
</body>

</html>
