<?php

class Mahasiswa_model{
    private $mhs = [
        [
        "nama" => "Pangestu Nugraha",
        "nrp" => "24330001",
        "email" => "pangestu@gmail.com",
        "jurusan" => "Teknik Informatika"
        ],
        [
        "nama" => "Indra Wahyu",
        "nrp" => "24320001",
        "email" => "indra@gmail.com",
        "jurusan" => "Farmasi"
        ],
        [
        "nama" => "Masiya Rivita",
        "nrp" => "24310001",
        "email" => "maisya@gmail.com",
        "jurusan" => "Teknik Pangan"
        ]
        ];

        //Method untuk mengambil data tersebut
        public function getAllMahasiswa(){
            return $this->mhs;
        }
}