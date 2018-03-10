<?php

namespace DAO\Conexao;

use PDO;

Class Conexao
{
    private static $user = "root";
    private static $pass = "63970719";
    private static $dsn = "mysql:host=localhost;dbname=aula04,root,63970719";
    
    private static $instance = null;

    private function __construct(){}
    private function __clone(){}
    
        public static function getInstance(){
            if (is_null(self::$instance)){
                self::$instance = new PDO(self::$dsn,self::$user,self::$pass);
                
                self::$instance->setAtribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

            }
            return self::$instance;
        }
}