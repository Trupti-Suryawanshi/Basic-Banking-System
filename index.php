<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sparks Foundation Bank</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
    <style media="screen" type="text/css">
        body {
            background: linear-gradient(to bottom left, red, blue);
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            margin: 0;
            background-repeat: no-repeat;
            background-size: 1800px 800px;
        }
        
        header {
            background-color: black;
            position: relative;
            bottom: 30px;
        }
        
        nav {
            background-color: rgba(46, 43, 43, 0.979);
            display: flex;
            justify-content: space-evenly;
            padding: 5px;
            border-radius: 3px;
            font-family: Arial, Helvetica, sans-serif;
            font-weight: bold;
        }
        
        h1 {
            text-align: center;
            font-weight: lighter;
            font-size: 60px;
        }
        
        h1 img {
            height: 70px;
            width: 70px;
            position: relative;
            top: 20px;
        }
        
        a {
            text-decoration: none;
            color: azure;
            padding: 2px 6px 2px 6px;
            border-radius: 2px;
        }
        
        .service {
            display: flex;
            flex-direction: row;
            justify-content: space-evenly;
            margin: 5px;
            padding: 15px;
            position: relative;
            top: 80px;
            border: none;
            height: 240px;
        }
        
        .view {
            border: 1px lightgray;
            display: flex;
            flex-direction: column;
            background-color: whitesmoke;
            text-align: center;
            font-weight: bold;
            border-radius: 15px;
            box-shadow: 0 2px 10px black;
            transition: 0.25s;
        }
        
        .view:hover {
            transform: translate(0, -10px);
            box-shadow: 0 5px 20px black;
        }
        
        p a {
            color: rgb(15, 15, 15);
        }
        
        p {
            margin: 5px;
            padding-top: 0;
            border-bottom-left-radius: 15px;
            border-bottom-right-radius: 15px;
        }
        
        img {
            height: 200px;
            width: 200px;
            border-top-left-radius: 5px;
            border-top-right-radius: 5px;
        }
        
        .link:hover {
            color: rgba(230, 245, 100, 0.979);
        }
        
        footer {
            text-align: center;
            margin-top: auto;
            background-color: black;
            color: whitesmoke;
            padding: 10px;
        }
        
        footer p {
            margin: 15px;
        }
    </style>
</head>

<body>
    <header>
        <h1 style="color:whitesmoke">
            <a href="index.php"><img src="banklogo.jpg">Sparks Foundation Bank</a>
        </h1>
        <nav>
            <a class="link" href="index.php">Home</a>
            <a class="link" href="About.html">About</a>
            <a class="link" href="view_customers.php">View Customers</a>
            <a class="link" href="transaction_history.php">Transaction History</a>
        </nav>
    </header>
    <div class="service">
        <div class="view">
            <a href="view_customers.php"><img src="viewlogo.jpg" alt="customers"></a>
            <p><a href="view_customers.php">View Customers</a></p>
        </div>
        <div class="view">
            <a href="transaction_history.php">
                <img src="transactionhistorylogo.jpg" alt="Transaction History">
            </a>
            <p><a href="transaction_history.php">Transactions History</a></p>
        </div>
    </div>
    <footer>
        <p style="color:white"><i>&#169; copyright 2021. Made by Pranav Reddy Gunnala</i></p>
        <p style="color:white"><i>All rights reserved. Powered by<a style="color:white" href="https://www.thesparksfoundationsingapore.org/">The Sparks Foundation</a></i></p>
    </footer>

</body>

</html>