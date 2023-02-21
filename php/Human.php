<?php
/*
Saya [Elsa Nabiilah] [2108805]
mengerjakan LATIHAN 2 dalam mata kuliah Desain Pemrograman Berorientasi Objek
untuk keberkahanNya maka saya tidak melakukan kecurangan seperti yang telah dispesifikasikan.
Aamiin.
*/
class Human
{
    // human menjadi class parent karena
    // meliputi keseluruhan objek class lain
    // artinya class lain memiliki objek Human


    // deklarasi variabel
    private $NIK;
    private $nama;
    private $jk;

    function __construct() //($NIK, $nama, $jk)
    {
        // $this->NIK = $NIK;
        // $this->nama = $nama;
        // $this->jk = $jk;
    }
    // getter setter method
    public function getnik()
    {
        return $this->NIK;
    }

    public function setnik($NIK)
    {
        $this->NIK = $NIK;
    }

    public function getnama()
    {
        return $this->nama;
    }

    public function setnama($nama)
    {
        $this->nama = $nama;
    }

    public function getjk()
    {
        return $this->jk;
    }

    public function setjk($jk)
    {
        $this->jk = $jk;
    }

    // function untuk menampilkan per atribut
    public function printnik()
    {
        // "<tr><td>NIM</td><td>:</td><td>" . $this->getnim() . "</td></tr>" .
        echo "<tr><td>NIK</td><td>:</td><td> " . $this->getnik() . "</td></tr>" . "<br/>";
    }
    public function printnama()
    {
        echo "<tr><td>Nama</td><td>:</td><td>" . $this->getnama() . "<br/>";
    }
    public function printjk()
    {
        echo "<tr><td>Jenis kelamin</td><td>: ", $this->getjk() . "<br/>";
    }
    // destructor
    function __destruct()
    {
    }
}
