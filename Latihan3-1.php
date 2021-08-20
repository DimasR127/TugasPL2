<?php
    include 'koneksi.php';
    $id = $_POST['id'];
    $npm = $_POST['npm'];
    $nama = $_POST['nama'];

    $data = mysqli_query ($koneksi,"UPDATE tbl_mhs SET npm='$npm', nama='$nama' WHERE id='$id'");
    header("location:Latihan1.php");

    ?>