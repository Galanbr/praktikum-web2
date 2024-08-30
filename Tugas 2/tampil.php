<?php
require_once 'reports.php';
require_once 'withdrawals.php';
require_once 'tampil_report.php';
require_once 'tampil_withdrawals.php';

$report = new Report();
$studentWithdrawal = new StudentWithdrawal();

$reportView = new TampilReport();
$studentWithdrawalView = new TampilWitdrawals();
$reportData = $report->getReports();
$withdrawalData = $studentWithdrawal->getWithdrawals();
?>

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
<body>

    <?php
    $reportView->showData($reportData);
    
    $studentWithdrawalView->showData($withdrawalData);
    ?>

</body>
</html>
