<?php
/*
Saya [Elsa Nabiilah] [2108805]
mengerjakan LATIHAN 2 dalam mata kuliah Desain Pemrograman Berorientasi Objek
untuk keberkahanNya maka saya tidak melakukan kecurangan seperti yang telah dispesifikasikan.
Aamiin.
*/
include "Human.php";

class Mahasiswa extends Human
{
    // class mahasiswa mejadi child/toodler dari class human karena
    // atribut Mahasiswa melekat kaitannya dengan atribut Human karena sam- sama mengarah
    // kepada point-point identitas
    // deklarasi private atribut
    private $nim;
    private $fak;
    private $prodi;

    function __construct() //($nim, $fak, $prodi)
    {
        // $this->nim = $nim;
        // $this->fak = $fak;
        // $this->prodi = $prodi;
    }
    // setter getter method
    public function getnim()
    {
        // getter nim
        return $this->nim;
    }

    public function setnim($nim)
    {
        // setter nim
        $this->nim = $nim;
    }

    public function getfak()
    {
        // getter fakultas
        return $this->fak;
    }

    public function setfak($fak)
    { // setter fakultas
        $this->fak = $fak;
    }

    public function getprof()
    {
        // getter prodi
        return $this->prodi;
    }

    public function setprodi($prodi)
    { // setter prodi
        $this->prodi = $prodi;
    }

    // function untuk menampilkan per atribut
    public function printnim()
    {
        // echo "<tr><td>";
        echo "NIM           : " . $this->getnim() . "<br/>";
        //echo "</td><td>";
        //echo "Email Univ    : " . $this->getemail() . "<br/>";
    }
    public function printps()
    {
        // echo "<tr><td>";
        echo "Program Studi : " . $this->getprof() . "<br/>";
        //echo "</td><td>";
    }
    public function printfak()
    {
        echo "Fakultas      : " . $this->getfak() . "<br/>";
    }

    function __destruct()
    {
    }
}
