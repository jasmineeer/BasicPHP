<?php 
include "connection.php";
if (isset($_POST["submit"])) {
    $nama = $_POST["nama"];
    $jk = $_POST["jk"];
    $agama = $_POST["agama"];
    $alamat = $_POST["alamat"];
    $tl = $_POST["tl"];
    $tgl = $_POST["tgl"];
    $hobi = $_POST["hobi"];
    $cita = $_POST["cita"];
    $usia = $_POST["usia"];
    $sekolah = $_POST["sekolah"];

    $sql = "insert into input-data values
    ('$nama','$jk','$agama','$alamat','$tl','$tgl',
    '$hobi','$cita','$usia','$sekolah')";

    if(mysqli_query($connect, $sql)) {
        echo $sql;
    } else{
        echo mysqli_error($connect);
    }
}
?>