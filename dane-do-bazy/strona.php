<html>
<head>
<link rel="stylesheet" href="/assets/style.css">
<link rel="shortcut icon" href="/inne/favicon.ico">
</head>
<body>
<h1>Kacper Kowalczyk 2Ti nr 16</h1>

<div class="nav">

<?php
include("../assets/menu.php");
?>

</div>

<div class="con">

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

</div>
     </body>
</head>
</html>
