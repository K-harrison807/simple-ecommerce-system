<?php
session_start();
include('Database.php');

if(isset($_POST["backBtn"])){
    header("Location:userAccount.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdn.simplecss.org/simple.min.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        #btn{
            width: 300px;
        }
        #msg{
            width: 400px;
            height: 120px;
        }
        #backBtn{
            width: 90px;
            height: 45px;
            margin-right: auto;

        }

    </style>
</head>
<body>
    <form method="post">
    <button id="backBtn" name="backBtn">Back</button>
    </form>

    <h2>Details for Delivery</h2>
    <form action="checkout.php" method="POST">
        <input type="text" name="name" placeholder="Name"><br>
        <input type="phone" name="phone" placeholder="Phone number"><br>
        <input type="text" name="address" placeholder="Address"><br>
        <input type="text" name="PO Box" placeholder="PO Box"><br>
        <input type="text" name="postalCode" placeholder="Postal Code"><br>

        <textarea name="message" id="msg" placeholder="Any message for Driver?"></textarea><br><br>

        <button type="submit" id="btn">Pay R<?php echo  $_SESSION["total"];?></button>

    </form>
    
</body>
</html>