<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Info Lokasi</title>
</head>

<body>
    <nav>
        <a href="/">Peta</a> | <a href="/map/info/0">Info</a>
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