<?php 
session_start();
include("../db_siswa/koneksi.php");


$username = $_POST['username'];
$password = sha1($_POST['password']);

$sql = "SELECT * FROM user WHERE username= '$username' AND password='$password'";
$data = mysqli_query($conn, $sql);
$result = mysqli_num_rows($data);


if ($result == 1) {
    $_SESSION['username'] = $username; 
    header("location:index.php");
} else {
    echo "username atau password salah";
}

?>