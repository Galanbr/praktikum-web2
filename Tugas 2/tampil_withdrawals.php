<?php
class TampilWitdrawals {
    public function showData($data) {
        echo "<h2>Student Withdrawals Table</h2>";
        echo "<table border='1'>";
        echo "<tr>
                <th>ID Withdrawals</th>
                <th>ID Student</th>
                <th>Withdrawal Type</th>
                <th>Decree Number</th>
                <th>Reason</th>
              </tr>";
        foreach ($data as $row) {
            echo "<tr>";
            echo "<td>" . $row['id_withdrawals'] . "</td>";
            echo "<td>" . $row['id_student'] . "</td>";
            echo "<td>" . $row['withdrawal_type'] . "</td>";
            echo "<td>" . $row['decree_number'] . "</td>";
            echo "<td>" . $row['reason'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    }
}
?>
