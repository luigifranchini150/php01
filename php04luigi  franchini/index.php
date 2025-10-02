<?php

$user = [
    ['name' => 'Davide', 'surname' => 'Cariola', 'gender' => 'NB'],
    ['name' => 'Mario', 'surname' => 'Rossi', 'gender' => 'M'],
    ['name' => 'Lucia', 'surname' => 'Verdi', 'gender' => 'F'],
];

foreach($user as  $user){
    if ($user['gender'] == 'M') {
        echo "Buongiorno Sig." . $user['name'] . " ". $user['surname'] . "\n";
        } elseif ($user['gender'] == 'F') {
            echo "Buongiorno Sig.ra " . $user['name'] . " ". $user['surname'] . "\n";
        } else {
            echo "Buongirno " . $user['name'] . " ". $user['surname'] . "\n";
        }
    }
