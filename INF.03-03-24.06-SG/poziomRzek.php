<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Poziomy rzek</title>
    <link rel="stylesheet" href="styl.css">
</head>
<body>
    <div class="baner-1">
        <img src="obraz1.png" alt="Mapa Polski">
    </div>
    
    <div class="baner-2">
        <h1>Rzeki w województwie dolnośląskim</h1>
    </div>

    <div class="menu">
        <input type="checkbox">Wszystkie
        <input type="checkbox">Ponad stan ostrzegawczy
        <input type="checkbox">Ponad stan alarmowy
        <BUTton>Pokaż</BUTton>
    </div>

    <div class="lewy">
        <h3>Stany na dzień 2022-05-05</h3>

        <?php 

    $poloczenie = mysqli_connect("localhost", "root", "", "rzeki");
    $zapytanie = mysqli_query($poloczenie, "SELECT * FROM wodowskazy");
    while ($wiersz = mysqli_fetch_array($zapytanie)) { 
echo "
    <table>
    <tr>
        <th>$wiersz[Wodomierz]</th>
        <td>$wiersz[rzeka]</td>
        <td>$wiersz[StanAlarmowy]</td>
        <td>$wiersz[Aktualny]</td>
    </tr>
    </table>
    ";
    }
    mysqli_close($poloczenie);
?>

    </div>

    <div class="prawy">
        <h3>Informacje</h3>
        <ul>    
            <li>Brak ostrzeżeń o burzach z gradem</li>
            <li>Smog w mieście Wrocław</li>
            <li>Silny wiatr w Karkonoszach</li>
        </ul>
        <h3>Średnie stany wód</h3>
        <a href="https://komunikaty.pl">Dowiedz się więcej</a>
    <img src="obraz2.jpg" alt="rzeka">
    </div>
    
    <div class="stopka">
        <p>Stronę wykonał: Maciej Pabisiak</p>
    </div>
</body>
</html>