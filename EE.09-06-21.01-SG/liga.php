<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href=" styl2.css">
    <title>Piłka Nożna</title>
</head>
<body>
    <div class="baner">
        <h3>Reprezentacja polski w piłce nożnej</h3>
        <img src="obraz1.jpg" alt="reprezentacja">
    </div>

    <div class="lewy">
        <button>Zobacz</button>
        <img src="zad2.png" alt="piłka">
        <p>Autor: Maciej Pabisiak</p>
    </div>
    
    <div class="prawy">
    <ol>
    <li>Grzegorz Krychowiak</li>
    <li>Kamil Grosicki</li>
    </ol>
    </div>
    
    <div class="glowny">
    <h3>Liga mistrzów</h3>
    </div>

    <div class="liga">
            
            <?php
                $con=mysqli_connect('localhost','root','','EE.09-PHP-2021-styczen-zad02');
                $pyt2 = mysqli_query($con, 'SELECT zespol,punkty,grupa FROM `liga` ORDER BY `punkty` DESC;');
                while ($pole = mysqli_fetch_array($pyt2)) {
                echo "<div class='liga'>";
                echo "<h2>Zespoł: $pole[zespol]</h2>";
                echo "<h1>Punkty: $pole[punkty]</h1>";
                echo "<p>Grupa: $pole[grupa]</p>";
                echo "</div>";
                    }
                mysqli_close($con);
            ?>

    </div>
</body>
</html>