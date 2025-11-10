<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styl4.css">
    <title>Wycieczki krajoznawcze</title>
</head>
<body>
    <div class="baner">
        <h1>WITAMY W BIURZE PODRÓŻY</h1>
    </div>
    <div class="dane">
        <h3>ARCHIWUM WYCIECZEK</h3>
            <?php
            $con=mysqli_connect('localhost','root','','EE.09-06-20.06-SG');
            $pyt = mysqli_query($con, 'SELECT id,cel,cena FROM `wycieczki` WHERE id = "1"');
                while ($pole = mysqli_fetch_array($pyt)) {
            echo "<ol>";
            echo "<li>[id],[cena],[cena]</li>";
            echo "<li>[id],[cena],[cena]</li>";
            echo "<li>[id],[cena],[cena]</li>";
            echo "</ol>";
                }
            mysqli_close($con);
            ?>
    </div>
    <div class="lewy">
        <h3>NAJTANIEJ...</h3>
        <table>
        <tr>
        <th>Włochy</th>
        <th>Francja</th>
        <th>Hiszpania</th>
        </tr>
        <tr>
        <td>Od 1200 zł</td>
        <td>Od 1200 zł</td>
        <td>Od 1400 zł</td>
        </tr>
        </table>
    </div>
    <div class="srodkowy">
        <h3>TU BYLIŚMY</h3>
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
        <h3>SKONTAKTUJ SIĘ</h3>
        <a href=wycieczki@wycieczki.pl>napisz do nas</a>
        <p>telefon: 555666777</p>
    </div>
    <div class="stopka">
        <p>Stronę wykonał: Maciej Pabisiak</p>
    </div>
</body>
</html>