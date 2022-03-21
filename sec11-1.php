<?php

$arrayofObjects = [
    [
        'id' => 1,
        'name' => 'John',
        'age' =>  '20'
    ],
    [
        'id' => 2,
        'name' => 'Jane',
        'age' =>  '21'
    ],
    [
        'id' => 3,
        'name' => 'Jack',
        'age' =>  '22'
    ]
];


array_multisort(array_column($arrayofObjects, 'age'), SORT_DESC, $arrayofObjects);

print_r($arrayofObjects);


