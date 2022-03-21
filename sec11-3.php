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


$array = [];

foreach($arrayofObjects as $arr){
    $array[$arr['age']] = $arr;
}

echo '<pre>';
print_r($array);

