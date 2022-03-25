<?php
include 'model.php';
$model = new Model();
$kategori = $model->tampil_data("SELECT * FROM kategori");

?>
<?php include 'template/header.php' ?>
<h2>Tambah Buku</h2><br>

<form action="processBuku.php" method="post" enctype="multipart/form-data">
  <div class="mb-3">
    <label for="judulbuku" class="form-label">Judul Buku</label>
    <input type="text" class="form-control" name="judul" id="judulbuku" required>
  </div>

  <div class="mb-3">
    <label for="kategori" class="form-label">Kategori Buku</label>
    <select class="form-select mb-2" name="kategori">
      <option selected disabled>Pilih Kategori</option>
      <?php foreach ($kategori as $data) : ?>
       <option value="<?= $data['id_kategori'] ?>"><?= $data['nama_kategori'] ?></option>
      <?php endforeach; ?>
    </select>
    <a href="tambah_kategori.php">Tambah Kategori</a><br>
  </div>

  <div class="mb-3">
    <label for="lembar" class="form-label">Lembar Halaman</label>
    <input type="number" class="form-control" name="lembar" id="lembar" required>
  </div>
  
  <div class="mb-3">
    <label for="author" class="form-label">Author</label>
    <input type="text" class="form-control" name="author" id="author" required>
  </div>
  
  <label for="gambar" class="form-label">Gambar</label>
  <div class="input-group mb-3">
    <input type="file" class="form-control" name="gambar" id="gambar">
  </div>

  <button type="submit" name="submit_simpanBuku" class="btn btn-primary">Submit</button>
</form>

<?php include 'template/footer.php' ?>