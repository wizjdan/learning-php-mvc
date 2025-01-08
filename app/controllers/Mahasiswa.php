<?php

class Mahasiswa extends Controller{
    //Method Default
    public function index(){
        $data["halaman"] = "Daftar Mahasiswa";

        $this->view("templates/header", $data);
        $this->view("mahasiswa/index", $data);
        $this->view("templates/footer");
    }
}