<?php
function writeSecreytSentence(string $param1, string $param2)
{
    return $result= $param1 . " s'incline face à " . $param2;
};

echo writeSecreytSentence("la lune", "le feu");
