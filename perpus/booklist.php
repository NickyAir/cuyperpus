<?php
require 'dbconfig.php';

$buku = query("SELECT * FROM buku");

if (isset($_POST["cari"])){
  $buku = cari($_POST["keyword"]);
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
    <script src="https://unpkg.com/feather-icons"></script>
    <link rel="stylesheet" href="book.css">
</head>
<body>
  <div class="top-right">
  <div class="search-container">
    <form action="" class="d-flex" role="search" method="post"> 
       <img src="search 1.png" alt="">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" autocomplete="off">
      </form>
    </div>
  </div>
    <div class="container position-absolute top-50 start-50 translate-middle">
        <div class="sembarangmu">
        </div>
        <div class="row gy-3">
          <div class="col-md-3">
              <div class="card">
                  <img src="e3ccdfd7459571fb8b5ae5b4a798e664.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">RPS Islam</h5>
                    <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
                    <!-- <a href="rps.html" class="btn btn-primary">Click to Read</a> -->
                  </div>
                </div>
          </div>
          <div class="col-md-3">
              <div class="card">
                  <img src="e3ccdfd7459571fb8b5ae5b4a798e664.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">40 Hadits Nabi</h5>
                   <!-- <a href="40 hadits nabi.html" class="btn btn-primary">Click to Read</a> -->
                  </div>
                </div>
          </div>
          <div class="col-md-3">
              <div class="card">
                  <img src="e3ccdfd7459571fb8b5ae5b4a798e664.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <a href="profile dsi.html" class="card-title">Digital System</a>
                    <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
                    <!-- <a href="dsi.html" class="btn btn-primary">Click to Read</a> -->
                  </div>
                </div>
          </div>
          <div class="col-md-3">
              <div class="card">
                  <img src="e3ccdfd7459571fb8b5ae5b4a798e664.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <a href="profile ict.html" class="card-title">ICT</a>
                    <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
                    <!-- <a href="ict.html" class="btn btn-primary">Click to Read</a> -->
                  </div>
                </div>
          </div>
        </div>
        <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-center mt-5">
              <li class="page-item"><a class="page-link text-success" href="booklist.html">1</a></li>
              <li class="page-item"><a class="page-link" href="booklist2.html">2</a></li>
              <li class="page-item"><a class="page-link" href="booklist3.html">3</a></li>
              <li class="page-item"><a class="page-link" href="booklist4.html">4</a></li>
              <li class="page-item">
                <a class="page-link" href="booklist2.html" aria-label="Next">
                  <span aria-hidden="true">&raquo;</span>
                </a>
              </li>
            </ul>
          </nav>
      </div>
      <div class="image-logo">
        <a href="dashboard.html">
          <img src="Judul.png" alt="" width="300px">
        </a>
      </div>
      <script>
        feather.replace();
      </script>
</body>
</html>