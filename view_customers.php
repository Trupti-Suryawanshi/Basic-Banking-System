<?php
include "connection.php";
?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>View Customers</title>
        <link rel="stylesheet" href="viewcustomers.css">
        <style media="screen" type="text/css">
            body{
                background: linear-gradient(to bottom left, red, blue);
            }
            nav{
                font-weight: bold;
            }
            
            table{
                position: relative;
                bottom:20px;
            }
            table a button {
                border: none;
                font-weight: bold;
                border-radius: 5px;
                font-size: 15px;
                padding: 5px;
                color: black;
                background-color: lightgreen;
                transition: 0.25s;
            }
            
            table a button:hover {
                color: whitesmoke;
                background-color: rgb(0, 175, 0);
                transform: translate(0, -2px);
                box-shadow: 0 1px 2px black;
            }
            .footer {
                text-align: center;
                margin-top: auto;
                background-color: black;
                color: whitesmoke;
                padding:10px;
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
        <table class="customers">
            <tr>
                <th>S.no</th>
                <th>Name</th>
                <th>E-Mail</th>
                <th>Current Balance</th>
                <th>&nbsp;</th>
            </tr>
            <?php
         $res=mysqli_query($conn,"SELECT * FROM customers");
         while($row=mysqli_fetch_array($res))
        {
             echo "<tr>";
             echo "<td>"; echo $row["id"]; echo "</td>";
             echo "<td>"; echo $row["Name"]; echo "</td>";
             echo "<td>"; echo $row["E-mail"]; echo "</td>";
             echo "<td>"; echo $row["Current Balance"]; echo "</td>";
             echo "<td>"; ?><a href="SelectandTransfer.php? id=<?php echo $row["id"];?>"><button>Transfer</button></a><?php echo "</td>";
             echo "</tr>";
        }
         $conn->close();
        ?>
        </table>
        <footer>
            <p style="color:white"><i>&#169; copyright 2021. Made by Trupti Prabhakar Suryawanshi</i></p>
            <p style="color:white"><i>All rights reserved. Powered by<a href="https://www.thesparksfoundationsingapore.org/">The Sparks Foundation</a></i></p>
        </footer>

    </body>

    </html>