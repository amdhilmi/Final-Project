<?php
include('../CRUD/koneksi.php');

function register($req) {
    global $koneksi;

    $username = $req['username']; 
    $email = $req['email'];
    

    $resultUsername = mysqli_query($koneksi, "SELECT username FROM akun WHERE username = '$username'");
     if (mysqli_num_rows($resultUsername) > 0) {
        echo "<script>
            alert('username has been used by others');
        </script>";
        return;
      }

     $pw1 = mysqli_real_escape_string($koneksi, $req['password']);
     $pw1 = password_hash($pw1, PASSWORD_DEFAULT);

     $admin = $_GET['role'];

     if(isset($_POST['role'])) {
        $role = $_POST['role'];

        if($role === '1') {
            $admin = true;
        } elseif($role === '0') {
            $admin = false;
        }
     }

     $result = mysqli_query($koneksi, "INSERT INTO akun(email, username, password, admin) VALUES('$email','$username', '$pw1', '$admin')");
      

      if($result) {
        echo "<script>
            alert('Akun Berhasil Dibuat');
            window.location.replace('../auth/login.php');
        </script>";
      }
}

function login($req) {
    global $koneksi; 

    $pw = $req['password'];
    $username = $req['username'];

    $result = mysqli_query($koneksi,
    "SELECT * FROM akun WHERE username = '$username'");

    if(mysqli_num_rows($result) === 1) {
        $fetch = mysqli_fetch_assoc($result);

        if(password_verify($pw, $fetch['password'])) {
            $_SESSION['login'] = true;

            if($fetch['admin'] == 1) {
                header('location: ../CRUD/admin.php');
                exit;
            } elseif($fetch['admin'] == 0) {
                header('location: ../index.php');
            } else{
                echo "<script>alert('Data Tidak Ditemukan');</script>";
            }
        }else{
            echo "<script>
                    alert('password Tidak Sesuai!')
                    window.location.replace('login.php')
                </script>"; 
            return;
        }

    } else {
        echo "<script>
        alert('username Tidak Sesuai!')
        window.location.replace('login.php')
    </script>"; 

    return;
    }
}