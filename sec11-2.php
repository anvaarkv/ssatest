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


$data = array_map(function($element) {
    return $element['age'];
}, $arrayofObjects);


print_r(json_encode($data));

