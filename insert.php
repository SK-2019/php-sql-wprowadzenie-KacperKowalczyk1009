<?php

echo("jesteś na strona.php");
     
echo("<li>name:".$_POST["name"]);
echo("<li>dzial:".$_POST["dzial"]);
echo("<li>zarobki:".$_POST["zarobki"]);
echo("<li>data_urodzenia:".$_POST["data_urodzenia"]);     

require_once('conn.php');
  $sql = "INSERT INTO pracownik(`name`, `dzial`, `zarobki`, `data_urodzenia`) VALUES(NULL,'".$_POST['name']."', '".$_POST['dzial']."', '".$_POST['zarobki']."', '".$_POST['data_urodzenia']."')";
  
  
  if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  $conn->close();
?>
