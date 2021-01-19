<?php
// ülesanne 2 Martin Maiste 24/11/2020
$i = 25;
$j = 17;

echo $i . "+" . $j . "=" . ($i + $j) . "<br>";
echo $i . "-" . $j . "=" . ($i - $j) . "<br>";
echo $i . "*" . $j . "=" . ($i * $j) . "<br>";
echo $i . "/" . $j . "=" . ($i / $j) . "<br>";
echo $i . "%" . $j . "=" . ($i % $j) . "<br>";

$mm = 1412;
$cm = $mm / 10;
$m = $mm / 1000;

$vormintatud_cm = sprintf('Vastuse: %0.2f', $cm);
$vormintatud_m = sprintf('Vastuse: %0.2f', $m);

echo $vormintatud_cm . "<br>";
echo $vormintatud_m . "<br>";

$a = 18;
$b = 5;

$pindala = $a * $b / 2;
$ymbermoot = $a + $b + sqrt(($a * $a) + ($b * $b));

$vormintatud_pindala = sprintf('%d', $pindala);
$vormintatud_ymbermoot = sprintf('%d', $ymbermoot);

echo "Täisnurksel kolmnurgal mille külg a on " . $a . " ja külg b on " . $b . " on pindala " . $vormintatud_pindala . " ja ümbermõõt " . $vormintatud_ymbermoot;
