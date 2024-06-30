<?php       
// config database
class DB extends PDO
{
    // confing database
    private $hostName = 'localhost';
    
    private $dbName = 'vnfood';

    private $user = 'root';

    private $pass = '';

    public function __construct()
    {
        
        try {
            parent::__construct("mysql: host=". $this->hostName ."; dbname=".$this->dbName.";", $this->user, $this->pass);
            $this->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

}