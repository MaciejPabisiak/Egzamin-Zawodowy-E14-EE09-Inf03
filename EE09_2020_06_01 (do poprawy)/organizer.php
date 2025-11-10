<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport">
    <link rel="stylesheet" href="styl6.css">
    <title>Organizer</title>
</head>
<body>
    <div class="baner1">
    <h2>MÓJ ORGANIZER</h2>
    </div>
    <div class="baner2">
    <label for="wydarzenie">Wpis wydarzenia:</label> 
    <input type="text" name="wydarzenie" id="wydarzenie"> 
    <button type="submit">ZAPISZ</button>
    </div>
    <div class="baner3">
    <img src="logo2.png" alt="">
    </div>
    <div class="php">
              
    <?php
    $con=mysqli_connect('localhost','root','','Styczen2020');
        $pyt = mysqli_query($con, 'SELECT id,dataZadania,wpis FROM zadania WHERE miesiac = "sierpien"');
        while ($pole = mysqli_fetch_array($pyt)) {
        echo "<div class='dni'>";
        echo "<h6>  $DataZadania, $miesiac </h6>";
        echo "<p> $Wpis </p>";
        echo "</div>"; 
        }
        print_r($con);
        mysqli_close($con);
    ?>

                    <div class="dni">
	                <h6>  2020-08-01, Sierpień </h6>
                    <p> Remont </p>
                    </div>

                    <div class="dni">
	                <h6>  2020-08-02, Sierpień </h6>
                    <p> Remont </p>
                    </div>

                    <div class="dni">
	                <h6>  2020-08-03, Sierpień </h6>
                    <p> Remont </p>
                    </div>

                    <div class="dni">
	                <h6>  2020-08-04, Sierpień </h6>
                    <p> Remont </p>
                    </div>

                    <div class="dni">
	                <h6>  2020-08-05, Sierpień </h6>
                    <p>  </p>
                    </div>

                    <div class="dni">
	                <h6>  2020-08-06, Sierpień </h6>
                    <p>  </p>
                    </div>
                        
                    <div class="dni">
	                <h6>  2020-08-07, Sierpień </h6>
                    <p> Rower </p>
                    </div>

                    <div class="dni">
	                <h6>  2020-08-08, Sierpień </h6>
                    <p> Rower </p>
                    </div>
                    
                    <div class="dni">
	                <h6>  2020-08-09, Sierpień </h6>
                    <p>  </p>

                    <div class="dni">
	                <h6>  2020-08-10, Sierpień </h6>
                    <p>  </p>
                    </div>

                    <div class="dni">
	                <h6>  2020-08-11, Sierpień </h6>
                    <p> Wyjazd na wakacje! </p>
                    </div>

                    <div class="dni">
	                <h6>  2020-08-12, Sierpień </h6>
                    <p>  </p>
                    </div>

                    <div class="dni">
	                <h6>  2020-08-13, Sierpień </h6>
                    <p> Sport </p>
                    </div>

                    <div class="dni">
	                <h6>  2020-08-14, Sierpień </h6>
                    <p> Sport </p>
                    </div>

                    <div class="dni">
	                <h6>  2020-08-15, Sierpień </h6>
                    <p>  </p>
                    </div>

                    <div class="dni">
	                <h6>  2020-08-16, Sierpień </h6>
                    <p>  </p>
                    </div>
                    
                    <div class="dni">
	                <h6>  2020-08-17, Sierpień </h6>
                    <p> Wyjazd na wakacje! </p>
                    </div>

                    <div class="dni">
	                <h6>  2020-08-18, Sierpień </h6>
                    <p> Tatry </p>
                    </div>
                    
                    <div class="dni">
	                <h6>  2020-08-19, Sierpień </h6>
                    <p> Tatry </p>

                    <div class="dni">
	                <h6>  2020-08-20, Sierpień </h6>
                    <p> Tatry </p>
                    </div>

                    <div class="dni">
	                <h6>  2020-08-21, Sierpień </h6>
                    <p> Tatry </p>
                    </div>

                    <div class="dni">
	                <h6>  2020-08-22, Sierpień </h6>
                    <p> Tatry </p>
                    </div>

                    <div class="dni">
	                <h6>  2020-08-23, Sierpień </h6>
                    <p> Tatry </p>
                    </div>

                    <div class="dni">
	                <h6>  2020-08-24, Sierpień </h6>
                    <p> Tatry </p>
                    </div>

                    <div class="dni">
	                <h6>  2020-08-25, Sierpień </h6>
                    <p> Tatry </p>
                    </div>

                    <div class="dni">
	                <h6>  2020-08-26, Sierpień </h6>
                    <p>  </p>
                    </div>
                    
                    <div class="dni">
	                <h6>  2020-08-27, Sierpień </h6>
                    <p>  </p>
                    </div>

                    <div class="dni">
	                <h6>  2020-08-28, Sierpień </h6>
                    <p>  </p>
                    </div>
                    
                    <div class="dni">
	                <h6>  2020-08-29, Sierpień </h6>
                    <p> Weterynarz - Dzika </p>

                    <div class="dni">
	                <h6>  2020-08-30, Sierpień </h6>
                    <p>  </p>

                    <div class="dni">
	                <h6>  2020-08-31, Sierpień </h6>
                    <p>  </p>
                    </div>

        </div>
    <div class="stopka">
        <h1>Miesiąc: Sierpień, rok: 2020</h1>
        <p>Stronę wykonał: Maciej Pabisiak</p>
    </div>
    
</body>
</html>