<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="/assets/style.css">
  <title>Kacper Kowalczyk 2Ti nr 16</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>JS Bin</title>
  <link rel="shortcut icon" href="/inne/favicon.ico">
</head>
<body>
  
<div class="nav">

<?php
include("../assets/menu.php")
?>
   

</div>

  <div class="con">
     <form action="strona.php" method="POST">
      <input type="text" name="imie" placeholder="imie"></br>
     <input type="text" name="dzial" placeholder="dzial"></br>
     <input type="text" name="zarobki" placeholder="zarobki"></br>
     <input type="text" name="data_urodzenia" placeholder="data_urodzenia"></br>
     <input type="submit" value="wyslij do strona.php">

     </div>
  </form>
  </body>
</html>
