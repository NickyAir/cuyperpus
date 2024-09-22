<?php
// koneksi ke basis data
require 'dbconfig.php';

// mengatur nomor halaman dari URL
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;

// mengatur batas card book
$limit = 4;

// mengatur dan menentukan data dan jumlah item yang harus diambil dari basis data berdasarkan pagination.
$cards = getCards($page, $limit);

// menghitung berapa banyak halaman yang diperlukan untuk menampilkan semua item dalam basis data. 
$totalPages = getTotalPages($limit);

// mengambil data dari tabel sql buku 
$buku = query("SELECT * FROM buku");

// mencari data buku dalam basis data berdasarkan kata kunci yang dimasukkan.
if (isset($_POST["cari"])) {
  $cards = cari($_POST["keyword"]);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/feather-icons"></script>
    <link rel="stylesheet" href="book.css">
</head>
<body>
  <!-- header start -->
  <div class="header">
    <div class="image-logo">
      <a href="dashboard.html">
        <img src="Judul.png" alt="" width="300px">
        <a class="text-white font-bold text-2xl absolute top-0 right-0 mt-20 mr-4 px-48" href="booklist.php">Daftar Buku</a>
      </a>
    </div>
  </div>
  <!-- header end -->

  <!-- search bar start -->
  <div class="container rounded-2xl border-2 relative px-20 mt-10">
    <div class="absolute top-0 right-0 p-4">
    <form action="" class="flex" role="search" method="post"> 
      <button type="submit" name="cari">
          <img src="search 1.png" alt="Search Icon">
      </button>
      <input class="search-bar border rounded-lg p-2" type="text" name="keyword" placeholder="Search" aria-label="Search" autocomplete="off">
        </form>
    </div>
    <!-- search bar end -->


    <!-- card start -->
    <div class="cards mt-14 py-8"></div>
    <div class="row gy-3">
        <?php foreach ($cards as $card) : ?>
        <div class="col-md-3">
            <div class="card">
                <img src="<?= $card["gambar"]; ?>" class="card-img-top" alt="<?php echo $card['nama_buku']; ?>" loading="lazy">
                <div class="card-body">
                    <a href="profile book.php?id=<?php echo $card['id']; ?>">
                        <h5 class="card-title font-bold"><?= $card["nama_buku"]; ?></h5>
                    </a>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
    <!-- card end -->

    <!-- nav page start -->
    <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-center mt-5">
            <?php for ($i = 1; $i <= $totalPages; $i++): ?>
            <li class="page-item <?php if ($i == $page) echo 'active'; ?>">
                <a class="page-link" href="?page=<?php echo $i; ?>"><?php echo $i; ?></a>
            </li>
            <?php endfor; ?>
        </ul>
    </nav>
    <!-- nav page end -->
</div>
      <script>
        feather.replace();
      </script>
</body>
</html>
