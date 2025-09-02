<?php
class Connection {
    private $hostname = "localhost";
    private $username = "rizuki";
    private $password = "Rizuki6191;";
    private $dbname   = "phpnativemvc";

    public function connect() {
        $connect = mysqli_connect($this->hostname, $this->username, $this->password, $this->dbname);

        if (!$connect) {
            die("Connection failed: " . mysqli_connect_error());
        }

        return $connect;
    }
}
