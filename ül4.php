<?php
// ülesanne 4 Martin Maiste 19/01/2021
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
          integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <form method="get" action="ül4.php">
        <h2>Jagamine</h2>
        <div class="form-group">
            <label for="jagatav">Jagatav arv:</label>
            <input type="text" name="jagatav" id="jagatav">
        </div>
        <div class="form-group">
            <label for="jagaja">Jagaja:</label>
            <input type="text" name="jagaja" id="jagaja">
        </div>
        <?php
        if (!empty($_GET["jagatav"]) && !empty($_GET["jagaja"])) {
            echo $_GET["jagatav"] . " / " . $_GET["jagaja"] . " = " . $_GET["jagatav"] / $_GET["jagaja"];
        }
        ?>
        <br>
        <input type="submit" value="Saada">
    </form>
    <form method="get" action="ül4.php">
        <h2>Vanus</h2>
        <div class="form-group">
            <label for="vanus1">Esimese inimese vanus:</label>
            <input type="text" name="vanus1" id="vanus1">
        </div>
        <div class="form-group">
            <label for="vanus2">Teise inimese vanus:</label>
            <input type="text" name="vanus2" id="vanus2">
        </div>
        <?php
        if (!empty($_GET["vanus1"]) && !empty($_GET["vanus2"])) {
            if ($_GET["vanus1"] === $_GET["vanus2"]) {
                echo "Mõlemad on samavanused";
            } elseif ($_GET["vanus1"] > $_GET["vanus2"]) {
                echo "Esimene on vanem";
            } else {
                echo "Teine on vanem";
            }
        }
        ?>
        <br>
        <input type="submit" value="Saada">
    </form>
    <form method="get" action="ül4.php">
        <h2>Ristkülik või ruut</h2>
        <div class="form-group">
            <label for="külg-a">Külg a:</label>
            <input type="text" name="külg-a" id="külg-a">
        </div>
        <div class="form-group">
            <label for="külg-b">Külg b:</label>
            <input type="text" name="külg-b" id="külg-b">
        </div>
        <?php
        if (!empty($_GET["külg-a"]) && !empty($_GET["külg-b"])) {
            if ($_GET["külg-a"] === $_GET["külg-b"]) {
                echo "Kujund on ruut";
            } else {
                echo "kujund on ristkülik";
            }
        }
        ?>
        <br>
        <input type="submit" value="Saada">
    </form>
    <form method="get" action="ül4.php">
        <h2>Ristkülik või ruut 2</h2>
        <div class="form-group">
            <label for="külg-c">Külg a:</label>
            <input type="text" name="külg-c" id="külg-c">
        </div>
        <div class="form-group">
            <label for="külg-d">Külg b:</label>
            <input type="text" name="külg-d" id="külg-d">
        </div>
        <?php
        if (!empty($_GET["külg-c"]) && !empty($_GET["külg-d"])) {
            echo '<svg width="' . $_GET["külg-c"] . '" height="' . $_GET["külg-d"] . '">
                    <rect width="' . $_GET["külg-c"] . '" height="' . $_GET["külg-d"] . '" style="fill:#E9E612;stroke-width:3;stroke:rgb(0,0,0)" />
                  </svg>';
        }
        ?>
        <br>
        <input type="submit" value="Saada">
    </form>
    <form method="get" action="ül4.php">
        <h2>Juubel</h2>
        <div class="form-group">
            <label for="sünniaasta">Sünniaasta:</label>
            <input type="text" name="sünniaasta" id="sünniaasta">
        </div>
        <?php
        if (!empty($_GET["sünniaasta"])) {
            if (($_GET["sünniaasta"] - date("Y")) % 10 == 0) {
                echo "Tegemist on juubeliaastaga";
            } else {
                echo "Tegemist ei ole juubeliaastaga";
            }
        }
        ?>
        <br>
        <input type="submit" value="Saada">
    </form>
    <form method="get" action="ül4.php">
        <h2>Hinne</h2>
        <div class="form-group">
            <label for="KT">KT punktide arv:</label>
            <input type="text" name="KT" id="KT">
        </div>
        <?php

        $kt = $_GET["KT"];
        switch ($kt) {
            case (!is_numeric($kt)):
                echo "SISESTA OMA PUNKTID!";
                break;
            case ($kt >= 10):
                echo "SUPER!";
                break;
            case ($kt >= 5 && $kt <= 9):
                echo "TEHTUD!";
                break;
            case ($kt < 5):
                echo "KASIN!";
                break;
            default:
                echo "SISESTA OMA PUNKTID!";
        }

        ?>
        <br>
        <input type="submit" value="Saada">
    </form>
</div>
</body>
</html>

