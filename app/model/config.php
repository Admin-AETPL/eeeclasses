<?php
class Config
{
    private $dbhost = 'localhost';
    private $dbuser = 'root';
    private $dbpass = '';
    // private $dbname = 'aetpl7vo_eeeclasses';
    private $dbname = 'eeeclasses';
    
    protected function conn()
    {
        $dsn= "mysql:host=".$this->dbhost.";dbname=".$this->dbname;
        $pdo=new PDO($dsn, $this->dbuser, $this->dbpass);
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        return $pdo;
    }
}