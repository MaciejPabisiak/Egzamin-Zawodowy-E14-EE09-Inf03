<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styl3.css">
    <title>Video On Demand</title>
</head>
<body>
    <div class="baner_lewy">
    <h1>Internetowa wypożyczalnia filmów</h1>
    </div>
    <div class="baner_prawy">
        <table>
        <tr>
        <th>Kryminał</th>
        <th>Horror</th>
        <th>Przygodowy</th>
        </tr>
        <tr>
        <td>20</td>
        <td>30</td>
        <td>20</td>
        </tr>
        </table>
    </div>
        <h3>Polecamy</h3>
    <div class="lista_1">
            <?php
                $con=mysqli_connect('localhost','root','','');
                
                echo "<b>Nazwa_Filmu";
                echo "<br>";
                echo "Zdjecie";
                echo "<br>";
                echo "Opis";
                echo "</br>";
                
                mysqli_close($con);
            ?>
    </div>
        <h3>Filmy fantastyczne</h3>
    <div class="lista_2">
            <?php
                $con=mysqli_connect('localhost','root','','');
                
                echo "<b>Star Wars";
                echo "<br>";
                echo "<img src='star-wars.jpg'>"; 
                echo "<br>";
                echo "Opis";
                echo "</br>";
                
                mysqli_close($con);
            ?>
    </div>
    <div class="stopka">
            Usuń film nr.;<input name="DELETE_NUMBER" Type=number> <button type=reset >Usuń Film</button>
        <br>
            <p>Stronę wykonał:<a href=ja@poczta.com>Maciej Pabisiak</a></p>
    </div>
</body>
</html>