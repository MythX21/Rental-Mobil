<?php
include("koneksi.php");
$nama = $_POST['txtNama'];
$kelamin = $_POST['kelamin'];
$username = $_POST['txtUsername'];
$password = $_POST['txtPassword'];
$level = $_POST['level'];
$simpan = mysqli_query($konek, "insert into admin(nama_admin,jk_admin,username,passsword,
level) values ('$nama','$kelamin','$username','$password','$level')") or die(mysqli_error());
if ($simpan) {
    header("Location:index.php?x=admin");
}