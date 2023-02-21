<?php

require("Sivitas.php");
echo "<p><h1>Data Mahasiswa</h1></p>";
echo '<hr>';
echo "<table>";

$temp = new Sivitas();

//$temp->setnik("3204")
$temp->setnik("320429480xxxxx");
$temp->setnama("Elsa Nabiilah");
$temp->setjk("P");
$temp->setnim("210998626389");
$temp->setprodi("kriminologi");
$temp->setfak("FH");
$temp->setuniv("Universitas Indonesia");
$temp->setemail("el@ui.edu");

echo "<tr>" . "<td>" . 'NIK'          . "</td>" . "<td>" . ':' . "</td>" . "<td>" . $temp->getnik() .     "</td>" . "</tr>";
echo "<tr>" . "<td>" . 'Nama'         . "</td>" . "<td>" . ':' . "</td>" . "<td>" . $temp->getnama() .     "</td>" . "</tr>";
echo "<tr>" . "<td>" . 'Jenis Kelamin' . "</td>" . "<td>" . ':' . "</td>" . "<td>" . $temp->getjk() .      "</td>" . "</tr>";
echo "<tr>" . "<td>" . 'Universitas'  . "</td>" . "<td>" . ':' . "</td>" . "<td>" . $temp->getuniv() .  "</td>" . "</tr>";
echo "<tr>" . "<td>" . 'Email'        . "</td>" . "<td>" . ':' . "</td>" . "<td>" . $temp->getemail() . "</td>" . "</tr>";
echo "<tr>" . "<td>" . 'NIM'          . "</td>" . "<td>" . ':' . "</td>" . "<td>" . $temp->getnim() .   "</td>" . "</tr>";
echo "<tr>" . "<td>" . 'Fakultas'     . "</td>" . "<td>" . ':' . "</td>" . "<td>" . $temp->getfak() .      "</td>" . "</tr>";
echo "<tr>" . "<td>" . 'Jurusan'      . "</td>" . "<td>" . ':' . "</td>" . "<td>" . $temp->getprof() .  "</td>" . "</tr>";
echo "</table>";
echo '<hr>';


// $temp->printnik();
// $temp->printnama();
// $temp->printjk();
// $temp->printnim();
// $temp->printps();
// $temp->printfak();
// $temp->printmail();
// $temp->printuniv();
// //echo "<tr>";
// echo "<tr><td>NIM</td><td>:</td><td>" . $temp->getNIK() . "</td></tr>" . "</br>" .
//     "<tr><td>Nama</td><td>:</td><td>" . $temp->getnama() . "</td></tr>" . "</br>";
// "<tr><td>Kelas</td><td>:</td><td>" . $temp->getjk() . "</td></tr>" . "</br";
// "<tr><td>Prodi</td><td>:</td><td>" . $this->getps() . "</td></tr>" .
// "<tr><td>Fakultas</td><td>:</td><td>" . $this->getfaku() . "</td><tr>" .
// "<tr/>";

echo "<table>";
$temp2 = new Sivitas();

$temp2->setnik("320429480xxxxx");
$temp2->setnama("Wonwoo");
$temp2->setjk("L");
$temp2->setnim("210998626389");
$temp2->setprodi("Ilmu Komputer");
$temp2->setfak("FPMIPA");
$temp2->setuniv("Universitas Pendidikan Indonesia");
$temp2->setemail("woo@upi.edu");


//echo "<p><h1>Data Mahasiswa</h1></p>";
echo "<tr>" . "<td>" . 'NIK'          . "</td>" . "<td>" . ':' . "</td>" . "<td>" . $temp2->getnik() .     "</td>" . "</tr>";
echo "<tr>" . "<td>" . 'Nama'         . "</td>" . "<td>" . ':' . "</td>" . "<td>" . $temp2->getnama() .     "</td>" . "</tr>";
echo "<tr>" . "<td>" . 'Jenis Kelamin' . "</td>" . "<td>" . ':' . "</td>" . "<td>" . $temp2->getjk() .      "</td>" . "</tr>";
echo "<tr>" . "<td>" . 'Universitas'  . "</td>" . "<td>" . ':' . "</td>" . "<td>" . $temp2->getuniv() .  "</td>" . "</tr>";
echo "<tr>" . "<td>" . 'Email'        . "</td>" . "<td>" . ':' . "</td>" . "<td>" . $temp2->getemail() . "</td>" . "</tr>";
echo "<tr>" . "<td>" . 'NIM'          . "</td>" . "<td>" . ':' . "</td>" . "<td>" . $temp2->getnim() .   "</td>" . "</tr>";
echo "<tr>" . "<td>" . 'Fakultas'     . "</td>" . "<td>" . ':' . "</td>" . "<td>" . $temp2->getfak() .      "</td>" . "</tr>";
echo "<tr>" . "<td>" . 'Jurusan'      . "</td>" . "<td>" . ':' . "</td>" . "<td>" . $temp2->getprof() .  "</td>" . "</tr>";
echo "</table>";
// echo '<hr>';
// $temp2->printnik();
// $temp2->printnama();
// $temp2->printjk();
// $temp2->printnim();
// $temp2->printps();
// $temp2->printfak();
// $temp2->printmail();
// $temp2->printuniv();

