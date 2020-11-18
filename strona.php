<?php

echo("jesteś na strona.php");

echo("<li>imię:".$_POST["imie"]);
echo("<li>nazwisko:".$_POST["nazwisko"]);
echo("<li>klasa:".$_POST["klasa"]);

require_once('conn.php');
  $sql = "INSERT INTO pracownicy (imie, nazwisko)
  VALUES ('John', 'Doe')";
  
  if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  $conn->close();
?>
