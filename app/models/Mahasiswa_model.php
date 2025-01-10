<?php

class Mahasiswa_model{
    //Cara lama
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

    //Cara Baru
    private $table = "mahasiswa";
    private $db;

    public function __construct(){
        $this->db = new Database;
    }
        // Method untuk mengambil data tersebut
        public function getAllMahasiswa(){
            // return $this->mhs;

            // $this->stmt = $this->dbh->prepare("SELECT * FROM mahasiswa");
            // $this->stmt->execute();
            // $this->stmt->fetchAll(PDO::FETCH_ASSOC);

            $this->db->querry( ' SELECT * FROM ' . $this->table );
            return $this->db->resultSet();
        }

    //Cata Lama
    // private $dbh;
    // private $stmt;

    // //Koneksi ke dalam database dengan method __construct
    // public function __construct()
    // {
    //     $dsn = "mysql:host=localhost;dbname=phpmvc";
    //     try {
    //         $this->dbh = new PDO( $dsn, "root", "" );
    //     } catch (PDOException $e) {
    //         die($e->getMessage());
    //     }
    // }

    // public function getAllMahasiswa(){
    //     $this->stmt = $this->dbh->prepare("SELECT * FROM mahasiswa");
    //     $this->stmt->execute();
    //     return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    // }

    public function getMahasiswaById($id){
        $this->db->querry("SELECT * FROM" . $this->table . "WHERE id=:id");
        $this->db->bind("id", $id);
        $this->db->singel();
    }

    public function tambahDataMahasiswa($data){
        $querry = "INSERT INTO mahasiwwa 
                    VALUES
                    ('', :nama, :nrp, :email, :jurusan)";
        $this->db->querry($querry);
        $this->db->bind("nama", $data["nama"]);
        $this->db->bind("nrp", $data["nrp"]);
        $this->db->bind("email", $data["email"]);
        $this->db->bind("jurusan", $data["jurusan"]);

        $this->db->execute();

        return $this->db->rowCount();

    }

    public function hapusDataMahasiswa($id){

        $querry = "DELETE FROM" . $this->table . "WHERE id=:id";
        $this->db->querry($querry);
        $this->db->bind("id", $id);

        $this->db->execute();

        return $this->db->rowCount();
    }



}