<?php


Class QueryBuilder {
    protected $pdo;

    public function __construct(PDO $pdo){
        $this->pdo = $pdo;
    }

    public function selectAll($table, $intoClass){
        $statement = $this->pdo->prepare("select * from $table");
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_CLASS, $intoClass);
    } 

    public function insert($table, $parameters){
            $sql = sprintf(
                'insert into %s (%s) values (%s)',
                $table,
                implode(', ', array_keys($parameters)),
                ':'. implode(', :', array_keys($parameters))
            );

            try {
                $statement = $this->pdo->prepare($sql);
                $statement->execute($parameters);

            } catch (Exception $e){
                die('Error: '. $e->getMessage());

            }
        
    } 




}

class Grocery {
    private $ID;
    private $name;
    private $price;
    private $number;
    public $total;
    
    public function __construct()
    {
         $this->total = $this->number * $this->price;
    }

    public function getName(){
        return $this->name;}

    public function getNumber(){
        return $this->number;}

    public function getPrice(){
        return $this->price;}

    public function getTotal(){
        return $this->total;}
}

