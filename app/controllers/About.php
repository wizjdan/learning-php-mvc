<?php

class About extends Controller{

    //Method Default
    public function index($nama = "Nugi", $pekerjaan = "Asisten", $umur=28){

        $data["halaman"] = "About";
        $data["nama"] = $nama;
        $data["pekerjaan"] = $pekerjaan;
        $data["umur"] = $umur;
        $this->view("templates/header", $data);
        $this->view("about/index", $data);
        $this->view("templates/footer");
    }

    public function page(){

        $data["halaman"] = "My Page";
        $this->view("templates/header", $data);
        $this->view("about/page");
        $this->view("templates/footer");
    }
}