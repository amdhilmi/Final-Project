<?php 
include('../CRUD/koneksi.php');

$result = mysqli_query($koneksi, "SELECT * FROM ticket");
$i = 1;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/admin.css">
    <title>Admin Page</title>
</head>
<body>

<div class="container">
    <h1>Admin</h1>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama lengkap</th>
                <th>Tanggal keberangkatan</th>
                <th>Tujuan</th> 
                <th>Actions</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            <?php while($baris = mysqli_fetch_assoc($result)) { ?>
                <tr>
                    <td><?php echo $i ?></td>
                    <td><?php echo $baris['nama'] ?></td>
                    <td><?php echo $baris['tanggal'] ?></td>
                    <td><?php echo $baris['action'] ?></td>
                    <td>
                        <a href="../CRUD/edit.php?id=<?=$baris['id']?>" class="edit">Edit</a>
                        <form action="delete.php" method="post">
                            <input type="hidden" name="input-id" value="<?= $baris['id'] ?>" readonly>
                            <button class="btn btn-sm btn-flash-border-primary me-2" type="submit" name="delete">Delete</button>
                        </form>
                    </td>
                    <td>
                        <span class="badge <?php echo ($baris['status'] == 'pending') ? 'badge-warning' : (($baris['status'] == 'available') ? 'badge-success' : 'badge-danger') ?>">
                            <?php echo ucfirst($baris['status']); ?>
                        </span>
                    </td>
                    <?php if ($baris['status'] == 'pending') { ?>
                        <td>
                            <a href="change-status.php?id=<?=$baris['id']?>&status=available" class="btn btn-success">Tersedia</a>
                            <a href="change-status.php?id=<?=$baris['id']?>&status=unavailable" class="btn btn-danger">Tidak Tersedia</a>
                        </td>
                    <?php } ?>
                </tr>
            <?php $i++; } ?>
        </tbody>
    </table>
</div>

</body>
</html>
