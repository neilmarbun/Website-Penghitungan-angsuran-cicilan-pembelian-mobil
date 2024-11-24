<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $hargaMobil = $_POST['hargaMobil'];
    $dpPersen = $_POST['dpPersen'];
    $tenorTahun = $_POST['tenorTahun'];

    
    if (is_numeric($hargaMobil) && is_numeric($dpPersen) && is_numeric($tenorTahun)) {
        
        $dpNominal = ($dpPersen / 100) * $hargaMobil;

       
        $bunga = 0.20 * $hargaMobil;

       
        $hargaSetelahBunga = $hargaMobil + $bunga;

       
        $sisaHarga = $hargaSetelahBunga - $dpNominal;

        
        $tenorBulan = $tenorTahun * 12;

       
        $angsuranBulanan = $sisaHarga / $tenorBulan;
    } else {
        $error = "penginput harus berupa sebuah angka.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="assets/styles/style.css">
</head>
<body>
    <header class="text-right">
        <div class="header-container">
            <img src="logo.png" alt="Logo" width="120x"><br> 
    
    <header class="text-center">
            <h1 class="header-title">GAS 'N' GO Transport</h1>
    </div>
        
    <div class="text-center">
        <div class="header-container">
            <img src="banner1.png" width="1520x"><br> 
         
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid justify-content-center">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls ="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item"><a class="nav-link active" href="/">Beranda</a></li>
                        <li class="nav-item"><a class="nav-link" href="tentangperusahaan.php">Tentang Perusahaan</a></li>
                        <li class="nav-item"><a class="nav-link" href="kontakperusahaan.php">Kontak Perusahaan</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <div class="slider mb-3"></div>

    <div class="container mt-5">
        <div class="form-container mb-4">
            <form method="POST" action="">
                <div class="mb-3">
                    <label for="hargaMobil" class="form-label">Harga Mobil</label>
                    <input type="number" name="hargaMobil" id="hargaMobil" class="form-control" placeholder="Contoh: 100000000" required>
                </div>
                <div class="mb-3">
                    <label for="dpPersen" class="form-label">DP (%)</label>
                    <input type="number" name="dpPersen" id="dpPersen" class="form-control" placeholder="Contoh: 20" required>
                </div>
                <div class="mb-3">
                    <label for="tenorTahun" class="form-label">Tenor (Tahun)</label>
                    <input type="number" name="tenorTahun" id="tenorTahun" class="form-control" placeholder="Contoh: 5" required>
                </div>
                <button type="submit" class="btn btn-primary w-100">Hitung</button>
            </form>
        </div>

        <?php if (isset($angsuranBulanan)): ?>
            <div class="card p-4 mb-4">
                <h4 class="text-center mb-3">Hasil yang diperoleh:</h4>
                <p><strong>Harga Mobil:</strong> Rp. <?= number_format($hargaMobil, 0, ',', '.') ?></p>
                <p><strong>DP:</strong> <?= $dpPersen ?>% (Rp. <?= number_format($dpNominal, 0, ',', '.') ?>)</p>
                <p><strong>Tenor:</strong> <?= $tenorTahun ?> Tahun (<?= $tenorBulan ?> Bulan)</p>
                <p><strong>Bunga:</strong> 20% (Rp. <?= number_format($bunga, 0, ',', '.') ?>)</p>
                <p><strong>Jumlah Angsuran:</strong> <span class="text-success">Rp. <?= number_format($angsuranBulanan, 0, ',', '.') ?> / Bulan</span></p>
            </div>
        <?php elseif (isset($error)): ?>
            <div class="alert alert-danger"> <?= $error ?> </div>
        <?php endif; ?>
    </div>

    <footer class="text-center">
        <p>&copy; 2024 Your Gas 'N' GO Transport. All Rights Reserved.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>