<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Peta</title>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        #map {
            height: 600px;
        }
    </style>
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
    <div id="map"></div>
    <script>
        // Inisialisasi peta
        var map = L.map('map').setView([0.5298105226642194, 101.40618568297664], 13);

        // Tambahkan tile layer (peta dasar)
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 19,
        }).addTo(map);

        // Tambahkan marker dari data JSON
        <?php if (!empty($locations)): ?>
            <?php foreach ($locations as $id => $location): ?>
                L.marker([<?= $location['Latitude'] ?? 0 ?>, <?= $location['Longitude'] ?? 0 ?>])
                    .addTo(map)
                    .bindPopup("<b><?= $location['Nama'] ?? 'N/A' ?></b><br><?= $location['Alamat'] ?? 'N/A' ?><br><a href='/map/info/<?= $id ?>'>Info lebih lanjut</a>");
            <?php endforeach; ?>
        <?php else: ?>
            console.error("Data lokasi tidak tersedia.");
        <?php endif; ?>
    </script>
</body>

</html>