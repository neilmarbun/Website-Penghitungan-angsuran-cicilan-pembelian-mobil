<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontak Perusahaan</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
        background-color: #f0f4f8;
        font-family: 'Arial', sans-serif;
    }
    header {
        background-color: #10151f;
        padding: 20px 0;
        color: #ffffff;
    }
    .header-container {
        display: flex;
        align-items: center;
        padding: 0 20px;
    }
    header img {
        max-width: 70px;
    }
    .header-title {
        font-size: 1.8rem;
        font-weight: bold;
        margin-left: 20px;
    }
    .navbar {
        background: transparent;
    }
    .navbar .nav-link {
        color: #ffffff !important;
        margin: 0 15px;
        font-weight: lighter;
    }

    .navbar .nav-link.active {
        font-weight: bold;
    }

    .navbar .nav-link:hover {
        color: #ffd700 !important;
    }
    .content {
        padding: 20px;
        background: #ffffff;
        border-radius: 12px;
        box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
    }
    footer {
        background: #343a40;
        color: #ffffff;
        padding: 15px 0;
    }
    </style>
</head>
<body>
<header class="text-center">
        <div class="header-container">
            <img src="logo.png" alt="Logo">
            <h1 class="header-title">Gas 'N' Go Transport</h1>
        </div>
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid justify-content-center">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls ="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item"><a class="nav-link" href="/">Beranda</a></li>
                        <li class="nav-item"><a class="nav-link" href="tentangperusahaan.php">Tentang Perusahaan</a></li>
                        <li class="nav-item"><a class="nav-link active" href="kontakperusahaan.php">Kontak Perusahaan</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <div class="container my-4">
        <div class="content">
            <h2 class="text-right">Kontak Kami</h2>
            <p class="mt-4">Jika Anda memiliki pertanyaan atau ingin mendapatkan informasi lebih lanjut, silakan hubungi kami melalui informasi di bawah ini:</p>

            <h4>Alamat</h4>
            <p>Jl. Bendungan Sengguruh No.21, Kec. Lowokwaru, Kota Malang, Jawa Timur 65145</p>

            <h4>Telepon</h4>
            <p>+62 56 43 18 490</p>

            <h4>Email</h4>
            <p><a href="https://mail.google.com/mail/u/0/?pli=1#inbox">neilmarbun25@gmail.com</a></p>

            <h4>Jam Operasional</h4>
            <p>Senin - Jumat: 07:00 - 15:00</p>
            <p>Sabtu: 09:00 - 16:00</p>
            <p>Minggu: Tutup</p>
        </div>
    </div>

    <footer class="text-center">
        <p>&copy; 2024 Gas 'N' Go Transport. All Rights Reserved.</p>
        <p>Bersiaplah untuk pengalaman sewa mobil
        terbaik di kota Anda!.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>