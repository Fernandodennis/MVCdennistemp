<?php
// model_kunjungan.php

function getDataKunjungan() {
    // Koneksi ke database
    $conn = mysqli_connect("localhost", "root", "", "denky_xipplg2");


    // Cek koneksi
    if (!$conn) {
        die("Koneksi gagal: " . mysqli_connect_error());
    }

    // Query untuk mengambil data kunjungan
    $query = "SELECT * FROM kunjungan";
    $result = mysqli_query($conn, $query);

    // Inisialisasi array untuk menyimpan data
    $dataKunjungan = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $dataKunjungan[] = $row;
    }

    // Tutup koneksi
    mysqli_close($conn);

    return $dataKunjungan;
}
?>
