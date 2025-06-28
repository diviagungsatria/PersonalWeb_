<?php include "koneksi.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>About | Divi Agung Satria</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .fade-in {
            animation: fadeIn 1s ease-in-out;
        }

        @keyframes fadeIn {
            0% {
                opacity: 0;
                transform: translateY(20px);
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
        About Me | <span class="gold">Divi Agung Satria</span>
    </header>

    <!-- Navigation -->
    <nav class="bg-zinc-900 text-white py-3 shadow-sm">
        <ul class="flex justify-center space-x-10 font-medium text-lg">
            <li><a href="index.php" class="hover-gold transition">Artikel</a></li>
            <li><a href="gallery.php" class="hover-gold transition">Gallery</a></li>
            <li><a href="about.php" class="gold underline underline-offset-4">About</a></li>
            <li><a href="admin/login.php" class="hover-gold transition">Login</a></li>
        </ul>
    </nav>

    <!-- About Content -->
    <main class="max-w-4xl mx-auto px-6 py-10 fade-in">
        <div class="bg-zinc-800 rounded-2xl shadow-lg p-8">
            <h2 class="text-2xl font-bold mb-6 gold text-center">Tentang Saya</h2>
            <div class="space-y-6 text-gray-300 leading-relaxed">
                <?php
                $sql = "SELECT * FROM tbl_about ORDER BY id_about DESC";
                $query = mysqli_query($db, $sql);
                while ($data = mysqli_fetch_array($query)) {
                    echo "<div>";
                    echo "<p>" . nl2br(htmlspecialchars($data['about'])) . "</p>";
                    echo "</div>";
                }
                ?>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-zinc-900 text-gray-400 text-center py-4 mt-10 text-sm">
        &copy; <?php echo date('Y'); ?> | Created by <span class="text-white font-medium">Divi Agung Satria</span>
    </footer>
</body>

</html>
