<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="/assets/style.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Formularz</title>
  <link rel="shortcut icon" href="/inne/favicon.ico">
</head>
<style>
                body {
          background-image:url(https://images3.alphacoders.com/999/thumb-1920-999328.jpg);
          background-repeat: no-repeat;
          background-attachment: fixed;
          background-size: cover;

                }
	</style>	

<body>

  
<div class="nav">

<?php
include("../assets/header.php");
include("../assets/menu.php");
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
