<?php

    class Conection{
        public static $CONECTION;

        
        private function __construct() {
            
        }

        public static function getConection(){
            if(!isset(self::$CONECTION)){
                self::$CONECTION = new PDO('mysql:host=localhost:3306;dbname=web', 'root', 'teste', array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));

                self::$CONECTION->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                self::$CONECTION->setAttribute(PDO::ATTR_ORACLE_NULLS, PDO::NULL_EMPTY_STRING);
            }

            return self::$CONECTION;
        }
    }

?>