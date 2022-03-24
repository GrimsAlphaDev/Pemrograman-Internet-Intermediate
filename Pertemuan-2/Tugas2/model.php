<?php
    include 'connection.php'; 
    class Model extends Connection
    {
    
        public function __construct()
        {
            $this->conn = $this->get_connection();
        }

        public function tampil_data($sql)
        {
            $bind = $this->conn->query($sql);
            return $bind;
            while ($obj = $bind->fetch_object()) {
                $baris[] = $obj;
            }
            if (!empty($baris)) 
            { 
                return $baris;
            }
        }

        public function insertBook($data)
        {
            $judul = $data["judul"];
	        $kategori = $data["kategori"];
	        $lembar = $data["lembar"];
	        $author = $data["author"];

            $gambar = $this->upload($author); 
            if (!$gambar) {
                return false ;
            }

            $sql = "INSERT INTO buku (judul_buku, Kategori, lembar, author, gambar) VALUES ('$judul', '$kategori',
            '$lembar', '$author', '$gambar')";
            
            $this->conn->query($sql);
            return mysqli_affected_rows($this->conn);
            // return mysqli_affected_rows($this->conn);
            
        }

        public function upload($author){

            $nama = $_FILES['gambar']['name'];
            $tempat = $_FILES['gambar']['tmp_name'];
            $error = $_FILES['gambar']['error'];
            $size = $_FILES['gambar']['size'];
        
            // apakah ada gambar yang diup
        
            if ($error == 4) {
                echo "
                        <script>alert('Silahkan Upload Gambar Terlebih Dahulu !')</script>
                ";
                return false;
            }
        
            // Cek apakah bukan gambar yang diupload
            $ekstensivalid = ["jpeg","jpg","png"]; 
            $ekstensigambar = explode('.', $nama);
            $ekstensigambar = strtolower(end($ekstensigambar));
        
            // Cek apakah Gambar Yang diupload valid
            if (!in_array($ekstensigambar, $ekstensivalid)) {
                echo "
                        <script>alert('Yang Anda Upload Bukan Gambar !')</script>
                ";
                return false;
            }
        
            // Cek apakah size ukuran gambar yang diupload melebihi batas maksimal yaitu 2 mb
            if ($size > 3000000) {
                echo "
                        <script>alert('Ukuran Foto Anda Terlalu Besar (Max 3mb) ')</script>
                ";
                return false;
            }
        
            // Jika Lolos pengecekan maka gabar siap di up
        
            // mengganti nama gambar 
            $namabaru = time() . '-' . $author  . '.' . $ekstensigambar;
           
        
            if (move_uploaded_file($tempat, 'template/plugins/images/books/'.$namabaru)) {
                return $namabaru;
            }
        
        }

        public function hapusBuku($id) {

            $sql = "DELETE FROM buku WHERE id_buku='$id'";
            $this->conn->query($sql);
            return mysqli_affected_rows($this->conn);
        }
        
        public function editBuku($data){
            global $konek;
            $id = $data["id"];
            $nim = $data["nim"];
            $nama = $data["nama"];
            $kelas = $data["kelas"];
            $alamat = $data["alamat"];
            $gambarlama = $data["gambarlama"];
        
            if ($_FILES['gambar']['error'] === 4) {
                $gambar = $gambarlama;
            } else  {
                $gambar = upload();
            }
            
        
            $query = "UPDATE siswa SET 
                    nim = '$nim',
                    nama = '$nama',
                    kelas = '$kelas',
                    alamat = '$alamat',
                    gambar = '$gambar'
                    WHERE id = '$id'
            ";
        
            mysqli_query($konek, $query);
            return mysqli_affected_rows($konek);
        }
        
        function cari($keyword){
            $query = "SELECT *FROM siswa WHERE
                    nim LIKE '%$keyword%' OR
                    nama LIKE '%$keyword%' OR
                    kelas LIKE '%$keyword%' OR
                    alamat LIKE '%$keyword%' 
            ";
        
            return tampil($query);
        }

}

?>