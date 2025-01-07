<?php

class App {

    public function __construct(){
        $url = $this->parseURL();
        var_dump($url);
    }

    public function parseURL(){
        //Jika ada URL yang dikirimkan
        if (isset($_GET["url"])){
            //rtrim untuk membersihkan tanda / di akhir
            $url = rtrim($_GET["url"], "/");
            //Membersihkan url dari karakter yang aneh
            $url = filter_var($url, FILTER_SANITIZE_URL);
            //Pecah url berdasarkan tanda /
            $url = explode("/", $url);
            return $url;
        }

    }

}
