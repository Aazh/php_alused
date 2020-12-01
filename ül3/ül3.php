<?php
// ülesanne 3 Martin Maiste 01/12/2020
if (!empty($_GET["alus1"]) && !empty($_GET["alus2"]) && !empty($_GET["kõrgus"])) {
    $trapets_pindala = (($_GET["alus1"] + $_GET["alus2"]) / 2) * $_GET["kõrgus"];
    echo "Trapetsi pindala on " . sprintf('%0.1f', $trapets_pindala) . "<br>";
}
if (!empty($_GET["külg"])) {
    $rombi_umbermoot = $_GET["külg"] * 4;
    echo "Rombi ümbermõõt on " . sprintf('%0.1f', $rombi_umbermoot);
}
