<?php include 'template/header.php' ?>
<h2>Tambah Buku</h2><br>

<form>
  <div class="mb-3">
    <label for="judulbuku" class="form-label">Judul Buku</label>
    <input type="text" class="form-control" name="judul" id="judulbuku" required>
</div>
<div class="mb-3">
  <label for="kategori" class="form-label">Judul Buku</label>
  <select class="form-select" name="kategori">
  <option selected disabled>Pilih Kategori</option>
  <option value="1">One</option>
  </select>
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
    <input type="file" class="form-control" id="gambar">
  </div>
 
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

<?php include 'template/footer.php' ?>