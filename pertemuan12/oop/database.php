<<<<<<< HEAD
<?php

class Database
{
    private $host = "localhost";
    private $username = "root";
    private $password = "";
    private $database = "prakwebdb";
    public $conn;

    public function __construct()
    {
        $this->conn = new mysqli($this->host, $this->username, $this->password, $this->database);

        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }
=======
<?php

class Database
{
    private $host = "localhost";
    private $username = "root";
    private $password = "";
    private $database = "prakwebdb";
    public $conn;

    public function __construct()
    {
        $this->conn = new mysqli($this->host, $this->username, $this->password, $this->database);

        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }
>>>>>>> e22765833210c7ed994a68d514f436d60f4db267
}