<?php 
    // $root_url = "http://localhost/myphp/back/";
    class setdata
    {
        var $db = "myphp"; var $user_db = "root"; var $password_db = ""; var $hostname_db = "localhost"; var $koneksi = "";
        
        function __construct() { $this->koneksi = mysqli_connect($this->hostname_db, $this->user_db, $this->password_db, $this->db); }
    
        function tampil_data($tabel, $sort, $by)
        {
            $query = "SELECT * FROM ".$tabel." ORDER BY ".$sort." ".$by;
            $data = mysqli_query($this->koneksi, $query);
            while ($d = mysqli_fetch_array($data)) { $hasil[] = $d; }
            return $hasil;
        }

        function tampil_data_filter($where, $isiwhere, $tabel, $sort, $by)
        {
            $query = "SELECT * FROM ".$tabel." WHERE ".$where."='".$isiwhere."' ORDER BY ".$sort." ".$by;
            $data = mysqli_query($this->koneksi, $query);
            while ($d = mysqli_fetch_array($data)) { $hasil[] = $d; }
            return $hasil;
        }

        function tambah_data()
        {
            
        }

        function get_data()
        {
            
        }

        function update_data()
        {
            
        }

        function hapus_data()
        {
            
        }
    }

    
?>