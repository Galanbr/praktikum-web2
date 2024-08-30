<?php
require_once 'koneksi.php';

class Report extends Database {
    private $table = "reports";

    public function getReports() {
        $query = "SELECT * FROM " . $this->table;
        $result = $this->conn->query($query);

        if ($result->num_rows > 0) {
            return $result->fetch_all(MYSQLI_ASSOC);
        } else {
            return [];
        }
    }
    
    private $data;

    public function setData($data) {
        $this->data = $data;
    }

    public function getData() {
        return $this->data;
    }
}
?>
