<?php

$afstand = 1082.52;

$benzineprijs = 2.150;

$tankinhoud = 40;

$aantalkmvoortank = 25;

$aantalkerentanken = round(($afstand / $aantalkmvoortank) / $tankinhoud);

$totalekosten = round(($afstand / $aantalkmvoortank) * $benzineprijs, 2);

$treinkoste = 55;

echo "De totale afstand = $afstand km <br>";
echo "De totale prijs met de auto = €$totalekosten<br>";
echo "Het aantal keer dat je moet tanken = $aantalkerentanken keer<br>";

if ($totalekosten < 200) {
    echo "Ik ga met de auto";
}

else {
    echo "Ik ga met de trein";
}

?>