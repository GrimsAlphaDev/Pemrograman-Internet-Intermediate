<?php

include 'model.php';

if (isset($_POST['submit_simpanBuku'])) {
    $insert = new Model();
    if ($insert->insertBook($_POST) > 0) {
		echo "
			<script>
			alert('Data Berhasil Ditambahkan');
			document.location.href = 'daftar_buku.php';
			</script>
		";
	} else {
		echo "
			<script>
			alert('Data Gagal Ditambahkan');
			document.location.href = 'tambah_buku.php';
			</script>
		";
	}
}

if (isset($_GET['id_buku'])) 
{
    $id = $_GET['id_buku'];
    $model = new Model();
    
    if ($model->hapusBuku($id) > 0) {
        echo "
                <script>
                alert('Data Berhasil Dihapus');
                document.location.href = 'daftar_buku.php';
                </script>
            ";
    } else {
        echo "
                <script>
                alert('Data Gagal Dihapus');
                document.location.href = 'daftar_buku.php';
                </script>
            ";
    }
    
    
}

if (isset($_POST['submit_editBuku'])) {
    $edit = new Model();
    if ($edit->editBuku($_POST) > 0) {
		echo "
			<script>
			alert('Data Berhasil Diedit');
			document.location.href = 'daftar_buku.php';
			</script>
		";
	} else {
		echo "
			<script>
			alert('Data Gagal Diedit');
			// document.location.href = 'edit_buku.php';
			</script>
		";
        
	}
}
