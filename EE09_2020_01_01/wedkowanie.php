<!DOCTYPE html>
    <html>
        <head>
            <meta charset="UFT-8">
            <title>Klub wedkowania</title>
            <link rel="stylesheet" href="styl2.css">
        </head>
        <body>
            <div id="Baner">
                
                <h2>Wędkuj z nami!</h2>
                
            </div> 
            <div id="Lewy"> 
                <IMG SRC="ryba2.jpg" alt="Szczupak" style="float: left"> 
            </div>  
            <div id="Prawy">
                <h3> Ryby spokojnego żeru (Białe)</h3>
                
                <?php
                $con=mysqli_connect('localhost','root','','wedkowanie2');
                $zapytanie = mysqli_query($con,'SELECT id,nazwa,wystepowanie FROM `ryby` WHERE styl_zycia=2');    
                while ($pole=mysqli_fetch_array($zapytanie)) {
                    echo "$pole[id].$pole[nazwa],$pole[wystepowanie]<br>";
                }
                    mysqli_close($con);
                ?>
                
                <ol>
                    <li>
                        <a href="https://wedkuje.pl/">Odwiedz takze</a>
                    </li>
                    <li>
                        <a href="http://www.pzw.org.pl/">Polski Zwiazek Wedkarski</a>
                    </li>
                </ol>
            </div>
            <div id="stopka">
                <p>Wykonał : Maciej Pabisiak</p>
            </div>
        </body>
    </html>