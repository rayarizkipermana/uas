<?php
include("koneksi.php");
$nama=$_POST["nama"];
$email=$_POST["email"];
$subjek=$_POST["subject"];
$komen=$_POST["pesan"];
$SQL="insert into bukutamu(nama,email,subjek,komen) values ('$nama','$email','$subjek','$komen')";
mysqli_query($koneksi,$SQL);
if ($SQL)

{
    echo" data tersimpan";
}
?>