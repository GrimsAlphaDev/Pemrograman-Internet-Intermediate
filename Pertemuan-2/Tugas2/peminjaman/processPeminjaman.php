<?php 
include '../model.php';

if (isset($_POST['submit_simpanPeminjaman'])) {
    $insert = new Model();
    if ($insert->insertPeminjaman($_POST) > 0) {
		echo "
			<script>
			alert('Data Berhasil Ditambahkan');
			document.location.href = 'index.php';
			</script>
		";
	} else {
		echo "
			<script>
			alert('Data Gagal Ditambahkan');
			document.location.href = 'tambah_peminjaman.php';
			</script>
		";
	}
}

if (isset($_GET['id_peminjaman'])) 
{
    $id = $_GET['id_peminjaman'];
    $model = new Model();
    
    if ($model->hapusPeminjaman($id) > 0) {
        echo "
                <script>
                alert('Data Berhasil Dihapus');
                document.location.href = 'index.php';
                </script>
            ";
    } else {
        echo "
                <script>
                alert('Data Gagal Dihapus');
                document.location.href = 'index.php';
                </script>
            ";
    }
}

if (isset($_POST['submit_editPeminjaman'])) {
    $edit = new Model();
    if ($edit->editPeminjaman($_POST) > 0) {
		echo "
			<script>
			alert('Data Berhasil Diedit');
			document.location.href = 'index.php';
			</script>
		";
	} else {
		echo "
			<script>
			alert('Data Gagal Diedit');
			// document.location.href = 'edit_peminjaman.php';
			</script>
		";
        
	}
}

?>