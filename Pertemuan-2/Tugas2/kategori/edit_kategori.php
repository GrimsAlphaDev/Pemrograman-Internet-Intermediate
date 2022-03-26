<?php
    include '../model.php';
    $model = new Model();
    $id = $_GET['id_kategori'];
    $kategori = $model->tampil_data("SELECT * FROM kategori WHERE id_kategori = '$id'")[0];
    // var_dump($kategori);
    
?>
<?php include '../template/header.php' ?>
<h2>Edit Kategori</h2>

<a href="tambah_kategori.php" class="btn btn-primary mb-5 mt-2">Tambah Kategori</a>
<form action="processKategori.php" method="post">
	
    <input type="hidden" name="id_kategori" value="<?php echo $kategori['id_kategori']; ?>">
	
	<div class="mb-3">
    <label for="nama_kategori" class="form-label">Nama Kategori</label>
    <input type="text" class="form-control" id="nama_kategori" name="nama_kategori" value="<?= $kategori['nama_kategori']; ?>">
    </div>
	
	<button type="sumbit" name="submit_editKategori" class="btn btn-info text-white"> Edit </button>

</form>

<?php include '../template/footer.php' ?>
