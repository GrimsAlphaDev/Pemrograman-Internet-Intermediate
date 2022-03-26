<?php 
include '../model.php';

if (isset($_POST['submit_simpanKategori'])) {
    $insert = new Model();
    if ($insert->insertKategori($_POST) > 0) {
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
			document.location.href = 'tambah_kategori.php';
			</script>
		";
	}
}

if (isset($_GET['id_kategori'])) 
{
    $id = $_GET['id_kategori'];
    $model = new Model();
    
    if ($model->hapusKategori($id) > 0) {
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


if (isset($_POST['submit_editKategori'])) {
    $edit = new Model();
    if ($edit->editKategori($_POST) > 0) {
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
			// document.location.href = 'edit_kategori.php';
			</script>
		";
        
	}
}

?>