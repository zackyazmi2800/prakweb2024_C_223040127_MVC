<?php 

class Mahasiswa_model {

    private $dbh, // DataBase Handler
            $stmt;

    public function __construct()
    {
        // Data source name
        $dsn = 'mysql:host=localhost;port=3306;dbname=phpmvc';

        try {
            $this->dbh = new PDO($dsn, 'root', 'root');
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    public function getAllMahasiswa()
    {
        $this->stmt = $this->dbh->prepare('SELECT * FROM mahasiswa');
        $this->stmt->execute();
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}

?>