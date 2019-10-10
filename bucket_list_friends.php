<?php

echo "Hoeveel vrienden wil je vragen om hun droom?\n";
$hoeveelheid = readline();
$array = array();
for($i = 1; $i <= $hoeveelheid; $i++) {
    echo "Wat is je naam?\n";
    $naam = readline();
    echo "En wat is je droom?\n";
    $droom = readline();
    $array[$naam] = $droom;
}

foreach ($array as $naam => $droom)
    echo "De droom van $naam is $droom\n";

/*p
$array = array(
    "hoeveelheid" => $hoeveelheid,
    "naam" => $naam,
    "droom" => $droom
);

echo "Hoeveel vrienden wil je vragen om hun droom?\n";
$hoeveelheid = readline();
    for ($i= 1; $i <= $hoeveelheid; $i++) {
        array_push($array["hoeveelheid"]);
    }

echo "Wat is je naam?\n";
$naam = readline();
    for ($i= 1; $i <= $naam; $i++) {
        array_push($array["naam"]);
}

echo "Wat is je grootste droom?\n";
$droom = readline();
    for ($i= 1; $i <= $droom; $i++) {
        array_push($array["droom"]);
}

for ($i = 1; $i <= $hoeveelheid; $i++) {
    echo $array[$naam];
    echo "wil graag";  
    echo $array[$droom]; 
}*/
?> 