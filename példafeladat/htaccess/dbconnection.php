<?php

class dataBase {
    private $servername;
    private $username;
    private $password;
    private $dbname;

    protected function connect(){
        $this->servername = "localhost";
        $this->username = "berci";
        $this->password = "berci";
        $this->dbname = "application";
        $conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
        return $conn;
    }

}
?>