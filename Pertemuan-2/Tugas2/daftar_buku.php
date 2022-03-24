<?php
    include 'model.php';
    $model = new Model();
    $index = 1;
    $result = $model->tampil_data();
?>
<?php include 'template/header.php' ?>
<h2>Daftar Buku</h2>

<a href="tambah_buku.php" class="btn btn-primary">Tambah Buku</a>

<table class="table">
    <thead>
        <th>No</th>
        <th>Nama Buku</th>
        <th>Lembar</th>
        <th>Author</th>
        <th>Gambar</th>
        <th>Action</th>
    </thead>
    
    <?php foreach ($result as $data) : ?>
    <tbody>
        <td><?= $index ?></td>
        <td><?= $data['judul_buku'] ?></td>
        <td><?= $data['lembar'] ?></td>
        <td><?= $data['author'] ?></td>
        <td><img src="template/plugins/images/books/<?= $data['gambar'] ?>" alt="$data['judul_buku'] ?>" style = "width :50px;"></td>
        <!-- <td><?php var_dump($data) ?></td> -->
        <td>
            <a href="edit.php?id_buku=<?= $data['id_buku'] ?>" class="btn btn-primary">Edit</a>
            <a href="process.php?id_buku=<?= $data['id_buku'] ?>" class="btn btn-danger text-white" onclick="return confirm('Apakah Anda Yakin ? ')">Delete</a>
        </td>
    </tbody>
    <?php $index++ ?>
    <?php endforeach; ?>

</table>
<?php include 'template/footer.php' ?>