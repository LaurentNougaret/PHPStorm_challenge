<?php

$students = [
    "Emmanuel"  => 42,
    "Thierry"   => 51,
    "Pascal"    => 45,
    "Eric"      => 48,
    "Nicolas"   => 19
];

$result = 0;

foreach ($students as $key => $value) {
    echo "$key : $value" . PHP_EOL;
    $result += $value;
}
echo "La moyenne d'âge des étudiants est" . " " . $result / count($students) . " ans" . PHP_EOL;
