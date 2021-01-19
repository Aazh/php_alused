<?php
// ülesanne 3 Martin Maiste 01/12/2020
?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Title</title>
    </head>
    <body>
    <form method="get" action="ül3.php">
        Sisesta trapetsi andmed et arvutada pindala <br>
        Alus 1: <input type="text" name="alus1"><br>
        Alus 2: <input type="text" name="alus2"><br>
        Kõrgus: <input type="text" name="kõrgus"><br>
        <br>
        Sisesta rombi andmed et arvutada ümbermõõt <br>
        Külg: <input type="text" name="külg"> <br>
        <input type="submit" value="Arvuta">
    </form>
    </body>
    </html>

<?php
if (!empty($_GET["alus1"]) && !empty($_GET["alus2"]) && !empty($_GET["kõrgus"])) {
    $trapets_pindala = (($_GET["alus1"] + $_GET["alus2"]) / 2) * $_GET["kõrgus"];
    echo "Trapetsi pindala on " . sprintf('%0.1f', $trapets_pindala) . "<br>";
}
if (!empty($_GET["külg"])) {
    $rombi_umbermoot = $_GET["külg"] * 4;
    echo "Rombi ümbermõõt on " . sprintf('%0.1f', $rombi_umbermoot);
}
