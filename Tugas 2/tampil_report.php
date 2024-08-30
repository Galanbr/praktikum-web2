<?php
class TampilReport {
    public function showData($data) {
        echo "<h2>Reports Table</h2>";
        echo "<table border='1'>";
        echo "<tr>
                <th>ID Report</th>
                <th>ID Warning</th>
                <th>ID GPAs</th>
                <th>ID Guidance</th>
                <th>ID Achievements</th>
                <th>ID Scholarship</th>
                <th>ID Student Withdrawals</th>
                <th>ID Tuition Arrears</th>
                <th>Report Date</th>
                <th>Status</th>
                <th>Academic Advisor Approval</th>
                <th>Head of Program Approval</th>
              </tr>";
        foreach ($data as $row) {
            echo "<tr>";
            echo "<td>" . $row['id_report'] . "</td>";
            echo "<td>" . $row['id_warnings'] . "</td>";
            echo "<td>" . $row['id_gpas'] . "</td>";
            echo "<td>" . $row['id_guidance'] . "</td>";
            echo "<td>" . $row['id_achievments'] . "</td>";
            echo "<td>" . $row['id_scholarship'] . "</td>";
            echo "<td>" . $row['id_student_withdrawals'] . "</td>";
            echo "<td>" . $row['id_tuition_arrears'] . "</td>";
            echo "<td>" . $row['report_date'] . "</td>";
            echo "<td>" . $row['status'] . "</td>";
            echo "<td>" . $row['has_acc_academic_advisor'] . "</td>";
            echo "<td>" . $row['has_acc_head_of_program'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    }
}
?>
