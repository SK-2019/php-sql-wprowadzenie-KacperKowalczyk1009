<!DOCTYPE html>
<html>
<head>
	<h1>Kacper Kowalczyk 2Ti nr 16</h1>
  
   <a href="https://github.com/SK-2019/php-sql-wprowadzenie-KacperKowalczyk1009"> Mój GITHUB </a>
  
  <a class="nav_link" href="pracownicy.php"><b>Pracownicy<b></a>
   <a class="nav_link" href="funkcjeagregujace.php"><b>Funkcje Agregujace<b></a>
   <a class="nav_link" href="pracownicy_organizacja.php"><b>Pracownicy Organizacja<b></a>
   <a class="nav_link" href="/">Strona Glowna</a>  
   <a class="nav_link" href="formularz.html"><b>Formularz<b></a>
<a class="nav_link" href="daneDoBazy.html"><b>Dane do bazy<b></a>
	<a class="nav_link" href="function.php"><b>Function<b></a>
	   
<link rel="stylesheet" href="style.css">	
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Dane do Bazy</title>
</head>
		
<h2>Dodawanie:</h2>		
		
<body>
	<form action="insert.php" method="POST">
      <input type="text" name="imie" placeholder="imie"></br>
     <input type="text" name="dzial" placeholder="dzial"></br>
     <input type="text" name="zarobki" placeholder="zarobki"></br>
     <input type="date" name="data_urodzenia" placeholder="data_urodzenia"></br>
     <input type="submit" value="wyslij do insert.php">
	</form>
	   
 <h2>Usuwanie :</h2>
       
<form action="delete.php" method="POST">
       <input type="text" name="id" placeholder="ID"></br>
   <input type="submit" value="ok">
	   
	    <?php	  
 require_once('conn.php');

    $sql=('SELECT * FROM pracownicy,organizacja where dzial=id_org');

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
</form>
</body>
</html>
