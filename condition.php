<?php
$weapons = ['fists', 'whip', 'gun'];

$opponentWeapon = $weapons[rand(0,2)];

$indyWeapin = '???';

if ($opponentWeapon === $weapons[0]) {
    $indyWeapin = 'fists';
    echo $indyWeapin . ' le poing bat le fouet mais perd contre le pistolet';
} elseif ($opponentWeapon === $weapons[1]) {
    $indyWeapin = 'whip';
    echo $indyWeapin . ' le fouet bat le pistolet mais perd contre le poing';
} else {
    $indyWeapin = 'gun';
    echo $indyWeapin . ' le pistolet bat le poing mais perd contre le fouet';
}
