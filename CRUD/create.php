<?php
include('koneksi.php');


if(isset($_GET['btn'])) {
    $id = '';
    $nama = $_GET['username'];
    $tanggal = $_GET['tanggal'];
    $telp = $_GET['ntl'];
    $email = $_GET['email'];
    $action = $_GET['actions'];

    $query = mysqli_query($koneksi,
    "INSERT INTO ticket (id, nama, tanggal, telp, email, action) 
    VALUES ('$id', '$nama', '$tanggal', '$telp', '$email', '$action')");

    if($query) {
        header('location: ../CRUD/hasil.php');
    }
};

$result = mysqli_query($koneksi, "SELECT * FROM ticket");
$i = 1;


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Pesan Ticket anda</title>
    <link rel="stylesheet" href="../style/create.css">
</head>
<body>

    <div class="back">
        <h1>Pesan Ticket anda Di sini</h1>

        <a href="../index.php" class="container">Kembali ke Halaman Awal</a>
        
        <!-- Create New User Form -->
        <div class="form-container">
            <h2>Create The Ticket</h2>
            <form action="" method="">
                <input type="text" name="username" placeholder="Username" required>
                <input type="date" name="tanggal" placeholder="Tanggal Keberangkatan" required>
                <i class="fa-solid fa-phone"></i>
                <input type="number" name="ntl" placeholder="No telp." required>
                <input type="email" name="email" placeholder="Email" required>
                <input type="text" name="actions" placeholder="Tujuan anda" required>
                <button type="submit" name="btn" href="hasil.php">Create Ticket</button>
            </form>
        </div>
    </div>
</body>
</html>
