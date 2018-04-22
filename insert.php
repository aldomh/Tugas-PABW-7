<?php

include "connect.php";

$nama  = $_POST['nama'];
$email = $_POST['email'];
$tel   = $_POST['phone'];
$alamat= $_POST['alamat'];

$sql = "INSERT INTO bukutelepon (nama, email, tel) "
     . "VALUES ('$nama','$email','$tel')";
/* eksekusi query SQL */
$res = mysqli_query($link, $sql);
if($res) echo "Data berhasil disimpan.";
else echo mysqli_error($link);

/* tutup koneksi MySQL */
mysqli_close($link);