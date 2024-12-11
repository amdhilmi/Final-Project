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
        header('location: ../index.php');
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
    <link rel="stylesheet" href="../style/hasil.css">
    <title>Kapan Berangkat?</title>
</head>
<body>

        <div class="container">
            <h3>List Keberangkatan</h3>

            <a href="../index.php" class="back">Kembali ke Halaman Awal</a>

        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama lengkap</th>
                    <th>Tanggal keberangkatan</th>
                    <th>No telp.</th>
                    <th>Email</th>
                    <th>Tujuan</th> 
                    <th>Actions</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
               <?php while($baris = mysqli_fetch_assoc($result)) { ?>
                
            <tr>
                <td><?php echo $i?></td>

                <td><?php echo $baris['nama']?></td>

                <td><?php echo $baris['tanggal']?></td>

                <td><?php echo $baris['telp']?></td>

                <td><?php echo $baris['email']?></td>

                <td><?php echo $baris['action']?></td>

                <td>
                    <a href="edit.php?id=<?=$baris['id']?>" class="edit">Edit</a>
                    <form action="delete.php" method="post">
                                <input type="hidden" name="input-id" value="<?= $baris['id']?>" readonly>
                                <button class='btn btn-sm btn-flash-border-primary me-2' type="submit" name="delete">Delete</button>

                    </form>
                </td>
                <td>
                    <span class="badge <?php echo ($baris['status'] == 'pending') ? 'badge-warning' : (($baris['status'] == 'available') ? 'badge-success' : 'badge-danger') ?>">
                        <?php echo ucfirst($baris['status']); ?>
                    </span>
                </td>
            </tr>

            <?php $i++; } ?>
            </tbody>
        </table>
    </div>
    
</body>
</html>