<?php
session_start();
if (isset($_SESSION['username'])) {
    header('location:beranda_admin.php');
}
require_once("../koneksi.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Login Admin | FC Barcelona</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        barcaBlue: '#004D98',
                        barcaRed: '#A50044',
                        barcaGold: '#FDB913',
                    },
                    animation: {
                        fade: 'fadeIn 1s ease-in-out',
                    },
                    keyframes: {
                        fadeIn: {
                            '0%': { opacity: 0 },
                            '100%': { opacity: 1 }
                        }
                    }
                }
            }
        };
    </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <style>
        body {
            background-image: url('https://c4.wallpaperflare.com/wallpaper/837/385/136/barcelona-fc-barcelona-stadium-camp-nou-wallpaper-preview.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }
        .bg-overlay {
            background-color: rgba(0, 0, 0, 0.6); /* semi-transparan */
        }
    </style>
</head>

<body class="min-h-screen flex items-center justify-center bg-overlay">
    <div class="bg-white bg-opacity-90 shadow-2xl rounded-2xl p-10 w-full max-w-md animate-fade border-t-4 border-barcaGold">
        <div class="text-center mb-6">
            <img src="https://upload.wikimedia.org/wikipedia/en/4/47/FC_Barcelona_%28crest%29.svg" alt="FCB Logo" class="w-16 h-16 mx-auto mb-2">
            <h2 class="text-2xl font-extrabold text-barcaBlue">Admin Login</h2>
            <p class="text-sm text-gray-500">Masuk untuk mengelola konten tim kebanggaanmu</p>
        </div>
        <form action="cek_login.php" method="post" class="space-y-6">
            <div>
                <label for="username" class="block text-sm font-medium text-barcaRed">Username</label>
                <input type="text" name="username" id="username" required
                    class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-2 focus:ring-barcaGold focus:outline-none focus:border-transparent">
            </div>
            <div>
                <label for="password" class="block text-sm font-medium text-barcaRed">Password</label>
                <input type="password" name="password" id="password" required
                    class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-2 focus:ring-barcaGold focus:outline-none focus:border-transparent">
            </div>
            <div class="flex justify-between gap-2">
                <button type="submit" name="login"
                    class="w-full bg-barcaBlue text-white font-semibold py-2 rounded-lg hover:bg-barcaRed transition duration-300">
                    <i class="fas fa-sign-in-alt mr-2"></i>Login
                </button>
                <button type="reset" name="cancel"
                    class="w-full bg-gray-200 text-barcaRed font-semibold py-2 rounded-lg hover:bg-gray-300 transition duration-300">
                    <i class="fas fa-times-circle mr-2"></i>Batal
                </button>
            </div>
        </form>
        <p class="text-center text-xs text-gray-500 mt-6">
            &copy; <?php echo date('Y'); ?> Divi Agung Satria | Força Barça 💙❤️ "Més Que Un Club"
        </p>
    </div>
</body>

</html>
