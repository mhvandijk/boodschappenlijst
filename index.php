<?php


require 'core/bootstrap.php';

require Router::load('routes.php')
    -> direct(Request::uri(), Request::method());




// Vooruitgang: gezien film step 19, Deel 9 gemaakt