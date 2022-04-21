<?php
    require_once '../config/config.php';
    
    $id = $_GET['id'];
    // perintah hapus data berdasarkan id yang dikirimkan
    $q = $koneksi->query("DELETE FROM pendaftar WHERE id = '$id'");
    // cek perintah
    if ($q) {
        // pesan apabila hapus berhasil
        echo "<script>alert('Data berhasil dihapus'); window.location.href='../form.php'</script>";
    } else {
        // pesan apabila hapus gagal
        echo "<script>alert('Data gagal terhapus'); window.location.href='../form.php'</script>";
    }
   