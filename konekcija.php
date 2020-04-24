<?php

$server='localhost';
$korisnik='root';
$sifra='';
$baza='seminarski';

$baza=new mysqli($server,$korisnik,$sifra,$baza);

if($baza->connect_errno){
  echo 'Greska prilikom povezivanjem.\n' . $baza->connect_errno;
  exit();
}

 ?>
