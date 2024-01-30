<?php


function dd($ddText){
    echo '<pre>';
    die(var_dump($ddText));
    echo '</pre>';
}

function toDouble($number){
    return number_format((float)$number, 2, '.', '');
}