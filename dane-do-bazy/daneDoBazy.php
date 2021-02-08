c<!DOCTYPE html>
<html>
<head>
    <h1>Kacper Kowalczyk 2Ti nr 16</h1>

    <div class= "nav">
  
   <a href="https://github.com/SK-2019/php-sql-wprowadzenie-KacperKowalczyk1009"> Mój GITHUB </a>
  
  <a class="nav_link" href="/pracownicy-organizacja/pracownicy.php"><b>Pracownicy<b></a>
   <a class="nav_link" href="/pracownicy-organizacja/funkcjeagregujace.php"><b>Funkcje Agregujace<b></a>
   <a class="nav_link" href="/pracownicy-organizacja/pracownicy_organizacja.php"><b>Pracownicy Organizacja<b></a>
   <a class="nav_link" href="/">Strona Glowna</a>  
   <a class="nav_link" href="/dane-do-bazy/formularz.html"><b>Formularz<b></a>
<a class="nav_link" href="/dane-do-bazy/daneDoBazy.php"><b>Dane do bazy<b></a>

</div>
	   
<link rel="stylesheet" href="/assets/style.css">	
<link rel="shortcut icon" href="/inne/favicon.ico">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Dane do Bazy</title>
</head>
<body>		

<div class="con">
<h2>Dodawanie:</h2>		
		

	<form action="strona.php" method="POST">
      <input type="text" name="imie" placeholder="imie"></br>
     <input type="text" name="dzial" placeholder="dzial"></br>
     <input type="text" name="zarobki" placeholder="zarobki"></br>
     <input type="date" name="data_urodzenia" placeholder="data_urodzenia"></br>
     <input type="submit" value="wyslij do strona.php">
	</form>
	   
 <h2>Usuwanie :</h2>
       
<form action="delete.php" method="POST">
       <input type="text" name="id" placeholder="ID"></br>
   <input type="submit" value="Usun">
	   </form>
	   
	    <?php	  
 require_once('conn.php');

    $sql=('SELECT * FROM pracownicy,organizacja where dzial=id_org');
    $conn = new mysqli('remotemysql.com','Qp5kr9aFAZ','nLj0fYkQ76', 'Qp5kr9aFAZ');


    $result=$conn->query($sql);     

        echo("<table>");      
        echo("<th>id</th>");
        echo("<th>Imie</th>");
        echo("<th>Dzial</th>");
        echo("<th>Zarobki</th>");
        echo("<th>Data_urodzenia</th>");
        echo("<th>Nazwa_dzialu</th>");
        echo("<th>Usun</th>");
            while($row=$result->fetch_assoc()){ 
                echo("<tr>");
                    echo("<td>".$row["id_pracownicy"]."</td><td>".$row["imie"]."</td><td>".$row["dzial"]."</td><td>".$row["zarobki"]."</td><td>".$row["data_urodzenia"]."</td><td>".$row["nazwa_dzial"]."</td>"); 

   echo("<input type='text' name='id' value='".$row['id_pracownicy']."'>");

   echo("<td><form action='delete.php' method=POST>");

  echo("<name='id' value='".$row['id_pracownicy']."'>");

  echo("<input type='submit' value='usun'");

		    echo("</form></td>");
                echo("</tr>");
            }
        echo("</table>");

?>
</div>
</form>
</body>
</html>
