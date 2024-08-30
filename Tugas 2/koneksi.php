<?php
class Database {
    private $host = "localhost";
    private $username = "root";
    private $password = "";
    private $db = "status_withdrawals";
    protected $conn;

    public function __construct() {
        $this->conn = new mysqli($this->host, $this->username, $this->password, $this->db);

        if ($this->conn->connect_error) {
            die("Koneksi gagal : " . $this->conn->connect_error);
        }
    }
}
?>