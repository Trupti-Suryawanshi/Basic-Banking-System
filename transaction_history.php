<?php
include 'connection.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sparks Foundation Bank</title>
    <link rel="stylesheet" href="transactionhistory.css">
    <style media="screen" type="text/css">
        body{
            background: linear-gradient(to bottom left, red, blue);
        }
        footer{
            padding:10px;
        }
        th {
            text-align: center;
        }
        td,th{
            text-align: center;
        }
        nav{
            font-weight: bold;
        }
    </style>
</head>

<body>
    <header>
        <h1 style="color:whitesmoke;font-size: 60px">
            <a href="index.php"><img src="banklogo.jpg">Sparks Foundation Bank</a>
        </h1>
        <nav style="font-family: Arial, Helvetica, sans-serif">
            <a class="link" href="index.php">Home</a>
            <a class="link" href="About.html">About</a>
            <a class="link" href="view_customers.php">View Customers</a>
            <a class="link" href="transaction_history.php">Transaction History</a>
        </nav>
    </header>
    <table class="transactions">
        <tr>
            <th>Sender</th>
            <th>Receiver</th>
            <th>Amount Transfered</th>
            <th>Date and Time (yy/mm/dd and hr/min/sec)</th>
        </tr>
        <?php
         $res=mysqli_query($conn,"SELECT * FROM transactions");
         while($row=mysqli_fetch_array($res))
        {
             echo "<tr>";
             echo "<td>"; echo $row["Sender"]; echo "</td>";
             echo "<td>"; echo $row["Receiver"]; echo "</td>";
             echo "<td>"; echo $row["Amount"]; echo "</td>";
             echo "<td>"; echo $row["Date and Time"]; echo "</td>";
             echo "</tr>";
        }
        ?>
     </table>
     <footer class="footer">
            <p style="color:white"><i>&#169; copyright 2021. Made by Trupti Prabhakar Suryawanshi</i></p>
            <p style="color:white"><i>All rights reserved. Powered by<a href="https://www.thesparksfoundationsingapore.org/">The Sparks Foundation</a></i></p>
    </footer>
</body>