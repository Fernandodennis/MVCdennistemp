<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Dokter</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a href="pasien.php" class="navbar-brand">My App</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a href="pasien.php" class="nav-link" aria-current="page">Pasien</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link" aria-current="page">Dokter</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link" aria-current="page">Kunjungan</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="row mt-3">
        <div class="col-sm">
    <h3>Tabel Dokter</h3>
    </div>
    </div>
    <a href="tambahdokter.php" class="btn btn-primary btn-sm d-flex justify-content-center">Tambah Data</a>
    <table class="table table-striped table-hover">
        <tr>
            <th>No</th>
            <th>ID Dokter</th>
            <th>Nama Dokter</th>
            <th>Spesialis</th>
            <th>Alamat</th>
            <th>Action</th>
        </tr>
        <?php $no = 1; foreach ($dataDokter as $dokter): ?>
        <tr>
            <td><?= $no++; ?></td>
            <td><?= $dokter['idDokter']; ?></td>
            <td><?= $dokter['namaDokter']; ?></td>
            <td><?= $dokter['spesialis']; ?></td>
            <td><?= $dokter['alamat']; ?></td>
            <td>
                <a href="editdokter.php?edit=<?= $dokter['idDokter']; ?>" class="btn btn-warning btn-sm">Edit</a>
                <a href="deletedokter.php?idDokter=<?= $dokter['idDokter']; ?>" class="btn btn-danger btn-sm">Hapus</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</div>
</body>
</html>
