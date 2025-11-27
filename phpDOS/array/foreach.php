<?php

$names = ["Francisco", "roberto", "Juan"];

$beer=[
    "name" => "Erdinger",
    "alcohol" => 8.5,
    "country" => "Alemania"
];

foreach($names as $name){
    echo $name.";".'<br/>';
}

foreach($beer as $k => $v){
    echo $k." ".$v.";".'<br/>';
}