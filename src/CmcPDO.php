<?php

define('SQL_HOST', 'mariadb');
define('SQL_USER', 'root');
define('SQL_PWD', 'root');
define('SQL_DB', 'cmc_db');

class CmcPDO {
    private static $db = null;

    public static function getDB() {
        if (self::$db === null) {
            /* connect to DB */
            try {
                self::$db = new PDO('mysql:host=' . SQL_HOST . ';dbname=' . SQL_DB, SQL_USER, SQL_PWD);
            } catch (Exception $e) {
                die('DB error: ' . $e->getMessage() . "\n");
            }
        }
        return self::$db;
    }

    public static function clearDb () {
        self::getDB()->exec('DELETE FROM job');
    }
}