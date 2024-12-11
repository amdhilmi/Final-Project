<?php 
 include('koneksi.php');

if(isset($_POST['input-id']) && !empty($_POST['input-id'])) {
   
    $id = $_POST['input-id'];

   $result = mysqli_query($koneksi, "DELETE FROM ticket WHERE id = $id");

    if($result) {
        echo "<script> 
        alert ('Data Berhasil Dihapus')
        window.location.replace('admin.php')
        </script>";
    } else {
        echo "<script> 
        alert ('Data Gagal Dihapus')
        window.location.replace('admin.php')
        </script>";
    }
}