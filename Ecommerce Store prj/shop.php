<!DOCTYPE html>
<html lang="en">
<head>
    <style>
    .buttn{
            background-color: orange;
            color: black;
            width: 80px;
            height: 35px;
            border-radius: 7px;
        }
        </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
      <form method="post">
    <button class="buttn" name="backBtn">Back</button>
    </form>
    
</body>
</html>

<?php

include('Database.php');
mysqli_select_db($conn, $databaseName);


$createTable = "CREATE TABLE IF NOT EXISTS products(
    productID INT AUTO_INCREMENT PRIMARY KEY,
    ProductCode INT NOT NULL,
    Quantity INT NOT NULL,
    Image VARCHAR(255) NOT NULL
)";
//added Price column in the php admin
mysqli_query($conn, $createTable);



if(isset($_POST['upload'])){

    $productCode = rand(1000,9999);  // temporary product code
    $quantity = 10;                  // default quantity
    $price=$_POST["price"];

    $imageName = $_FILES['image']['name'];
    $tempName  = $_FILES['image']['tmp_name'];

    $folder = "storeImages/" . $imageName;

    
    if(move_uploaded_file($tempName, $folder)){

        
        $insert = "INSERT INTO products(ProductCode, Quantity, Image,Price)
                   VALUES('$productCode', '$quantity', '$imageName','$price')";

        mysqli_query($conn, $insert);

    } else {
        echo "Upload failed.";
    }
}


$result = mysqli_query($conn, "SELECT * FROM products");

while($row = mysqli_fetch_assoc($result)){
    echo "<div style='display:inline-block'>";
    echo "<a href='userAccount.php?id=".$row['productID']."'>";
    echo "<img src='storeImages/".$row['Image']."' width='200px'></a>";
    echo "<p>Product Code: ".$row['ProductCode']."</p>";
    echo "<p>Price: R".$row['Price']."</p>";
    echo "</div>";
}
if(isset($_POST["backBtn"])){
    header("Location:ecommerce_front.php");
}
?>


