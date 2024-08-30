# Dokumentasi Tugas 2

### 1. koneksi.php
Mendefinisikan class Mahasiswa dengan properti/atribut yang bersifat private
```
<?php
class Database {
    private $host = "localhost";
    private $username = "root";
    private $password = "";
    private $db = "status_withdrawals";
    protected $conn;
```
method _construct_ digunakan untuk membuat koneksi ke database 
```
    public function __construct() {
        $this->conn = new mysqli($this->host, $this->username, $this->password, $this->db);

        if ($this->conn->connect_error) {
            die("Koneksi gagal : " . $this->conn->connect_error);
        }
    }
}
?>
```

### 2. withdrawals.php
Memanggil file koneksi.php yang berisi class Database
```
<?php
require_once 'koneksi.php';
```
Mendefinisikan class _Studentwithdrawal_ yang merupakan class turunan dari _Database_
```
class StudentWithdrawal extends Database {
    private $table = "student_withdrawals";
```
Method untuk mengambil semua data dari tabel _student_withdrawals_
```
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
```

### 3. report.php
Memanggil file koneksi.php yang berisi kelas Database
```
<?php
require_once 'koneksi.php';
```
Mendefinisikan class Report yang merupakan class turunan dari class Database, terdapat properti/atribut private baru dalam class ini yaitu _$table_ dan _$data_
```
class Report extends Database {
    private $table = "reports";
    private $data;
```
Method untuk mengambil semua data dari tabel _reports_
```
    public function getReports() {
        $query = "SELECT * FROM " . $this->table;
        $result = $this->conn->query($query);
        
        if ($result->num_rows > 0) {
            return $result->fetch_all(MYSQLI_ASSOC);
        } else {
            return [];
        }
    }
```
method setter dan getter digunakan untuk menetapkan dan mengambil nilai dari properti _$data_
```
    public function setData($data) {
        $this->data = $data;
    }

    public function getData() {
        return $this->data;
    }
}
?>
```

### 4.tampil_report.php
Mendefinisikan class _TampilReport_ dan pembuatan tabel
```
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
```

### 3. TampilWithdrawals
Mendefinisikan class _TampilWithdrawals_ dan membuat tabel 
```
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

```

### 5. tampil.php
```
<?php
require_once 'reports.php';
require_once 'withdrawals.php';
require_once 'tampil_report.php';
require_once 'tampil_withdrawals.php';
```
Membuat objek baru pada class _Report_ , _StudentWithdrawal_, _TampilReport_, _TampilWithdrawals_
```
$report = new Report();
$studentWithdrawal = new StudentWithdrawal();

$reportView = new TampilReport();
$studentWithdrawalView = new TampilWitdrawals();
```
Mengambil data dari tabel reports dan student_withdrawals
```
$reportData = $report->getReports();
$withdrawalData = $studentWithdrawal->getWithdrawals();
?>
```
Dalam file ini terdapat sedikit css untuk merapikan tabel

```
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Status Withdrawal</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        h2 {
            color: #333;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        table, th, td {
            border: 1px solid #ddd;
        }

        th, td {
            padding: 12px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        tr:hover {
            background-color: #f1f1f1;
        }
    </style>
</head>
```
Menampilkan data dari tabel _reports_ dan _studentwithdrawals_ dalam bentuk tabel HTML
```
<body>
    <?php
    $reportView->showData($reportData);
    
    $studentWithdrawalView->showData($withdrawalData);
    ?>
</body>
</html>
```
