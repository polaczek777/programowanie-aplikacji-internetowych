<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styl3.css">
    <title>Kwiaty</title>
</head>
<body>
    <div class="baner">
        <h1>Grupa Polskich Kwiaciarni</h1>
    </div>
    <div class="lewy">
        <h2>Menu</h2>
        <ol>
            <li><a href="index.html">Strona główna</a></li>
            <li><a href="https://www.kwiaty.pl/" target="_blank">Rozpoznaj kwiaty</a></li>
            <li><a href="znajdz.php">Znajdz kwiaciarnię</a></li>
            <ul>
                <li>w Warszawie</li>
                <li>w Malborku</li>
                <li>w Poznaniu</li>
            </ul>
        </ol>
    </div>
    <div class="prawy">
        <h2>Znajdz kwiaciarnię</h2>
        <form method="post">
        <label for="nazwa">Podaj nazwę miasta:</label>
        <input type="text" id="nazwa" name="nazwa"><br>
        <input type="submit" value="SPRAWDŹ">
        </form>
        <?php
        $localhost="localhost";
        $username="root";
        $password="";
        $db="kwiaciarnia";

        $conn=mysqli_connect($localserver,$username,$password,$db);
        if(!$conn){
            die("Connection faild: ".mysqli_connect_error());
        }
        mysqli_close($conn)
        ?>
    </div>
    <div class="stopka">
        <p>Stronę opracował: Grzegorz Polak</p>
    </div>
</body>
</html>