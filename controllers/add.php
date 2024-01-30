<?php


$app['database']->insert('groceries', [
    'name' => $_POST['productName'],
    'number' => $_POST['productQuantity'],
    'price' => $_POST['productPrice']
]);

header('Location: /');