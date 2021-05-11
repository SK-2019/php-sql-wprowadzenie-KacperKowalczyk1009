<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="/assets/style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/inne/favicon.ico">
    <title>Biblioteka</title>
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

                echo("<h2>Zadanie 1</h2>");

                require_once("../connect.php");

                $sql = ("SELECT * FROM autor");
                echo("<h2>".$sql."</h2>");
                $result=$conn->query($sql);

                        echo("<table border=1>");
                        echo("<th>id</th>");
                        echo("<th>autor</th>");


                        while($row=$result->fetch_assoc()) {
                                echo("<tr>");
                                    echo("<td>".$row["id"]."</td><td>".$row["nazwisko"]."</td>");
                                echo("</tr>");
                            }
                        echo("</table>");


                        $sql = ("SELECT * FROM tytul");
                echo("<h2>".$sql."</h2>");
                $result=$conn->query($sql);

                        echo("<table border=1>");
                        echo("<th>id</th>");
                        echo("<th>tytul</th>");


                        while($row=$result->fetch_assoc()) {
                                echo("<tr>");
                                    echo("<td>".$row["id"]."</td><td>".$row["tytul"]."</td>");
                                echo("</tr>");
                            }
                        echo("</table>");


                $sql = ("SELECT * FROM autor, tytul, autor_tytul  where autor_id = autor.id and tytul_id = tytul.id");
                echo("<h2>".$sql."</h2>");
                $result=$conn->query($sql);

                        echo("<table border=1>");
                        echo("<th>autor</th>");
                        echo("<th>tytul</th>");


                        while($row=$result->fetch_assoc()) {
                                echo("<tr>");
                                    echo("<td>".$row["nazwisko"]."</td><td>".$row["tytul"]."</td>");
                                echo("</tr>");
                            }
                        echo("</table>");
                        ?>
                        </div>