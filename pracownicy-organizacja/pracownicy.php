<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
</head>
<body>
<h1>Kacper Kowalczyk 2Ti nr 16</h1>
<a href="https://github.com/SK-2019/php-sql-wprowadzenie-KacperKowalczyk1009"> Mój GITHUB </a>
   <a class="nav_link" href="pracownicy.php"><b>Pracownicy<b></a>
   <a class="nav_link" href="funkcjeagregujace.php"><b>Funkcje Agregujace<b></a>
   <a class="nav_link" href="pracownicy_organizacja.php"><b>Pracownicy Organizacja<b></a>
   <a class="nav_link" href="/">Strona Glowna</a>  
   <a class="nav_link" href="formularz.html"><b>Formularz<b></a>
    <a class="nav_link" href="daneDoBazy.php"><b>Dane do bazy<b></a>  
       <a class="nav_link" href="function.php"><b>Function<b></a>
<?php
    require_once('conn.php');;
    $result=$conn->query('SELECT * FROM pracownicy,organizacja where dzial=id_org');//mysql
        echo("<hr />");
        echo("<h3>Tabela pracowników</h3>");
        echo("<table border=1>");
        echo("<th>id</th>");
        echo("<th>imie</th>");
        echo("<th>dzial</th>");
        echo("<th>zarobki</th>");
        echo("<th>nazwa_dzial</th>");
        
            while($row=$result->fetch_assoc()){
                echo("<tr>");
                    echo("<td>".$row['id_pracownicy']."</td><td>".$row['imie']."</td><td>".$row['dzial']."</td><td>".$row['zarobki']."</td><td>".$row['nazwa_dzial']."</td><td>"."</td>");
                echo("</tr>");
            }
        echo("</table>");
   
 
   $result = $conn->query('SELECT  * FROM pracownicy WHERE dzial=2');
        echo("<hr />");
        echo("<h3>Tabela pracowników z działu 2</h3>"); 
        echo("<table>");
        echo("<th>id</th>");
        echo("<th>imie</th>");
        echo("<th>dzial</th>");
        echo("<th>zarobki</th>");
                while($row = $result->fetch_assoc()) {
        echo("<tr>");
        echo("<td>".$row['id_pracownicy']."</td><td>".$row['imie']."</td><td>".$row['dzial']."</td><td>".$row['zarobki']."</td>");
        echo("</tr>");
    }
        echo("</table>");
         

   $result = $conn->query('SELECT * FROM pracownicy where (dzial=2 or dzial=3)');
        echo("<hr />");
        echo("<h3>Tabela pracowników z działu 2 oraz z 3</h3>");
        echo("<table>");
        echo("<th>id</th>");
        echo("<th>imie</th>");
        echo("<th>dzial</th>");
        echo("<th>zarobki</th>");
        
                while($row = $result->fetch_assoc()) {
        echo("<tr>");
        echo("<td>".$row["id_pracownicy"]."</td><td>".$row["imie"]."</td><td>".$row["dzial"]."</td><td>".$row["zarobki"]."</td><td>"."</td>"); 

        echo("</tr>");
    }
        echo("</table>");
   
   
            $result = $conn->query('SELECT imie, dzial, zarobki, nazwa_dzial FROM `pracownicy`, `organizacja` WHERE dzial = id_org and zarobki<30 and (dzial=1 or dzial=2)');
                echo("<hr />");
                echo("<h3>Tabela pracowników z zarobkiami mniejszymi niz 30</h3>");
                echo("<table>");
                echo("<th>imie</th>");
                echo("<th>dzial</th>");
                echo("<th>zarobki</th>");
                
                    while($row=$result->fetch_assoc()){ 
                        echo("<tr>");
                            echo("<td>".$row["imie"]."</td><td>".$row["dzial"]."</td><td>".$row["zarobki"]."</td>"); 
        
                        echo("</tr>");
                    }
                       echo("</table>");
   
   
?>
    </body>
</html>