<?php
$firstname = '';
$lastname = '';
if(isset($_GET['lastname'])){
    $lastname = $_GET['lastname'];
}
if(isset($_GET['firstname'])){
    $firstname = $_GET['firstname'];
}
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="http://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="../style.css">
  <title>PHP | Partie 6</title>
</head>
<body>
  <div class="container text-center bg-secondary">
    <h1 class="text-light">PHP | P6-ex1</h1>
    <nav>
      <a class="link" href="http://pt5ex1/">Partie 5</a>
      <a class="link" href="http://php-partie6/exercice1/index.php">ex1</a>
      <a class="link" href="http://php-partie6/exercice2/index.php">ex2</a>
      <a class="link" href="http://php-partie6/exercice3/index.php">ex3</a>
      <a class="link" href="http://php-partie6/exercice4/index.php">ex4</a>
      <a class="link" href="http://php-partie6/exercice5/index.php">ex5</a>
      <a class="link" href="http://php-partie6/exercice6/index.php">ex6</a>
      <a class="link" href="http://php-partie7/exercice1/index.php">Partie 7</a>
    </nav>
  </div>
  <div class="container text-center">
    <p>Vous êtes M. <?php echo $_GET['firstname'].' '.$_GET['lastname'];?></p>
    <!-- Le & dans le code a été remplacé par '&amp;' dans le lien. C'est qu'en HTML & se code '&amp;' dans le code source -->
    <a href="index.php?lastname=Nemare&amp;firstname=Jean">test url</a>
  </div>
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>
