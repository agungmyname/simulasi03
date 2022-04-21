<?php
    require_once '../config/config.php';

    $id = $_POST['id'];
    $username = $_POST['username'];
    $pswd = $_POST['pswd'];
    $namalengkap = $_POST['namalengkap'];
    $nohp = $_POST['nohp'];


    $q = $koneksi->query("UPDATE pendaftar SET username = '$username', pswd = '$pswd', namalengkap = '$namalengkap', nohp = '$nohp' WHERE id = '$id'");

    if ($q) {
        // pesan jika data berubah
        echo "<script>alert('Data telah berhasil diubah'); window.location.href='../form.php'</script>";
    } else {
        // pesan jika data gagal diubah
        echo "<script>alert('Data produk gagal diubah'); window.location.href='../index.php'</script>";
    }

?>