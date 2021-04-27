<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="/assets/style.css">
<link rel="shortcut icon" href="/inne/favicon.ico">
</head>
<style>
                body {
          background-image:url(https://images.alphacoders.com/234/thumb-1920-234401.png);
          background-repeat: no-repeat;
          background-attachment: fixed;
          background-size: cover;

                }
	</style>	
<body>


<div class="nav">
<?php
include("../assets/header.php");
include("../assets/menu.php");
?>
</div>

<div class="con">
      
   <?php

   
      require_once('../connect.php');
   
   
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

          $sql=('SELECT * FROM pracownicy,organizacja where dzial=id_org and (dzial=1 or dzial=4)');
    $result=$conn->query($sql);
        echo("<hr />");
        echo("<h2>Tabela pracowników z dzialu 1 oraz 4</h2>");
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
      
      
      
                $sql=('SELECT * FROM pracownicy,organizacja where dzial=id_org and imie like "%a"');
    $result=$conn->query($sql);
        echo("<hr />");
        echo("<h2>Tabela kobiet</h2>");
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
      
      
      
                      $sql=('SELECT * FROM pracownicy,organizacja where dzial=id_org and imie not like "%a"');
    $result=$conn->query($sql);
        echo("<hr />");
        echo("<h2>Tabela mezczyzn</h2>");
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

         
      
      echo("<h3>SORTOWANIE</h3>");
      
      
      $sql=('select * from pracownicy,organizacja where dzial=id_org order by imie desc');
    $result=$conn->query($sql);
        echo("<hr />");
        echo("<h2>Tabela pracownikow posortowanych malejaco wg imienia</h2>");
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
      
      
      
            $sql=('select * from pracownicy,organizacja where dzial=id_org and dzial=3 order by imie asc');
    $result=$conn->query($sql);
        echo("<hr />");
        echo("<h2>Tabela pracownikow dzialu 3 posortowanych rosnaco wg imienia</h2>");
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

      
           $sql=('select * from pracownicy,organizacja where dzial=id_org and imie like "%a" order by imie asc');
    $result=$conn->query($sql);
        echo("<hr />");
        echo("<h2>Tabela pracownikow kobiet posortowanych rosnaco wg imienia</h2>");
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
      
      
      
      
                 $sql=('select * from pracownicy,organizacja where dzial=id_org and imie like "%a" order by zarobki asc');
    $result=$conn->query($sql);
        echo("<hr />");
        echo("<h2>Tabela pracownikow kobiet posortowanych rosnaco wg zarobkow</h2>");
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
      
    
      
                       $sql=('select * from pracownicy,organizacja where dzial=id_org and imie not like "%a" order by nazwa_dzial, zarobki asc');
    $result=$conn->query($sql);
        echo("<hr />");
        echo("<h2>Tabela pracownikow kobiet posortowanych rosnaco wg zarobkow</h2>");
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
      
      
      
?>

        </div>
</body>
   </html>
