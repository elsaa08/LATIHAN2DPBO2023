<?php

require("Sivitas.php");

$temp = new Sivitas();

//$temp->setnik("3204")
$temp->setnik("320429480xxxxx");
$temp->setnama("Elsa Nabiilah");
$temp->setjk("P");
$temp->setnim("210998626389");
$temp->setprodi("kriminologi");
$temp->setfak("FH");
$temp->setuniv("UI");
$temp->setemail("el@ui.edu");


echo "<p><h1>Data Mahasiswa</h1></p>";
echo '<hr>';
$temp->printnik();
$temp->printnama();
$temp->printjk();
$temp->printnim();
$temp->printps();
$temp->printfak();
$temp->printmail();
$temp->printuniv();

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
echo '<hr>';
$temp2->printnik();
$temp2->printnama();
$temp2->printjk();
$temp2->printnim();
$temp2->printps();
$temp2->printfak();
$temp2->printmail();
$temp2->printuniv();
