<?php

class Controller {
    //Parameter 1 = view yang ditangkap oleh parameter
    //Parameter 2 = data yang akan kita kirim kan ke dalam view dengan nilai default array kosong.
    public function view($view, $data = []){
        //Panggil isinya yang berada di dalam folder views
        require_once "../app/views/" . $view . ".php";

    }

    public function model( $model ){
        require_once "../app/models/" . $model . ".php";
        // Karena Class harus Instansiasi terlebih dahulu agar bisa digunakan
        return new $model;
    }
    
}