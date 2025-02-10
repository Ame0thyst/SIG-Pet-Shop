<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Info Lokasi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">Aplikasi Peta</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="/">Peta</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/map/info">Info</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <h1><?= $location['Nama'] ?? 'N/A' ?></h1>
    <p><strong>Kategori:</strong> <?= $location['Kategori'] ?? 'N/A' ?></p>
    <p><strong>Alamat:</strong> <?= $location['Alamat'] ?? 'N/A' ?></p>
    <p><strong>Deskripsi:</strong> <?= $location['Deskripsi'] ?? 'N/A' ?></p>
    <img src="<?= $location['Gambar'] ?? '#' ?>" alt="<?= $location['Nama'] ?? 'N/A' ?>" style="max-width: 100%;">
    <br>
    <a href="/">Kembali ke Peta</a>
</body>

</html>