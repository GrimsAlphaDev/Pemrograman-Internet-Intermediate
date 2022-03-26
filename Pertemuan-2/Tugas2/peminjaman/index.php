<?php include '../template/header.php' ?>
<?php

include '../model.php';
$model = new Model();
$pinjam = $model->tampil_data("SELECT * FROM peminjaman,buku WHERE peminjaman.id_buku = buku.id_buku");
$index = 1;
// var_dump($pinjam);
?>


<h2> Table Peminjaman </h2>


<a href="tambah_peminjaman.php" class="btn btn-primary">Tambah Peminjaman</a>

<table class="table">
    <thead>
        <th>No</th>
        <th>Nama Peminjaman</th>
        <th>Nama Buku</th>
        <th>Nama Author Buku</th>
        <th>Tanggal Pinjam</th>
        <th>Durasi Pinjam</th>
        <th>Action</th>
    </thead>
    
    <?php foreach ($pinjam as $data) : ?>
    <tbody>
        <td><?= $index ?></td>
        <td><?= $data['nama_peminjam'] ?></td>
        <td><?= $data['judul_buku'] ?></td>
        <td><?= $data['author'] ?></td>
        <td><?= $data['tgl_pinjam'] ?></td>
        <td><?= $data['durasi_pinjam'] ?></td>
        <td>
            <a href="edit_peminjaman.php?id_peminjaman=<?= $data['id_peminjaman'] ?>" class="btn btn-primary">Edit</a>
            <a href="processPeminjaman.php?id_peminjaman=<?= $data['id_peminjaman'] ?>" class="btn btn-danger text-white" onclick="return confirm('Apakah Anda Yakin ? ')">Delete</a>
        </td>
    </tbody>
    <?php $index++ ?>
    <?php endforeach; ?>

</table>

<?php include '../template/footer.php' ?>