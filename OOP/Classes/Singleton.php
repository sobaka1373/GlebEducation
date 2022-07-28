<?php
namespace OOP;
class DB {

    protected static $_instance;  //экземпляр объекта

    public static function getInstance() { // получить экземпляр данного класса
        if (self::$_instance === null) { // если экземпляр данного класса  не создан
            self::$_instance = new self;  // создаем экземпляр данного класса
        }
        return self::$_instance; // возвращаем экземпляр данного класса
    }

    private  function __construct() { // конструктор отрабатывает один раз при вызове DB::getInstance();
        try {
            // podklychaemsya k servery
            $this->connect = new \PDO("mysql:host=localhost;dbname=testdb1", "root", "1234_Gleb");
        }
        catch (\PDOException $e) {
            echo "Database error: " . $e->getMessage();
        }

    }

    private function __clone() { //запрещаем клонирование объекта модификатором private
    }

    public function __wakeup() {//запрещаем клонирование объекта модификатором private
    }

    public static function query($sql) {

        $obj=self::$_instance;

        if(isset($obj->connect)){
            $obj->connect->exec($sql);
        }
        return false;
    }
}
