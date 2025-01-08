<?php

class Home extends Controller {
    //Method Default
    public function index(){

        $data["halaman"] = "Home";
        $this->view("templates/header", $data);
        $this->view("home/index");
        $this->view("templates/footer");
    }

}