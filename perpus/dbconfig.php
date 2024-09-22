<?php

//Koneksi ke basis data
$conn = mysqli_connect("localhost", "root", "", "cuyperpus");

// Fungsi untuk mengambil data buku dengan pagination
function getCards($page, $limit) {
    global $conn; // Menggunakan variabel global untuk koneksi database
    $offset = ($page - 1) * $limit;// Hitung offset data berdasarkan halaman dan limit
    $query = "SELECT * FROM buku LIMIT $limit OFFSET $offset"; // Query SQL untuk mengambil data buku dengan pagination
    $result = mysqli_query($conn, $query); // Menjalankan query
    $cards = []; // Inisialisasi array untuk menyimpan hasil query
    while ($row = mysqli_fetch_assoc($result)) { // Mengambil setiap baris hasil query
        $cards[] = $row; // Menyimpan baris hasil query ke dalam array
    }
    return $cards; // Mengembalikan array berisi data buku
}

// Fungsi untuk menghitung total halaman
function getTotalPages($limit) {
    global $conn; // Menggunakan variabel global untuk koneksi database
    $query = "SELECT COUNT(*) as total FROM buku";// Query SQL untuk menghitung total buku
    $result = mysqli_query($conn, $query); //Menjalankan query
    $total = mysqli_fetch_assoc($result)['total']; //mengambil hasil query
    return ceil($total / $limit); //menghitung total halaman
}

// Fungsi untuk menjalankan query dan mengembalikan hasil
function query($query){
    global $conn;// Menggunakan variabel global untuk koneksi database
    $result = mysqli_query($conn, $query);// Menjalankan query
    $rows = [];// Inisialisasi array untuk menyimpan hasil query
    while($row = mysqli_fetch_array($result)){// Mengambil setiap baris hasil query
        $rows[] = $row;// Menyimpan baris hasil query ke dalam array
    }
    return $rows;// Mengembalikan array berisi hasil query
}

// Fungsi untuk mencari buku berdasarkan kata kunci
function cari($keyword){
// Membuat query untuk mencari buku berdasarkan kata kunci
    $query = "SELECT * FROM buku WHERE nama_buku LIKE '%$keyword%' or penulis LIKE '%$keyword%' or penerbit LIKE '%$keyword%' or tahun_terbit LIKE '%$keyword%'";
// Menjalankan query dan mengembalikan hasilnya
    return query($query);
}

// Fungsi untuk mendapatkan data buku berdasarkan ID
function getIdBook($id){
    global $conn;// Menggunakan variabel global untuk koneksi database
    $sql = "SELECT * FROM buku WHERE id = $id";// Query SQL untuk mengambil data buku berdasarkan ID
    $result = $conn->query($sql);// Menjalankan query
    if($result->num_rows > 0){// Memeriksa apakah ada hasil
        return $result->fetch_assoc();// Mengembalikan data buku dalam bentuk array asosiatif
    }else{
        return null;// Mengembalikan null jika buku tidak ditemukan
    }
}

?>