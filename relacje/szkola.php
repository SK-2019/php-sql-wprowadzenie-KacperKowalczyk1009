<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="/assets/style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/inne/favicon.ico">
    <title>Wiele do wielu</title>
</head>

<style>
                body {
          background-image:url(https://www.teahub.io/photos/full/229-2291507_blue-spirit-zuko-fanart.jpg);
          background-repeat: no-repeat;
          background-attachment: fixed;
          background-size: cover;

                }
	</style>	

<div class="nav">

<?php
include("../assets/header.php");
include("../assets/menu.php");
?>
   

</div>

<div class="con">
<?php

            require_once("../connect.php");
                echo("<h1>Szkoła</h1>");

                $sql = ("SELECT * FROM nauczyciel");
                echo("<h2>".$sql."</h2>");
                $result=$conn->query($sql);
                        echo("<table border=1>");
                        echo("<th>id</th>");
                        echo("<th>nauczyciel</th>");

                        while($row=$result->fetch_assoc()) {
                                echo("<tr>");
                                    echo("<td>".$row["id"]."</td><td>".$row["nauczyciel"]."</td>");
                                echo("</tr>");
                            }
                        echo("</table>");

                
                $sql = ("SELECT * FROM klasa");
                echo("<h2>".$sql."</h2>");
                $result=$conn->query($sql);
                        echo("<table border=1>");
                        echo("<th>id</th>");
                        echo("<th>klasa</th>");

                        while($row=$result->fetch_assoc()) {
                                echo("<tr>");
                                    echo("<td>".$row["id"]."</td><td>".$row["klasa"]."</td>");
                                echo("</tr>");
                            }
                        echo("</table>");


                        $sql = ("SELECT * FROM nauczyciel, klasa, nauczyciel_klasa where nauczyciel_id = nauczyciel.id and klasa_id = klasa.id");
                        echo("<h2>".$sql."</h2>");
                        $result=$conn->query($sql);
                                echo("<table border=1>");
                                echo("<th>klasa</th>");
                                echo("<th>nauczyciel</th>");
        
                                while($row=$result->fetch_assoc()) {
                                        echo("<tr>");
                                            echo("<td>".$row["klasa"]."</td><td>".$row["nauczyciel"]."</td>");
                                        echo("</tr>");
                                    }
                                echo("</table>");

        ?>
        </div>