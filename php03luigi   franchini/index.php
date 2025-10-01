<?php

$words1 = [
     'vostro', 67, 'essere', 'colle', 'mi', 'sempre', [
          'oscura', 'era', 89, ['mezzo', 'E'],
     ],
     'diritta'
];
 
$words2 = [
    'elemento1' => 25.89,
    'elemento2' => 'possa',
    'elemento3' => [
         'Virgilio',
         'Favore',
         'favore',
         ['Fortuna']
    ],
    'fine' => '!'
];
$words1[]='la';
$words1[]='a';
//print_r($words1);
//print_r($words2);
$results = $words1[6][3][1] . " " . $words2['elemento2'] . " " . $words1[8] . " " . $words2['elemento3'][3][0] . " " . $words1[2] . " " . $words1[5] . " " . $words1[9] . " " . $words1[0] . " " . $words2['elemento3'][2] . $words2['fine'] . "\n";



echo $results;











