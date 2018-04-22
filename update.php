<?php

include "connect.php";

$id = $_GET['id'];
$nama  = $_GET['nama'];
$email = $_GET['email'];
$tel   = $_GET['phone'];
$alamat= $_GET['alamat'];

echo "<table>";
echo "<tr><td>Name</td><td><input type='text' value='$nama'/>";
echo "<tr><td>Email</td><td><input type='email' value='$email'/>";
echo "<tr><td>Telepon</td><td><input type='text' value='$tel'/>";
echo "<tr><td>Alamat</td><td><input type='text' value='$alamat'/>";
echo "<tr><td colspan='2'><input type='submit' /></td></tr>";
echo "</table>";

$sql = "UPDATE address SET name = '" . $nama ."', email = '" . $email . "', telepon = '" . $tel . "' WHERE id = '" . $id . "'";

$res = mysqli_query($link, $sql);
if($res) echo "Data update berhasil disimpan.";
else echo mysqli_error($link);

mysqli_close($link);
