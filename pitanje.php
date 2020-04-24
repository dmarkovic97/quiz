<?php
include 'konekcija.php';
session_start();

$br = (int) $_GET['n'];

$upit = "select * from pitanja where br_pitanja = '$br'";
$rezultat = $baza->query($upit);
$pitanje = $rezultat->fetch_assoc();

$upit = "select * from odgovori where br_pitanja = '$br'";

$rezultati = $baza->query($upit);

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
  <p>
      <?php echo $pitanje['tekst']; ?>
  </p>
      <form action="provera.php" method="post">
        <div class="form-check">
                <?php while ($red = $rezultati->fetch_assoc()): ?>
                  <input class="form-check-input" type="radio" name="izbor" value="<?php echo $red['id']; ?>" >
  <label class="form-check-label"> <?php echo $red['tekst']; ?> </label><br>
<?php endwhile; ?> </div>

<button class="btn btn-primary" type="submit">Potvrdi</button>
<input type="hidden" name="br" value="<?php echo $br; ?>"/>
</form>

</div>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
