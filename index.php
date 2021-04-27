<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="/assets/style.css">
<link rel="shortcut icon" href="/inne/favicon.ico">
</head>

<style>
                body {
          background-image:url(https://w.wallhaven.cc/full/md/wallhaven-md6g59.jpg);
          background-repeat: no-repeat;
          background-attachment: fixed;
          background-size: cover;

                }
	</style>	
<body>
  
  
<div class="nav">
<?php 
include("assets/header.php");
include("assets/menu.php") ;
?>
</div>

<div class="con">
test
<?php

   require_once("connect.php");

    $sql=('SELECT * FROM pracownicy,organizacja where dzial=id_org');
    $result=$conn->query($sql);
        echo("<hr />");
        echo("<h2>Tabela Pracowników</h2>");
        echo("<h3>$sql</h3>");
        echo("<table border=1>");
        echo("<th>id</th>");
        echo("<th>imie</th>");
        echo("<th>dzial</th>");
        echo("<th>zarobki</th>");
        echo("<th>nazwa_dzial</th>");  
            while($row=$result->fetch_assoc()){
                echo("<tr>");
                    echo("<td>".$row['id_pracownicy']."</td><td>".$row['imie']."</td><td>".$row['dzial']."</td><td>".$row['zarobki']."</td><td>".$row['nazwa_dzial']."</td>");
                echo("</tr>");
            }
        echo("</table>");
    echo("<hr />");


   
$sql=('SELECT * from pracownicy,organizacja where dzial=id_org and imie like "%a"');
$result=$conn->query($sql);
        echo("<h2>Tabela Kobiet</h2>");//nazwa nad tabelą
        echo("<h3>$sql</h3>");
        echo("<table border=1>");
        echo("<th>id</th>");
        echo("<th>imie</th>");
        echo("<th>dzial</th>");
        echo("<th>zarobki</th>");
        echo("<th>nazwa_dzial</th>");
            while($row=$result->fetch_assoc()){
                echo("<tr>");
                    echo("<td>".$row['id_pracownicy']."</td><td>".$row['imie']."</td><td>".$row['dzial']."</td><td>".$row['zarobki']."</td><td>".$row['nazwa_dzial']."</td>");
                echo("</tr>");
            }
        echo("</table>");
echo("<hr />");


$sql=('SELECT * from pracownicy,organizacja where dzial=id_org  order by imie asc');
$result=$conn->query($sql); //mysql
        echo("<h2>Tabela Pracowników Posortowana Alfabetycznie</h2>");//nazwa nad tabelą
        echo("<h3>$sql</h3>");
        echo("<table border=1>");
        echo("<th>id</th>");
        echo("<th>imie</th>");
        echo("<th>dzial</th>");
        echo("<th>zarobki</th>");
        echo("<th>nazwa_dzial</th>");
        echo("<th>data_urodzenia</th>");
            while($row=$result->fetch_assoc()){
                echo("<tr>");
                    echo("<td>".$row['id_pracownicy']."</td><td>".$row['imie']."</td><td>".$row['dzial']."</td><td>".$row['zarobki']."</td><td>".$row['nazwa_dzial']."</td><td>".$row['data_urodzenia']."</td>");
                echo("</tr>");
            }
        echo("</table>");


$sql=('SELECT * from pracownicy,organizacja where dzial=id_org  order by zarobki asc');
$result=$conn->query($sql); //mysql
        echo("<h2>Tabela Pracowników Posortowana Zarobkami Rosnąco</h2>");//nazwa nad tabelą
        echo("<table border=1>");
        echo("<h3>$sql</h3>");
        echo("<th>id</th>");
        echo("<th>imie</th>");
        echo("<th>dzial</th>");
        echo("<th>zarobki</th>");
        echo("<th>nazwa_dzial</th>");
        echo("<th>data_urodzenia</th>");
            while($row=$result->fetch_assoc()){
                echo("<tr>");
                    echo("<td>".$row['id_pracownicy']."</td><td>".$row['imie']."</td><td>".$row['dzial']."</td><td>".$row['zarobki']."</td><td>".$row['nazwa_dzial']."</td><td>".$row['data_urodzenia']."</td>");
                echo("</tr>");
            }
        echo("</table>");
echo("<hr />");
?>

        </div>

</body>
   </html>
