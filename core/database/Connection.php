<?php

class Connection {
    public static function make($config){
        try {
            //return new PDO('mysql:host=127.0.0.1;dbname=rinus_boodschappenlijst', 'm.vandijk', '');
            return new PDO(
                $config['connection'].';dbname='.$config['name'],
                $config['username'],
                $config['password'],
                $config['options']
            );
        
        
        } catch (Exception $e){
            die($e->getMessage());
        }
    }
}



