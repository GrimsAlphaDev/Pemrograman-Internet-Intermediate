<?php
    include 'model.php';
    $model = new Model();
    $id = $_GET['id_buku'];
    $result = $model->tampil_data("SELECT * FROM buku WHERE id_buku = '$id'")[0];
?>
<?php include 'template/header.php' ?>
<h2>Tambah Buku</h2>

<a href="tambah_buku.php" class="btn btn-primary">Tambah Buku</a>
<?php var_dump($result) ?>
<form action="processBuku.php" method="post" enctype="multipart/form-data">
	
    <input type="hidden" name="id_buku" value="<?php echo $result['id_buku']; ?>">
	<input type="hidden" name="gambarlama" value="<?php echo $result['gambar']; ?>">

	<div class="mb-3">
    <label for="judul_buku" class="form-label">Judul Buku</label>
    <input type="text" class="form-control" id="judul_buku" name="judul_buku" value="<?= $result['judul_buku']; ?>">
    </div>
	
    <div class="mb-3">
    <label for="Kategori" class="form-label"></label>
    <select name="kategori" class="form-control" id="">
        <option value="<?= $result['kategori'] ?>">Pilih Kategori</option>
       
    </select>
    </div>
    
    <div class="mb-3">
    <label for="lembar" class="form-label">Judul Buku</label>
    <input type="number" class="form-control" id="lembar" name="lembar" value="<?= $result['lembar']; ?>">
    </div>

	<button type="sumbit" name="submit">| Edit |</button>

</form>

<?php include 'template/footer.php' ?>
