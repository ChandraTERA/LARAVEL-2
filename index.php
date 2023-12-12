<?php

// Connection to PHPmyadmin
    // $servername = "localhost";
    // $username = "root";
    // $password = "";


    // //Create connection
    // $conn = new mysqli ($servername, $username, $password);

    // //Check Connection
    // if($conn->connect_error) {
    //     die ('Koneksi gagal masuk: ' . $conn->connect_error);
    // }
    // echo "Koneksi berhasil masuk ya";

// Create DB PHPmyadmin
    // $servername = "localhost";
    // $username = "root";
    // $password = "";

    // // Create Connection
    // $conn = new mysqli ($servername, $username, $password);
    
    // // check connection
    // if($conn->connect_error) {
    //     die("Connection failed: " . $conn->connect_error);
    // }

    // // Create database
    // $sql ="CREATE DATABASE db_barang";
    // if($conn->query($sql) === TRUE) {
    //     echo "DATABASE berhasil di buat";
    // }else {
    //     echo "DATABASE gagal di buat" . $conn->error;
    // }

// Create TABLE Mahasiswa
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "db_barang";
    
    // Create connection
    $conn = new mysqli ($servername, $username, $password, $dbname);
    
    // Check connection
    if(!$conn) {
        die ("Koneksi gagal masuk " . mysqli_connect_error());
    }

    // Create Table Mahasiswa
    $sql = "CREATE TABLE tb_barang (
        kode INT(12) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        item VARCHAR(100) NOT NULL,
        merek VARCHAR(100) NOT NULL,
        tahun_buatan VARCHAR(100) NOT NULL,
        kondisi VARCHAR(100) NOT NULL,
        harga VARCHAR(100) NOT NULL,
        lokasi VARCHAR (100),
        reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP)";
    
        if(mysqli_query($conn, $sql)) {
            echo "Table sudah dibuat";
        }else {
            echo "Table gagal di buat" .mysqli_error($conn);
        }

    mysqli_close($conn);
?>