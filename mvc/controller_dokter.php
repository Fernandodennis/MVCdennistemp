<?php
// controller_dokter.php

include 'model_dokter.php';

// Panggil data dari model
$dataDokter = getDataDokter();

// Panggil view untuk menampilkan data
include 'view_dokter.php';
?>
 