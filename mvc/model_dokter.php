<?php
// model_dokter.php

function getDataDokter() {
    // Koneksi ke database
    $conn = mysqli_connect("localhost", "root", "", "denky_xipplg2");

    // Cek koneksi
    if (!$conn) {
        die("Koneksi gagal: " . mysqli_connect_error());
    }

    // Query untuk mengambil data dokter
    $query = "SELECT * FROM dokter";
    $result = mysqli_query($conn, $query);

    // Inisialisasi array untuk menyimpan data
    $dataDokter = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $dataDokter[] = $row;
    }

    // Tutup koneksi
    mysqli_close($conn);

    return $dataDokter;
}
?>
