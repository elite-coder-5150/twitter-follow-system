<?php

class Database extends PDO {
    protected static $inst;
    protected static $dns;
    protected static $user;
    protected static $pass;

    public function __construct() {
        try {
            self::$dns = 'mysql:host=localhost;dbname=twitter_follow_system';
            parent::__construct(self::$dns, self::$user, self::$pass, self::$pass);

            self::$inst = new PDO(self::$dns, self::$user, self::$pass);
            self::$inst->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo $e->getMessage();
        }

        return self::$inst;
    }

}
