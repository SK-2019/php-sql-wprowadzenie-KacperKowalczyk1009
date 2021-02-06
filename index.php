<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="/assets/style.css">
<link rel="shortcut icon" href="/inne/favicon.ico">
</head>
<body>
<h1>Kacper Kowalczyk 2Ti nr 16</h1>
  
  
<div class="nav">
<a class="nav_link" href="https://github.com/SK-2019/php-sql-wprowadzenie-KacperKowalczyk1009"> <b> Mój GITHUB <b> </a>
  
  <a class="nav_link" href="/pracownicy-organizacja/pracownicy.php"><b>Pracownicy<b></a>
   <a class="nav_link" href="/pracownicy-organizacja/funkcjeagregujace.php"><b>Funkcje Agregujace<b></a>
   <a class="nav_link" href="/pracownicy-organizacja/pracownicy_organizacja.php"><b>Pracownicy Organizacja<b></a>
   <a class="nav_link" href="/">Strona Glowna</a>  
   <a class="nav_link" href="/dane-do-bazy/formularz.html"><b>Formularz<b></a>
<a class="nav_link" href="/dane-do-bazy/daneDoBazy.php"><b>Dane do bazy<b></a>
   

</div>

<div class="con">

<?php
   include("conn.php");

    $sql=('SELECT * FROM pracownicy,organizacja where dzial=id_org');
    $conn = new mysqli('remotemysql.com','Qp5kr9aFAZ','Qp5kr9aFAZ','nLj0fYkQ76');
    $result=$conn->query($sql);
        echo("<hr />");
        echo("<h3>Tabela Pracowników</h3>");
        echo("<li>$sql");
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


    include("conn.php");
$sql=('SELECT * from pracownicy,organizacja where dzial=id_org and imie like "%a"');
$conn = new mysqli('remotemysql.com','Qp5kr9aFAZ','Qp5kr9aFAZ','nLj0fYkQ76');
    $result=$conn->query($sql);
        echo("<h3>Tabela Kobiet</h3>");//nazwa nad tabelą
        echo("<li>$sql");
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



include("conn.php");
$sql=('SELECT * from pracownicy,organizacja where dzial=id_org  order by imie asc');
$conn = new mysqli('remotemysql.com','Qp5kr9aFAZ','Qp5kr9aFAZ','nLj0fYkQ76');
    $result=$conn->query($sql); //mysql
        echo("<h3>Tabela Pracowników Posortowana Alfabetycznie</h3>");//nazwa nad tabelą
        echo("<li>$sql");
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
echo("<hr />");


include("conn.php");
$sql=('SELECT * from pracownicy,organizacja where dzial=id_org  order by zarobki asc');
$conn = new mysqli('remotemysql.com','Qp5kr9aFAZ','Qp5kr9aFAZ','nLj0fYkQ76');
    $result=$conn->query($sql); //mysql
        echo("<h3>Tabela Pracowników Posortowana Zarobkami Rosnąco</h3>");//nazwa nad tabelą
        echo("<table border=1>");
        echo("<li>$sql");
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
