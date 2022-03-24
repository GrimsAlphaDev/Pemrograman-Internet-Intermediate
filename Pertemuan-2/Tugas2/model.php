<?php
    include 'connection.php'; 
    class Model extends Connection
    {
    
        public function __construct()
        {
            $this->conn = $this->get_connection();
        }

        public function tampil_data()
        {
            $sql = "SELECT * FROM buku";
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

        public function insert($nim, $nama, $uts, $uas, $tugas)
        {
            $na = $this->na($uts, $tugas, $uas);
            $status = $this->status($na);
            $sql = "INSERT INTO tbl_nilai (nim, nama, uts, uas, tugas, na, status) VALUES ('$nim', '$nama',
            '$uts', '$uas', '$tugas', '$na', '$status')";
            $this->conn->query($sql);
            }
}

?>