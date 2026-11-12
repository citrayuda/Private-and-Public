<?php

class Mahasiswa {
    private $nama;

    public function __construct($nama) {
        $this->nama = $nama;
    }

    public function getNama() {
        return $this->nama;
    }
}

$mhs1 = new Mahasiswa("");
echo $mhs1->getNama();

?>