<?php
include 'konekcija.php';

if(isset($_POST['potvrda'])){

if ((empty($_POST['br_pitanja'])) or (empty($_POST['tekst'])) or (empty($_POST['odgovor1'])) or (empty($_POST['odgovor2'])) or (empty($_POST['odgovor3'])) or (empty($_POST['odgovor4'])) or (empty($_POST['tacan_odgovor'])) ){
  echo "<center><h3>Sva polja moraju biti popunjena, molimo pokusajte ponovo</h3><br><br></center>";
}
else{

  $br_pitanja = $_POST['br_pitanja'];
  $tekst = $_POST['tekst'];

  $odgovori = array();
  $odgovori[1] = $_POST['odgovor1'];
  $odgovori[2] = $_POST['odgovor2'];
  $odgovori[3] = $_POST['odgovor3'];
  $odgovori[4] = $_POST['odgovor4'];
  $tacan_odgovor = $_POST['tacan_odgovor'];

  $upit = "insert into pitanja values ('$br_pitanja','$tekst');";

  $ubaci = $baza->query($upit);

  if($ubaci){

    foreach ($odgovori as $odgovor => $vrednost) {

      if($tacan_odgovor == $odgovor){
        $tacno = 1;
      }
      else {
        $tacno = 0;
      }

        $upit = "insert into odgovori (br_pitanja, tacno, tekst) values ('$br_pitanja', '$tacno', '$vrednost');";
        $ubaci = $baza->query($upit);

        if($ubaci){
          continue;
        }
        else {
          echo "Greska: " . $baza->errno;
          exit();
        }

    }

  }

  $poruka = "Pitanje je dodato.";

}
}

$upit = "select * from pitanja";
$pitanja = $baza->query($upit);
$ukupno = $pitanja->num_rows;
$sledece = $ukupno+1;

 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Davidov seminarski</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  </head>
  <body>
    <div class="card">
    <div class="card-header">
      Davidov seminarski
    </div>
    <div class="card-body">
      <h5 class="card-title">Dodaj pitanje</h5>
      <?php if(isset($poruka)){ echo '<p>' . $poruka . '</p>';} ?>
      <form action="dodaj.php" method="post" class="d-inline-block p-2 bg-primary text-white">
        <label>Broj pitanja</label>
        <input type = 'number' value="<?php echo $sledece; ?>" name = 'br_pitanja'>
        <label>Tekst</label>
        <input type = 'text' name = 'tekst'>
        <label>Odgovor #1</label>
        <input type = 'text' name = 'odgovor1'>
        <label>Odgovor #2</label>
        <input type = 'text' name = 'odgovor2'>
        <label>Odgovor #3</label>
        <input type = 'text' name = 'odgovor3'>
        <label>Odgovor #4</label>
        <input type = 'text' name = 'odgovor4'>
        <label>Tacan odgovor</label>
        <input type = 'number' name = 'tacan_odgovor'>
        <button class="btn btn-light" type="submit" name="potvrda">Potvrdi</button>
      </form>
    </div>
  </div>
<center>
    <a href="indeks.php" class="btn btn-primary">Vrati se na pocetnu stranu</a>
</center>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
