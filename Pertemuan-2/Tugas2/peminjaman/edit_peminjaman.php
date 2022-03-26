<?php
    include '../model.php';
    $model = new Model();
    $id = $_GET['id_peminjaman'];
    $pinjam = $model->tampil_data("SELECT * FROM peminjaman WHERE id_peminjaman = '$id'")[0];
    $buku = $model->tampil_data("SELECT id_buku,judul_buku FROM buku");
    var_dump($pinjam);
    var_dump($buku);
    // die;
    
?>
<?php include '../template/header.php' ?>
<h2>Edit Peminjaman</h2>

<a href="tambah_peminjaman.php" class="btn btn-primary mb-5 mt-2">Tambah Peminjaman</a>
<form action="processPeminjaman.php" method="post">
	
    <input type="hidden" name="id_peminjaman" value="<?php echo $pinjam['id_peminjaman']; ?>">
	
	<div class="mb-3">
    <label for="nama_peminjam" class="form-label">Nama Peminjam</label>
    <input type="text" class="form-control" id="nama_peminjam" name="nama_peminjam" value="<?= $pinjam['nama_peminjam']; ?>">
    </div>

    <div class="mb-3">
    <label for="nama_buku" class="form-label">Nama Buku</label>
    <select name="nama_buku" class="form-control" id="">
        <?php foreach($buku as $b) : ?>
        <option value="<?= $b['id_buku'] ?>"
            <?php if($pinjam['id_buku'] == $b['id_buku']) : ?>
                selected
            <?php endif; ?>
        ><?= $b['judul_buku'] ?></option>
        <?php endforeach; ?>
    </select>
    </div>

    <div class="mb-3">
    <label for="tglPinjam" class="form-label">Tanggal Pinjam</label>
    <input type="date" class="form-control" name="tglPinjam" id="tglPinjam" value="<?= $pinjam['tgl_pinjam'] ?>" required>
    </div>

    <div class="mb-3">
    <label for="durasi" class="form-label">Durasi Pinjam</label>
    <select class="form-select mb-2" name="durasi">
      <option selected disabled>Pilih Durasi Pinjam</option>
      <?php for ($i=1; $i < 8 ; $i++) : ?>
        <option value="<?= $i ?> Hari"
            <?php if($pinjam['durasi_pinjam'] == $i . " Hari") : ?>
                selected
            <?php endif; ?>
        ><?= $i ?> Hari</option>
      <?php endfor; ?>
    </select>
  </div>
	
	<button type="sumbit" name="submit_editPeminjaman" class="btn btn-info text-white"> Edit </button>

</form>

<?php include '../template/footer.php' ?>
