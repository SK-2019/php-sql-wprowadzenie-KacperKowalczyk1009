<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
</head>
<body>
<h1>Kacper Kowalczyk 2Ti nr 16</h1>
<a href="https://github.com/SK-2019/php-sql-wprowadzenie-KacperKowalczyk1009"> Mój GITHUB </a>
   <a class="nav_link" href="pracownicy.php"><b>Pracownicy<b></a>
   <a class="nav_link" href="funkcjeagregujace.php"><b>Funkcje Agregujace<b></a>
   <a class="nav_link" href="pracownicy_organizacja.php"><b>Pracownicy Organizacja<b></a>
   <a class="nav_link" href="/">Strona Glowna</a>  
   <a class="nav_link" href="formularz.html"><b>Formularz<b></a>
    <a class="nav_link" href="daneDoBazy.html"><b>Dane do bazy<b></a>  
       <a class="nav_link" href="function.php"><b>Function<b></a>




<?php
  
            
  echo("<li>ID: ".$_POST['id']."</li>");

  require_once("conn.php");

  $sql = "DELETE FROM pracownicy WHERE id_pracownicy='".$_POST['id']."'";
  
  
  if ($conn->query($sql) === TRUE) {
    echo("Record deleted successfully!");
  } else {
    echo("Error: " . $sql . "<br>" . $conn->error);
  }
  $conn->close();


?>

</body>
   </html>
