<?php


$results = $app['database']->selectAll('Groceries', 'Grocery');
$totaalBoodschappen = array_sum(array_column($results, 'total'));


require 'views/lijst.view.php';