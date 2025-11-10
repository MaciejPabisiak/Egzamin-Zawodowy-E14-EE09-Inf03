<!DOCTYPE html>
     <html>
        <head>
            <meta charset="UFT-8">
            <title>Rozgrywki futbolowe</title>
            <link rel="stylesheet" href="styl.css">
        </head>
        
        <div ID=Baner>

        <h2>Światowe rozgrywki piłkarskie</h2>
        <IMG SRC="obraz1.jpg" alt="boisko"> 

        </div>
        
        <div ID=Mecze>
        
        <?php
                $con=mysqli_connect('localhost','root','','Styczen2024');
                $pyt = mysqli_query($con, 'SELECT zespol1,zespol2,wynik,data_rozgrywki FROM `rozgrywka` WHERE zespol1 = "EVG"');
                while ($pole = mysqli_fetch_array($pyt)) {
                echo "<h3>$pole[zespol1] - $pole[zespol2] </h3>";
                echo "<h4>$pole[wynik]</h4>";
                echo "<p>w dniu: $pole[data_rozgrywki]</p>";
                    }
                mysqli_close($con);
            ?>

        </div>

        <div ID=Glowny>

        <h2>Reprezentacja Polski</h2>

        </div>
        
        <div ID=Lewy>
        
        <p>Podaj pozycję zawodników (1-bramkarze, 2-obrońcy, 3-pomocnicy, 4-napastnicy): <p>
        <input name ="Zawodniki" type="number">
        </form>
        <button type="sprawdz">Sprawdź</button>
        
        <ul>
            <li>Arkariusz Milik</li>
            <li>Adam Buksa</li>
        </ul>
        
        </div>
        
        <div ID=Prawy>
    
        <IMG SRC="zad1.png" alt="pilkarz" style="float:right" width="150" height="150">
        <p style="float:right">Autor: Maciej Pabisiak</p>
        
        </div>
    
     </html>