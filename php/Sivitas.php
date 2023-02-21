<?php
/*
Saya [Elsa Nabiilah] [2108805]
mengerjakan LATIHAN 2 dalam mata kuliah Desain Pemrograman Berorientasi Objek
untuk keberkahanNya maka saya tidak melakukan kecurangan seperti yang telah dispesifikasikan.
Aamiin.
*/

include "Mahasiswa.php";

class sivitas extends Mahasiswa
{
    // sivitas menjadi child dari mahasiswa karena sesuai dengan
    // hakikatnya setiap mahasiswa pasti memiliki atribut/identitas kampus seperti
    // asal universitas dan email

    //  deklarasi variabel private
    private $univ;
    private $email;

    // conctructor
    function __construct()
    {
        // $this->univ = $univ;
        // $this->email = $email;
    }
    // getter setter method
    public function getuniv()
    {
        return $this->univ;
    }

    public function setuniv($univ)
    {
        $this->univ = $univ;
    }

    public function getemail()
    {
        return $this->email;
    }

    public function setemail($email)
    {
        $this->email = $email;
    }

    // membuat fungsi menampilkan per atribut
    public function printuniv()
    {
        echo "Asal Univ     : " . $this->getuniv() . "<br/>";
    }
    public function printmail()
    {
        echo "Email Univ    : " . $this->getemail() . "<br/>";
    }

    function __destruct()
    {
    }
}
