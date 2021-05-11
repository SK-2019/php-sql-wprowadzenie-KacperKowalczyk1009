<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="/assets/style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/inne/favicon.ico">
    <title>Sklep</title>
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
                echo("<h1>Sklep</h1>");

                $sql = ("SELECT * FROM producent");
                echo("<h2>".$sql."</h2>");
                $result=$conn->query($sql);
                        echo("<table border=1>");
                        echo("<th>id</th>");
                        echo("<th>producent</th>");

                        while($row=$result->fetch_assoc()) {
                                echo("<tr>");
                                    echo("<td>".$row["id"]."</td><td>".$row["producent"]."</td>");
                                echo("</tr>");
                            }
                        echo("</table>");

                
                $sql = ("SELECT * FROM produkt");
                echo("<h2>".$sql."</h2>");
                $result=$conn->query($sql);
                        echo("<table border=1>");
                        echo("<th>id</th>");
                        echo("<th>produkt</th>");

                        while($row=$result->fetch_assoc()) {
                                echo("<tr>");
                                    echo("<td>".$row["id"]."</td><td>".$row["produkt"]."</td>");
                                echo("</tr>");
                            }
                        echo("</table>");


                        $sql = ("SELECT * FROM producent, produkt, producent_produkt where producent_id = producent.id and produkt_id = produkt.id");
                        echo("<h2>".$sql."</h2>");
                        $result=$conn->query($sql);
                                echo("<table border=1>");
                                echo("<th>producent</th>");
                                echo("<th>produkt</th>");
        
                                while($row=$result->fetch_assoc()) {
                                        echo("<tr>");
                                            echo("<td>".$row["producent"]."</td><td>".$row["produkt"]."</td>");
                                        echo("</tr>");
                                    }
                                echo("</table>");

        ?>
        </div>