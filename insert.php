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
