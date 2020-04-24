<?php session_start(); ?>

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
      <h5 class="card-title">Kviz</h5>
      <div class="alert alert-success" role="alert">
  <h4 class="alert-heading">Well done!</h4>
  <p>Cestitamo! Ovo je kraj kviza. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed suscipit nec lectus id consequat. Vivamus at euismod libero, nec vehicula quam. Ut rutrum ultricies faucibus. Quisque commodo urna mi, aliquet bibendum ligula finibus vulputate. Praesent pharetra dui libero, non dignissim mauris condimentum quis. Morbi eu justo mi. Nulla eget arcu eget dui venenatis venenatis. Suspendisse et leo nulla. Integer non ornare felis. Integer at auctor sapien. Pellentesque id leo libero. Quisque eu posuere dui.</p>
  <hr>
  <p class="mb-0">Konacan rezultat: <?php echo $_SESSION['skor']; ?> </p>
  <?php unset($_SESSION['skor']); ?>

  <a href="indeks.php" class="btn btn-primary">Ponovo?</a>
</div>
    </div>
  </div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
