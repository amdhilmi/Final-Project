<?php
    include('koneksi.php');

    $id = $_GET['id'];

    $queryData = "SELECT * FROM ticket WHERE id = $id";

    $result = mysqli_query($koneksi, $queryData);

    while($loop = mysqli_fetch_assoc($result)) {
        $data = $loop;
    }

    if(isset($_POST['btn'])) {
        $nama = $_POST['username'];
        $tanggal = $_POST['tanggal'];
        $telp = $_POST['telp'];
        $email = $_POST['email'];
        $action = $_POST['action'];

        $result = mysqli_query(
            $koneksi,
            "UPDATE ticket SET
             nama='$nama', tanggal='$tanggal', telp='$telp', email='$email', action='$action'
            WHERE id=$id"
        );

        if($result) {
            echo "<script>
                alert ('Data Berhasil Di Update')
                document.location.href='hasil.php'
            </script>";
        } else {
          echo "<script>
                alert('Data Gagal Di Update')
            </script>";
        }
    }

?>

<?= $data['nama'] ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/edit.css">
    <title>Edit Keberangkatan</title>
</head>
<body>

<div class="container">
        <h1>Edit Keberangkatan ( <?= $data['action'] ?> )</h1>
        
        <!-- Create New User Form -->
        <div class="form-container">
            <form action="" method="POST">
                <input type="text" name="username" value="<?= $data['nama'] ?>">
                <input type="date" name="tanggal" value="<?= $data['tanggal'] ?>">
                <i class="fa-solid fa-phone"></i>
                <input type="number" name="telp" value="<?= $data['telp'] ?>">
                <input type="email" name="email" value="<?= $data['email'] ?>">
                <input type="text" name="action" value="<?= $data['action'] ?>" >
                <button type="submit" name="btn" href="hasil.php">Edit Ticket</button>
            </form>
        </div>
    
</body>
</html>