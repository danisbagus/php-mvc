<?php 

class Mahasiswa_model{

    // database handler
    private $dbh;
    private $stmt;

     public function __construct()
     {
         // data source name
         $dsn = 'mysql:host=172.20.0.2;dbname=php_mvc';
         try {
             $this->dbh = new PDO($dsn, 'root', '123');
         }catch(PDOException $err){
            die($err->getMessage());
         }
     }

    public function getAllMahasiswa(){
        $this->stmt =  $this->dbh->prepare('SELECT * FROM mahasiswa');
        $this->stmt->execute();
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}