<?php

class asenzDB {
    public $dbConnect;

    public function connectDb() {

        $servername = "localhost";
        $username = "root";
        $password = "";
        $databasename = "asenzcontactdb";

        try {
            $this->dbConnect = new PDO("mysql:host=$servername;dbname=".$databasename, $username, $password);
            $this->dbConnect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        catch(PDOException $err) {
            echo "Could not connect to the database! " . $err->getMessage();
            die();
        }
    }

    public function select($mysql) {
        $select = $this->dbConnect->query($mysql);
        return $select->fetchAll();
    }

    public function prepstmt($mysql, $info) {
		try {
			$prepstmt = $this->dbConnect->prepare($mysql);
			$prepstmt->execute($info);
		}
		catch(PDOException $e) {
		    echo "Could not perform prepared statements: " . $e->getMessage();
		    die();
	    }
    }

    public function update($mysql) {
        $update = $this->dbConnect->query($mysql);
        return $query->fetchAll();
    }
}

?>