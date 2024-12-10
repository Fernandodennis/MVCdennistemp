<?php
// controller_kunjungan.php

include 'model_kunjungan.php';

// Panggil data dari model
$dataKunjungan = getDataKunjungan();

// Panggil view untuk menampilkan data
include 'view_kunjungan.php';
?>
