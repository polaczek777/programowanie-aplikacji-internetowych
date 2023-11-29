<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Biblioteka</title>
</head>
<body>
    <div class="baner">
        <h1>Biblioteka w Książkowicach Małych</h1>
    </div>
    <div class="lewy">
        <h4>Dodaj czytelnika</h4>
        <form method="post">
        <label for="imie">imię: </label>
        <input type="text" id="imie" name="imie"><br>
        <label for="nazwisko">nazwisko: </label>
        <input type="text" id="nazwisko" name="nazwisko"><br>
        <label for="symbol">symbol: </label>
        <input type="number" id="symbol" name="symbol"><br>
        <input type="submit" name="akceptuj" value="AKCEPTUJ">
        </form>
        <?php
        $localhost="localhost";
        $username="root";
        $password="";
        $db="biblioteka3";
        
        if(isset($_POST["imie"]) && isset($_POST["nazwisko"]) && isset($_POST["symbol"])){
        $conn=mysqli_connect($localhost,$username,$password,$db);
        $nazwa=$_POST["imie"];
        $nazwisko=$_POST["nazwisko"];
        $symbol=$_POST["symbol"];
        
        $sql="INSERT INTO czytelnicy(`imie`, `nazwisko`, `kod`) VALUES ('$nazwa', '$nazwisko', '$symbol')";
        if(mysqli_query($conn,$sql)){
            echo "Dodano czytelnka $nazwa $nazwisko";
        }
        mysqli_close($conn);
        }
        ?>
    </div>
    <div class="środkowy">
        <img src="biblioteka.png" alt="biblioteka">
        <h6>ul. Czytelników&nbsp;15; Książkowice Małe</h6>
        <p>Czy masz jakieś uwagi <a href="mailto:biuro@bib.pl">biuro@bib.pl</a></p>
    </div>
    <div class="prawy">
        <h4>Nasi czytelnicy</h4>
        <ol>
        <?php
        $localhost="localhost";
        $username="root";
        $password="";
        $db="biblioteka3";
        
        $conn=mysqli_connect($localhost,$username,$password,$db);
        
        $sql="SELECT imie, nazwisko FROM czytelnicy ORDER BY nazwisko;";
        $wynik=mysqli_query($conn,$sql);
        if(mysqli_num_rows($wynik)>0){
            while($row=mysqli_fetch_assoc($wynik)){
                echo "<li>$row[imie] $row[nazwisko]</li>";
            }
        }
        mysqli_close($conn);
        ?>
        </ol>
    </div>
    <div class="stopka">
        <p>Projekt witryny: Grzegorz Polak</p>
    </div>
</body>
</html>