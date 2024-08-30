<?php
require_once 'koneksi.php';

class StudentWithdrawal extends Database {
    private $table = "student_withdrawals";

    public function getWithdrawals() {
        $query = "SELECT * FROM " . $this->table;
        $result = $this->conn->query($query);

        if ($result->num_rows > 0) {
            return $result->fetch_all(MYSQLI_ASSOC);
        } else {
            return [];
        }
    }
}
?>
