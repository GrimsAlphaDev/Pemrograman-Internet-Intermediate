<?php include '../template/header.php' ?>
<h2>Tambah Kategori</h2><br>

<form action="processKategori.php" method="post">
  <div class="mb-3">
    <label for="judulKategori" class="form-label">Kategori</label>
    <input type="text" class="form-control" name="kategori" id="judulKategori" required>
  </div>

  <button type="submit" name="submit_simpanKategori" class="btn btn-primary">Submit</button>
</form>

<?php include '../template/footer.php' ?>