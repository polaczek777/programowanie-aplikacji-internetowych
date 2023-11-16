<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styl.css">
    <title>Hurtownia szkolna</title>
</head>
<body>
    <div class="baner">
    <h1>Hurtownia z najlepszymi cenami</h1>
    </div>
    <div class="lewy">
    <h2>Nasze ceny</h2>
    <table>
        <?php
        $localserver="localhost";
        $username="root";
        $password="";
        $db="sklep";

        $conn=mysqli_connect($localserver,$username,$password,$db);
        if(!$conn){
            die("Connection faild: ".mysqli_connect_error());
        }

        $sql="SELECT nazwa, cena FROM `towary` limit 4";
        $wynik=mysqli_query($conn,$sql);
        if(mysqli_num_rows($wynik)>0){
            while($row=mysqli_fetch_assoc($wynik)){
            echo "<tr><td>$row[nazwa]</td><td>$row[cena]</td></tr>";
        }
    }
        mysqli_close($conn);
        ?>
    </table>
    </div>
    <div class="środkowy">
    <form method="post">
        Wybierz artykuł:
        <select name="produkty">
            <option value="Zeszyt 60 kartek">Zeszyt 60 kartek</option>
            <option value="Zeszyt 32 karteki">Zeszyt 32 karteki</option>
            <option value="Cyrkiel">Cyrkiel</option>
            <option value="Linika 30 cm">Linika 30 cm</option>
        </select><br>
        <label for="liczba">liczba sztuk:</label>
        <input type="number" id="liczba" name="liczba"><br>
        <input type="submit" value="OBLICZ">
    </form>
    <?php
        $localserver="localhost";
        $username="root";
        $password="";
        $db="sklep";

        $conn=mysqli_connect($localserver,$username,$password,$db);
        if(!$conn){
            die("Connection faild: ".mysqli_connect_error());
        }
        if(isset($_POST["produkty"])&& isset($_POST["liczba"])){
            $liczba=$_POST["liczba"];
            $produkt=$_POST["produkty"];
        $sql="SELECT cena FROM towary WHERE nazwa='$produkt'";
        $wynik2=mysqli_query($conn,$sql);
        if(mysqli_num_rows($wynik2)>0){
            while($row=mysqli_fetch_assoc($wynik2)){
            echo "Wartość zakupów:". $row["cena"]*$liczba;
        }
    }
}
mysqli_close($conn);
        ?>
    </div>
    <div class="prawy">
    <h2>Kontakt</h2>
    <img src="zakupy.png" alt="hurtownia">
    <p>e-mail:<a href="mailto:hurt@poczta2.pl">hurt@poczta2.pl</a></p>
    </div>
    <div class="stopka">
    <h4>Witrynę wykonał: Grzegorz Polak</h4>
    </div>
</body>
</html>