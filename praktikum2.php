<?php

class Mahasiswa {

    private $nama;

    // SETTER: untuk mengisi/mengubah nama
    public function setNama($nama) {
        $this->nama = $nama;
    }

    // GETTER: untuk membaca nama
    public function getNama() {
        return $this->nama;
    }

}

// 1. Buat object
$mhs1 = new Mahasiswa();

// 2. Isi nama lewat setter
$mhs1->setNama("Andi");
echo "Nama: " . $mhs1->getNama();   // Nama: Andi

echo "<br>";

// 3. Ubah nama lewat setter
$mhs1->setNama("Budi");
echo "Nama sekarang: " . $mhs1->getNama();   // Nama sekarang: Budi

?>