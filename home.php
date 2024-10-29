<?php
session_start();

// Memeriksa apakah pengguna sudah login atau belum
if (!isset($_SESSION['loggedin'])) {
    header('Location: login.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selamat Ulang Tahun Pertama!</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&family=Great+Vibes&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #ff9a9e 0%, #fecfef 100%);
            color: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            text-align: center;
            flex-direction: column;
            overflow: hidden;
            padding: 0 20px;
        }

        h1 {
            font-family: 'Great Vibes', cursive;
            font-size: 3em;
            margin-bottom: 20px;
            text-shadow: 2px 2px 15px rgba(0, 0, 0, 0.3);
            animation: zoomIn 2s ease-in-out;
        }

        p {
            font-size: 1.5em;
            margin-bottom: 40px;
            animation: fadeInUp 2.5s ease-in-out;
        }

        .btn {
            background-color: #ff6699;
            color: white;
            padding: 12px 28px;
            text-decoration: none;
            border-radius: 30px;
            margin: 10px;
            font-size: 1.2em;
            transition: background-color 0.3s, transform 0.3s;
            display: inline-block;
            animation: fadeInUp 3s ease-in-out;
            box-shadow: 0 10px 15px rgba(255, 99, 132, 0.3);
        }

        .btn:hover {
            background-color: #ff3366;
            transform: scale(1.1);
            box-shadow: 0 5px 20px rgba(255, 99, 132, 0.5);
        }

        @keyframes fadeInUp {
            0% {
                opacity: 0;
                transform: translateY(20px);
            }
            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes zoomIn {
            0% {
                opacity: 0;
                transform: scale(0.8);
            }
            100% {
                opacity: 1;
                transform: scale(1);
            }
        }

        /* Partikel melayang */
        .particle {
            position: absolute;
            width: 10px;
            height: 10px;
            background: rgba(255, 255, 255, 0.5);
            border-radius: 50%;
            animation: float 8s infinite ease-in-out;
        }

        .particle:nth-child(odd) {
            animation-duration: 6s;
            background: rgba(255, 255, 255, 0.7);
        }

        .particle:nth-child(even) {
            animation-duration: 10s;
        }

        @keyframes float {
            0% {
                transform: translateY(0) translateX(0);
            }
            50% {
                transform: translateY(-150px) translateX(50px);
            }
            100% {
                transform: translateY(0) translateX(0);
            }
        }

        .footer {
            position: absolute;
            bottom: 20px;
            font-size: 0.9rem;
            color: rgba(255, 255, 255, 0.8);
        }

        /* Kontainer partikel */
        .particles {
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            z-index: 1;
            pointer-events: none;
        }

        @media (min-width: 576px) {
            h1 {
                font-size: 4em;
            }

            p {
                font-size: 1.8em;
            }
        }
    </style>
</head>
<body>
<h1>Happy 1st Anniversary!</h1>
    <p>Satu tahun berlalu, dan aku semakin mencintaimu setiap hari. ❤️</p>

    <a href="perkenalan.php" class="btn">Tentang Kita</a>
    <a href="memories.php" class="btn">Kenangan Spesial</a>
    <a href="aniversary.php" class="btn">Timer Anniversary</a>
    <a href="logout.php" class="btn">Log out</a>

    <div class="particles"></div>

    <div class="footer">Made with ❤️ for our special day</div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        // Membuat efek partikel
        const particlesContainer = document.querySelector('.particles');
        for (let i = 0; i < 30; i++) {
            const particle = document.createElement('div');
            particle.classList.add('particle');
            particle.style.top = `${Math.random() * 100}vh`;
            particle.style.left = `${Math.random() * 100}vw`;
            particle.style.width = `${Math.random() * 15 + 5}px`;
            particle.style.height = particle.style.width;
            particlesContainer.appendChild(particle);
        }
    </script>
</body>
</html>
