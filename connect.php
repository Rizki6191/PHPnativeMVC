<?php
class Connect
{
    private $hostname = 'localhost';
    private $username = 'rizuki';
    private $password = 'Rizuki6191;';
    private $database = 'latihanphpmvc';

    public function connect()
    {
        $connect = mysqli_connect(
            $this->hostname,
            $this->username,
            $this->password,
            $this->database
        );
        return $connect;
    }
}




?>