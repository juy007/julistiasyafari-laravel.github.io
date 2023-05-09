<?php 
    //defined("BASEPATH") or exit("No direct access allowed");

    $root_url = "http://localhost/myphp/back/";
    
    $nama_db = "myphp";
    $user_db = "root";
    $password_db = "";
    $hostname_db = "localhost";

    $koneksi_db = mysqli_connect($hostname_db, $user_db, $password_db, $nama_db);
    if (mysqli_connect_errno()) {
        echo "DB error";
        //header("location:page/notification/database");
    }

    
?>