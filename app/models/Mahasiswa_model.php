<?php

class Mahasiswa_model{
    // private $mhs = 
    // [
    //     [
    //     "nama" => "Pangestu Nugraha",
    //     "nrp" => "24330001",
    //     "email" => "pangestu@gmail.com",
    //     "jurusan" => "Teknik Informatika"
    //     ],
    //     [
    //     "nama" => "Indra Wahyu",
    //     "nrp" => "24320001",
    //     "email" => "indra@gmail.com",
    //     "jurusan" => "Farmasi"
    //     ],
    //     [
    //     "nama" => "Masiya Rivita",
    //     "nrp" => "24310001",
    //     "email" => "maisya@gmail.com",
    //     "jurusan" => "Teknik Pangan"
    //     ]
    // ];
    
    //Buat penampung untuk koneksi ke Database
    private $dbh; //database hangler
    private $stmt; //statement

    //Koneksi ke database di dalam methdo __construct. Ketka model di panggil yang pertama kali di lakukan adalah koneksi terlebih dahulu ke dalam database

    public function __construct(){
        //Jangan menyimpan username dan password database kalian di difile ini

        //dsn = data source name
        //Untuk konekti ke PDO
        $dsn = "mysql:host=localhost:8080;dbname=phpmvc";
        try{
            $this->dbh = new PDO($dsn, "root", "");
        }catch(PDOException $e){
            die($e->getMessage());
        }
    }

        //Method untuk mengambil data tersebut
        public function getAllMahasiswa(){
            // return $this->mhs;

            $this->stmt = $this->dbh->prepare("SELECT * FROM mahasiswa");
            $this->stmt->execute();
            $this->stmt->fetchAll(PDO::FETCH_ASSOC);
        }
}