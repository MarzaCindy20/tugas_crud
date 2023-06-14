<?php

session_start();

include('koneksi.php');

$username = $_POST['username'];
$password = $_POST['password'];
$error = "Data tidak cocok";

$sql = "SELECT * FROM sys_users WHERE username='$username' AND password='$password'";
$result = mysqli_query($koneksi, $sql);
$show = mysqli_fetch_array($result);
$rowcount = mysqli_num_rows($result);

if($rowcount>0){
    $_SESSION['username'] = $username;
    $_SESSION['id'] = $show['id'];
    header('location: home.php');
} else {
    echo $error;
    echo "<br>";
    echo "<a href='login.php'>Kembali</a>";
}

?>
