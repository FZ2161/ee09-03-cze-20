<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styl5.css">
    <title>Document</title>
</head>
<body>


    <div id="baner">
        <div id="baner1">
            <img src="logo1.png" alt="Mój kalendarz">
        </div>
        <div id="baner2">
            <h1>KALENDARZ + skrypt1</h1>
        </div>
    </div>

    <div id="glowny">
        <br>
        <?php
            for($i=1; $i<=31; $i++){
                echo "<div class='dzien'><h5>2020-07-$i</h5></div>";
            }
        ?>
    </div>


    <div id="stopka">
        <form method="POST">
            <label for="dodaj">dodaj wpis: </label>
            <input type="text" name="dodaj">
            <input type="submit" value="DODAJ">
            <p>
                Stronę wykonał: 00000000000
            </p>
        </form>
    </div>
</body>
</html>