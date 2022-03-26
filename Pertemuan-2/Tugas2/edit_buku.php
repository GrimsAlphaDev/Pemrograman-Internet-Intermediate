<?php
    include 'model.php';
    $model = new Model();
    $id = $_GET['id_buku'];
    $result = $model->tampil_data("SELECT * FROM buku,kategori WHERE id_buku = '$id' AND buku.id_kategori = kategori.id_kategori")[0];
    $kategori = $model->tampil_data("SELECT * FROM kategori");

?>
<?php include 'template/header.php' ?>
<h2>Edit Buku</h2>

<a href="tambah_buku.php" class="btn btn-primary mb-5 mt-2">Tambah Buku</a>
<form action="processBuku.php" method="post" enctype="multipart/form-data">
	
    <input type="hidden" name="id_buku" value="<?php echo $result['id_buku']; ?>">
	<input type="hidden" name="gambarlama" value="<?php echo $result['gambar']; ?>">

	<div class="mb-3">
    <label for="judul_buku" class="form-label">Judul Buku</label>
    <input type="text" class="form-control" id="judul_buku" name="judul_buku" value="<?= $result['judul_buku']; ?>">
    </div>
	
    <div class="mb-3">
    <label for="Kategori" class="form-label">Kategori Buku</label>
    <select name="kategori" class="form-control" id="">
        <?php foreach($kategori as $ktg) : ?>
        <option value="<?= $ktg['id_kategori'] ?>"
            <?php if($result['id_kategori'] == $ktg['id_kategori']) : ?>
                selected
            <?php endif; ?>
        ><?= $ktg['nama_kategori'] ?></option>
        <?php endforeach; ?>
    </select>
    </div>
    
    <div class="mb-3">
    <label for="lembar" class="form-label">Lembar Buku</label>
    <input type="number" class="form-control" id="lembar" name="lembar" value="<?= $result['lembar']; ?>">
    </div>
   
    <div class="mb-3">
    <label for="author" class="form-label">Author</label>
    <input type="text" class="form-control" id="author" name="author" value="<?= $result['author']; ?>">
    </div>

    <div class="mb-3">
    <label for="gambar" class="form-label">Gambar</label>
    <label>Masukan Gambar : </label> <br>
	<img src="template/plugins/images/books/<?= $result['gambar']; ?>" style="width:150px;"><br>
	<input type="file" class="form-control" name="gambar" ><br><br>
    </div>

	<button type="sumbit" name="submit_editBuku" class="btn btn-info text-white"> Edit </button>

</form>

<?php include 'template/footer.php' ?>
