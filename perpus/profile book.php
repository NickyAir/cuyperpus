<?php
// koneksi ke basis data
require "dbconfig.php";

// Mendapatkan ID buku dari database jika tidak ada gunakan null 
$id = isset($_GET['id']) ? $_GET['id'] : null;

// Memeriksa apakah ID buku ada di database
if ($id === null) {
    // Jika ID buku tidak ada di database, hentikan eksekusi.
    die("ID Buku tidak ditemukan");
}

// Mendapatkan ID buku berdasarkan ID yang ada didatabase
$buku = getIdBook($id);

// Jika buku tidak ada di database, hentikan eksekusi
if ($buku === null) {
    die("Buku tidak ditemukan");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="profile.css">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>

<!-- Header Start -->
<div class="container px-20 mt-10 mx-auto px-4">
    <div class="header relative">
        <div class="image">
            <a href="dashboard.html">
                <img src="Judul.png" alt="CuyPerpus Logo" class="img-fluid" width="300px">
            </a>
            <a class="text-white font-bold text-2xl absolute top-0 right-0 mt-10 mr-4 px-14" href="booklist.php">Daftar Buku</a>
        </div>
    </div>
</div>
<!-- Header End -->

<!-- Profile Book Start -->
<div class="flex items-center rounded-xl border-2 mt-36 w-1/2 mx-auto p-4">
    <div class="w-1/2">
        <img src="<?php echo $buku['gambar']; ?>" alt="<?php echo $buku['nama_buku']; ?>" class="w-full">
    </div>
    <div class="w-1/2 pl-4 flex flex-col">
        <h1 class="text-white text-2xl font-bold flex flex-col">Profile Book</h1>
        <h2 class="text-white text-xl"><?= $buku["nama_buku"]; ?></h2>
        <p class="text-white text-xl">Penulis: <?= $buku["penulis"]; ?></p>
        <p class="text-white text-xl">Penerbit: <?= $buku["penerbit"]; ?></p>
        <p class="text-white text-xl">Tahun Terbit: <?= $buku["tahun_terbit"]; ?></p>
        <a href="<?php echo $buku['url']; ?>"><button class="mt-4 px-4 py-2" type="button"><span class="text-lime-500 font-bold">Baca Buku</span></button></a>
    </div>
</div>
<!-- Profile Book End -->
</body>
</html>
