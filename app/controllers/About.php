<?php

class About{

    //Method Default
    public function index($nama = "Pangestu Nugraha", $pekerjaan = "Junior Programmer"){
        echo "Halo, nama saya $nama. Saya adalah seorang $pekerjaan";
    }

    public function page(){
        echo "about/page";
    }
}