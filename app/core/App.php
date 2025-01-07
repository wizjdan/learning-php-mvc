<?php

class App {
    protected $controller = "Home"; //Controller Default
    protected $method = "index"; //Method Default
    protected $params = [];

    public function __construct(){
        $url = $this->parseURL();

        //Controller
        if( file_exists("../app/controllers/" . $url[0] . ".php") ){
            $this->controller = $url[0];
            unset($url[0]);
        }

        //Instansiasi Controller
        require_once "../app/controllers/" . $this->controller . ".php";
        $this->controller = new $this->controller;

        //Method
        if( isset($url[1]) ){
            if(method_exists($this->controller, $url[1])){
                $this->method = $url[1];
                unset($url[1]);
            }
        }

        //Params
        if( !empty($url) ){
            $this->params = array_values($url);
        }

        //Jalankan contrller dan method serta jalankan params jika ada
        call_user_func_array([$this->controller, $this->method], $this->params );
 
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
