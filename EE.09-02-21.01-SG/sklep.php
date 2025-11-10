<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styl2.css">
    <title>Warzywniak</title>
</head>
<body>
    <div class="baner_lewy">
    <h1>Internetowy sklep z eko-warzywami</h1>
    </div>
    <div class="baner_prawy">
    <ol>
    <li>warzywa</li>
    <li>owoce</li>
    <li><a href=https://terapiasokami.pl>soki</a></li>
    </ul>
    </div>
    <div class="glowny">
    <?php
                $con=mysqli_connect('localhost','root','','');
                
        echo "<img src='gruszka.jpg'>";
        echo "<br>";
        echo "Gruszka";
        echo "<br>";
        echo "Opis:";
        echo "<br>";
        echo "Stan:";
       
        echo "<br>";

        echo "<img src='morela.jpg'>";
        echo "<br>";
        echo "Morela";
        echo "<br>";
        echo "Opis:";
        echo "<br>";
        echo "Stan:";
        
        echo "<br>";

        echo "<img src='arbuz.jpg'>";
        echo "<br>";
        echo "Arbuz";
        echo "<br>";
        echo "Opis:";
        echo "<br>";
        echo "Stan:";
        
        echo "<br>";

        echo "<img src='papaja.jpg'>";
        echo "<br>";
        echo "Papaja";
        echo "<br>";
        echo "Opis:";
        echo "<br>";
        echo " Stan:";
        
        echo "<br>";

        echo "<img src='marchew.jpg'>";
        echo "<br>";
        echo "Marchew";
        echo "<br>";
        echo "Opis:";
        echo "<br>";
        echo "Stan:";
        
        echo "<br>";

        echo "<img src='ziemniak.jpg'>";
        echo "<br>";
        echo "Ziemniak";
        echo "<br>";
        echo "Opis:";
        echo "<br>";
        echo "Stan:";
        
        echo "<br>";

        echo "<img src='gruszka.jpg'>";
        echo "<br>";
        echo "Gruszka";
        echo "<br>";
        echo "Opis:";
        echo "<br>";
        echo "Stan:";
        
        echo "<br>";

        echo "<img src='Koper.jpg'>";
        echo "<br>";
        echo "Koper";
        echo "<br>";
        echo "Opis:";
        echo "<br>";
        echo "Stan:";
        
        echo "<br>";

        echo "<img src='owoce.jpg'>";
        echo "<br>";
        echo "Owoce";
        echo "<br>";
        echo "Opis:";
        echo "<br>";
        echo "Stan:";
        
        echo "<br>";

        echo "<img src='papryka.jpg'>";
        echo "<br>";
        echo "Papryka";
        echo "<br>";
        echo "Opis:";
        echo "<br>";
        echo "Stan:";
    ?>

    </div>
    <div class="stopka">
    Nazwa:<input name="Nazwa"> 
    Cena:<input name="Nazwa">
    <button>Dodaj produkt</button>
    <p>Stronę wykonał: Maciej Pabisiak</p>
    </div>
</body>
</html>