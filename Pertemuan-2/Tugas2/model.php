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
            // return $bind;
            $rows = [];
            while ($row = mysqli_fetch_assoc($bind)) {
                $rows[] = $row;
            } 
            return $rows;
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

            $sql = "INSERT INTO buku (id_kategori, judul_buku, lembar, author, gambar) VALUES ( '$kategori','$judul',
            '$lembar', '$author', '$gambar')";
            
            $this->conn->query($sql);
            return mysqli_affected_rows($this->conn);
            
        }
       
        public function insertKategori($data)
        {
            $kategori = $data["kategori"];

            $sql = "INSERT INTO kategori (nama_kategori) VALUES ( '$kategori')";
            
            $this->conn->query($sql);
            return mysqli_affected_rows($this->conn);
            
        }
        
        public function insertPeminjaman($data)
        {

            $nama = $data["nama"];
            $namaBuku = $data["nama_buku"];
            $tanggalPinjam = $data["tglPinjam"];
            $durasi = $data["durasi"];

            $sql = "INSERT INTO peminjaman (nama_peminjam, id_buku, tgl_pinjam, durasi_pinjam) VALUES ( '$nama', '$namaBuku', '$tanggalPinjam', '$durasi')";
            
            $this->conn->query($sql);
            return mysqli_affected_rows($this->conn);
            
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
        
        public function hapusKategori($id) {

            $sql = "DELETE FROM kategori WHERE id_kategori='$id'";
            $this->conn->query($sql);
            return mysqli_affected_rows($this->conn);
        }
        
        public function hapusPeminjaman($id) {

            $sql = "DELETE FROM peminjaman WHERE id_peminjaman='$id'";
            $this->conn->query($sql);
            return mysqli_affected_rows($this->conn);
        }
        
        public function editBuku($data){
            $id = $data["id_buku"];
            $kategori = $data["kategori"];
            $judul_buku = $data["judul_buku"];
            $lembar = $data["lembar"];
            $author = $data["author"];
            $gambarlama = $data["gambarlama"];
        
            if ($_FILES['gambar']['error'] === 4) {
                $gambar = $gambarlama;
            } else  {
                $gambar = $this->upload($author);
            }
            
        
            $sql = "UPDATE buku SET 
                    id_kategori = '$kategori',
                    judul_buku = '$judul_buku',
                    lembar = '$lembar',
                    author = '$author',
                    gambar = '$gambar'
                    WHERE id_buku = '$id'
            ";
        
            $this->conn->query($sql);
            return mysqli_affected_rows($this->conn);
        }
       
        public function editKategori($data){
            $id = $data["id_kategori"];
            $kategori = $data["nama_kategori"];
    
            $sql = "UPDATE kategori SET 
                    nama_kategori = '$kategori'
                    WHERE id_kategori = '$id'
            ";
        
            $this->conn->query($sql);
            return mysqli_affected_rows($this->conn);
        }
        
        public function editPeminjaman($data){
            $id = $data["id_peminjaman"];
            $nama = $data["nama_peminjam"];
            $idBuku = $data["nama_buku"];
            $tgl = $data["tglPinjam"];
            $durasi  = $data["durasi"]; 
    
            $sql = "UPDATE peminjaman SET 
                    nama_peminjam = '$nama',
                    id_buku = '$idBuku',
                    tgl_pinjam = '$tgl',
                    durasi_pinjam = '$durasi'
                    WHERE id_peminjaman = '$id'
            ";
        
            $this->conn->query($sql);
            return mysqli_affected_rows($this->conn);
        }

}

?>