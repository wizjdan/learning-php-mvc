<?php

class Home extends Controller {
    //Method Default
    public function index(){

        $data["halaman"] = "Home";
        $data["nama"] = $this->model("User_model")->getUser();
        $this->view("templates/header", $data);
        $this->view("home/index", $data);
        $this->view("templates/footer");
    }

}