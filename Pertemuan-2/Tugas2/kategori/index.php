<?php include '../template/header.php' ?>
<?php

include '../model.php';
$model = new Model();
$kategori = $model->tampil_data("SELECT * FROM kategori");
$index = 1;

?>


<h2> Kategori </h2>


<a href="tambah_kategori.php" class="btn btn-primary">Tambah Kategori</a>

<table class="table">
    <thead>
        <th>No</th>
        <th>Nama Kategori</th>
        <th>Action</th>
    </thead>
    
    <?php foreach ($kategori as $data) : ?>
    <tbody>
        <td><?= $index ?></td>
        <td><?= $data['nama_kategori'] ?></td>
        <td>
            <a href="edit_kategori.php?id_kategori=<?= $data['id_kategori'] ?>" class="btn btn-primary">Edit</a>
            <a href="processKategori.php?id_kategori=<?= $data['id_kategori'] ?>" class="btn btn-danger text-white" onclick="return confirm('Apakah Anda Yakin ? ')">Delete</a>
        </td>
    </tbody>
    <?php $index++ ?>
    <?php endforeach; ?>

</table>

<?php include '../template/footer.php' ?>