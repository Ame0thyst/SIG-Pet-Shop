<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Peta</title>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
    <style>
        #map {
            height: 600px;
        }
    </style>
</head>

<body>
    <nav>
        <a href="/">Peta</a> | <a href="/map/info/0">Info</a>
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