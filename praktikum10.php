<?php


class Mahasiswa
{
    private $nim, $nama, $semester, $prodi, $nilai;


    public function __construct($nim, $nama, $prodi, $semester)
    {
        $this->nim = $nim;
        $this->nama = $nama;
        $this->prodi = $prodi;
        $this->semester = $semester;
    }


    public function setNim($nim)
    {
        $this->nim = $nim;
    }


    public function getNim()
    {
        return $this->nim;
    }


    public function setNama($nama)
    {
        $this->nama = $nama;
    }


    public function getNama()
    {
        return $this->nama;
    }


    public function setProdi($prodi)
    {
        $this->prodi = $prodi;
    }


    public function getProdi()
    {
        return $this->prodi;
    }


    public function setSemester($semester)
    {
        $this->semester = $semester;
    }


    public function getSemester()
    {
        return $this->semester;
    }


    public function setNilai($nilai)
    {
        $this->nilai = $nilai;
    }


    public function getNilai()
    {
        // if ($this->nilai <= 100 && $this->nilai >= 0) {
        //     # code...
        //     return $this->nilai;
        // } else {
        //     return null;
        // }
        return $this->nilai;
    }


    public function tentukanGrade()
    {
        if ($this->nilai <= 100 && $this->nilai >= 80) {
            # code...
            echo "Grade : A <br>";
        } else if ($this->nilai <= 79 && $this->nilai >= 70) {
            # code...
            echo "Grade : B <br>";
        } else if ($this->nilai <= 69 && $this->nilai >= 60) {
            # code...
            echo "Grade : C <br>";
        } else if ($this->nilai <= 59 && $this->nilai >= 500) {
            # code...
            echo "Grade : D <br>";
        } else if ($this->nilai <= 49 && $this->nilai >= 0) {
            # code...
            echo "Grade : E <br>";
        } else {
            # code...
            echo "Grade : Nilai tidak valid <br>";
        }


    }
}


$mhs1 = new Mahasiswa("12345", "Aufi", "Sistem Informasi", 2);
$mhs1->setNilai(900);


echo "NIM : " . $mhs1->getNim() . "<br>";
echo "Nama : " . $mhs1->getNama() . "<br>";
echo "Prodi : " . $mhs1->getProdi() . "<br>";
echo "Semester : " . $mhs1->getSemester() . "<br>";
echo "NIlai : " . $mhs1->getNilai() . "<br>";
$mhs1->tentukanGrade();





