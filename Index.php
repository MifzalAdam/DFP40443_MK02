<?php include 'biodata.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Maklumat Pelajar</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <h2 class="fw-bold mb-4">Profil Diri</h2>

    <img src="profile2.jpeg" alt="Gambar Pelajar">

    <p>NAMA: <?= $nama ?></p>
    <p>NO MATRIK: <?= $nomatrik ?></p>
    <p>KELAS: <?= $kelas ?></p>
    
</body>
</html>