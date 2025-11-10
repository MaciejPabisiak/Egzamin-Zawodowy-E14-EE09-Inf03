<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styl3.css">
    <title>Wycieczki i urlopy</title>
</head>
<body>
    <div class="baner">
        <h1>BIURO PODRÓŻY</h1>
    </div>
    <div class="lewy">
        <h2>KONTAKT</h2>
        <a href=biuro@wycieczki.pl>napisz do nas</a>
        <p>telefon: 555666777</p>
    </div>
    <div class="srodkowy">
        <h2>GALERIA</h2>
        
        <?php
            $con=mysqli_connect('localhost','root','','');
            echo "<img src='1.jpg'>";
            echo "<img src='2.jpg'>";
            echo "<img src='3.jpg'>";
            echo "<img src='4.jpg'>";
            echo "<img src='5.jpg'>";
            echo "<img src='6.jpg'>";
            echo "<img src='7.jpg'>";
            echo "<img src='8.jpg'>";
            echo "<img src='9.jpg'>";
            mysqli_close($con);
        ?>

    </div>
    <div class="prawy">
    <h2>PROMOCJE</h2>
    <table>
        <tr>
        <th>Jesień</th>
        <th>Grupa 4+</th>
        <th>Grupa 10+</th>
        </tr>
        <tr>
        <td>5%</td>
        <td>10%</td>
        <td>15%</td>
        </tr>
        </table>
    </div>
    <div class="dane">

        
        <?php
            $con=mysqli_connect('localhost','root','','EE.09-02-20.06-SG');
            $pyt = mysqli_query($con, 'SELECT id,dataWyjazdu,cel,cena FROM `Wycieczki`');
            while ($pole = mysqli_fetch_array($pyt)) {
            echo "<h2>LISTA WYCIECZEK</h2>";
            echo "<br>";
            echo "$pole[id]. $pole[dataWyjazdu], $pole[cel], $pole[cena]</li>";
            echo "<br>";
            echo "$pole[id]. $pole[dataWyjazdu], $pole[cel], $pole[cena]</li>";
            echo "<br>";
            echo "$pole[id]. $pole[dataWyjazdu], $pole[cel], $pole[cena]</li>";
            echo "<br>";
            echo "$pole[id]. $pole[dataWyjazdu], $pole[cel], $pole[cena]</li>";
            echo "<br>";
            echo "$pole[id]. $pole[dataWyjazdu], $pole[cel], $pole[cena]</li>";
            echo "<br>";
            echo "$pole[id]. $pole[dataWyjazdu], $pole[cel], $pole[cena]</li>";
            echo "<br>";
            echo "$pole[id]. $pole[dataWyjazdu], $pole[cel], $pole[cena]</li>";
            echo "<br>";
            echo "$pole[id]. $pole[dataWyjazdu], $pole[cel], $pole[cena]</li>";
            echo "<br>";
            echo "$pole[id]. $pole[dataWyjazdu], $pole[cel], $pole[cena]</li>";
            }
            mysqli_close($con);
        ?>
    </div>
    <div class="stopka">
        <p>Stronę wykonał: Maciej Pabisiak</p>
    </div>
</body>
</html>