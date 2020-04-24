<?php
include 'konekcija.php';
 session_start();

if (!isset($_SESSION['skor'])) {
  $_SESSION['skor'] = 0;
}

if ($_POST) {
  $br = $_POST['br'];
  $izbor = $_POST['izbor'];
  $sledeci = $br + 1;

  $upit = "select * from pitanja";
  $rezultat = $baza->query($upit);
  $ukupno = $rezultat->num_rows;

  $upit = "select * from odgovori where br_pitanja = '$br' and tacno = 1";

  $rezultat = $baza->query($upit);

  $red = $rezultat->fetch_assoc();

  $tacan_odgovor = $red['id'];

  if ($tacan_odgovor == $izbor) {

    $_SESSION['skor']++;

  }

  if ($br == $ukupno) {

      header("location: kraj.php");
      exit();
  }

  else {
      header("location: pitanje.php?n=" . $sledeci);
}

}
 ?>
