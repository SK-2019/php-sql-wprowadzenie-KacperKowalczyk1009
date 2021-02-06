<html>
        <head>
        <link rel="stylesheet" href="/assets/style.css">
        <link rel="shortcut icon" href="/inne/favicon.ico">

        </head>


        <div class="nav">
            <a class="link a" href="/index.php"><img class="obrazek" src="/inne/igni.png">Strona główna<img class="obrazek" src="/inne/igni.png"></a>  
        <a class="link b" href="https://github.com/SK-2019/php-sql-wprowadzenie-kaiser-emilia"><img class="obrazek" src="/inne/aksji.png">GITHUB<img class="obrazek" src="/inne/aksji.png"></a>  
        <a class="link c" href="/pracownicy-organizacja/pracownicy.php"><img class="obrazek" src="/inne/aard.png"> Pracownicy <img class="obrazek" src="/inne/aard.png"></a>  
        <a class="link d" href="/pracownicy-organizacja/pracownicyiorganizacja.php"><img class="obrazek" src="/inne/quen.png">Prac i Org<img class="obrazek" src="/inne/quen.png"></a>  
        <a class="link e" href="/pracownicy-organizacja/agregat.php"><img class="obrazek" src="/inne/yrden.png">Funkcje Agregujace<img class="obrazek" src="/inne/yrden.png"></a> 
        <a class="link f" href="/pracownicy-organizacja/dataiczas.php"><img class="obrazek" src="/inne/igni.png">Data i Czas<img class="obrazek" src="/inne/igni.png"></a>   
        <a class="link g" href="/dane-do-bazy/formularz.html"><img class="obrazek" src="/inne/aksji.png">Formularz<img class="obrazek" src="/inne/aksji.png"></a>  
        <a class="link h" href="/dane-do-bazy/daneDoBazy.php"><img class="obrazek" src="/inne/aard.png">Dane do bazy<img class="obrazek" src="/inne/aard.png"></a>
        <a class="link i" href="/biblioteka/ksiazki.php"><img class="obrazek" src="/inne/quen.png">Książki<img class="obrazek" src="/inne/quen.png"></a>


        </div>




        
<style>
        body{
          background-image:url(https://images6.alphacoders.com/548/thumb-1920-548302.jpg);     
          background-repeat: no-repeat;
          background-attachment: fixed;
          background-size: cover;
        }
                </style>

<div class="con">
  
<?php
include("connect.php");
echo("<li> imie: ".$_POST['firstname']."</li>");
echo("<li> nazwisko: ".$_POST['lastname']."</li>");
echo("<li> miasto: ".$_POST['city']."</li>");
echo("<li> numer tel: ".$_POST['phone']."</li>");
echo("<li> kod pocztowy: ".$_POST['poscode']."</li>");


$sql="INSERT INTO 'pracownicy'('id', 'imie', 'dzial', 'zarobki', 'data_urodzenia') VALUES (null,'józef',2,23,'2001-10-23')";
$conn->query($sql);

?>
</div>

</html> 
