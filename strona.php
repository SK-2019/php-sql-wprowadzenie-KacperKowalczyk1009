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
     a class="nav_link" href="daneDoBazy.php"><b>Dane do bazy<b></a> 
  




<?php

echo("jesteś na strona.php");
     
echo("<li>id_pracownicy:".$_POST["id_pracownicy"]);
echo("<li>imię:".$_POST["imie"]);
echo("<li>dzial:".$_POST["dzial"]);
echo("<li>zarobki:".$_POST["zarobki"]);
echo("<li>data_urodzenia:".$_POST["data_urodzenia"]);     

require_once('conn.php');
  $sql = "INSERT INTO pracownicy(`id_pracownicy`, `imie`, `dzial`, `zarobki`, `data_urodzenia`) VALUES(NULL,'".$_POST['imie']."', '".$_POST['dzial']."', '".$_POST['zarobki']."', '".$_POST['data_urodzenia']."')";
  
  
  if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  $conn->close();
?>
     
     </body>
</head>
</html>
