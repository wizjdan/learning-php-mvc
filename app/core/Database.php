<?php

class Database {
    private $host = DB_HOST;
    private $user = DB_USER;
    private $pass = DB_PASS;
    private $db_name = DB_NAME;

    private $dbh;
    private $stmt;

    //Koneksi ke database di dalam methdo __construct. Ketka model di panggil yang pertama kali di lakukan adalah koneksi terlebih dahulu ke dalam database
    public function __construct(){
        //Jangan menyimpan username dan password database kalian di difile ini

        //dsn = data source name
        //Untuk konekti ke PDO
        $dsn = "mysql:host=" . $this->host . ";dbname=" . $this->db_name;

        //Options

        $option = [
            PDO::ATTR_PERSISTENT => true,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ];

        try {
            $this->dbh = new PDO($dsn,  $this->user,  $this->pass, $option );
        } catch ( PDOException $e ) {
            die($e->getMessage());
        }
    }

    public function querry($querry){

        $this->stmt = $this->dbh->prepare($querry);
    }

    public function bind($param, $value, $type = null){

        if (is_null($type)){
            switch(true){
                case is_int($value) :
                    $type = PDO::PARAM_INT;
                    break;
                case is_bool($value) :
                    $type = PDO::PARAM_BOOL;
                    break;
                case is_null($value) :
                    $type = PDO::PARAM_NULL;
                default:
                $type = PDO::PARAM_STR;
            }
        }
        
        $this->stmt->bindValue($param, $value, $type);

    }

    public function execute(){
        $this->stmt->execute();
    }

    //Jika data banyak
    public function resultSet(){
        $this->execute();
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    //Jika data hanya diinginkan hanya 1
    public function singel(){
        $this->execute();
        return $this->stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function rowCount(){
        $this->stmt->rowCount();
    }

    
}