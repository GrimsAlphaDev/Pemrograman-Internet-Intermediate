<?php 
include '../template/header.php' ;
include '../model.php';
$model = new Model();
$pinjam = $model->tampil_data("SELECT id_buku,judul_buku FROM buku");

?>
<h2>Tambah Peminjaman</h2><br>

<form action="processPeminjaman.php" method="post">

  <div class="mb-3">
    <label for="namaPeminjam" class="form-label">Nama Peminjam</label>
    <input type="text" class="form-control" name="nama" id="namaPeminjam" required>
  </div>
  
  <div class="mb-3">
    <label for="nama_buku" class="form-label">Judul Buku</label>
    <select class="form-select mb-2" name="nama_buku">
      <option selected disabled>Pilih Buku</option>
      <?php foreach ($pinjam as $data) : ?>
       <option value="<?= $data['id_buku'] ?>"><?= $data['judul_buku'] ?></option>
      <?php endforeach; ?>
    </select>
    <a href="tambah_kategori.php">Tambah Buku</a><br>
  </div>

  <div class="mb-3">
    <label for="tglPinjam" class="form-label">Tanggal Pinjam</label>
    <input type="date" class="form-control" name="tglPinjam" id="tglPinjam" required>
  </div>

  <div class="mb-3">
    <label for="durasi" class="form-label">Durasi Pinjam</label>
    <select class="form-select mb-2" name="durasi">
      <option selected disabled>Pilih Durasi Pinjam</option>
      <?php for ($i=1; $i < 8 ; $i++) : ?>
       <option value="<?= $i ?> Hari"><?= $i ?> Hari</option>
      <?php endfor; ?>
    </select>
  </div>

  <button type="submit" name="submit_simpanPeminjaman" class="btn btn-primary">Submit</button>
</form>

<?php include '../template/footer.php' ?>