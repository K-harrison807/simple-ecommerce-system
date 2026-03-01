<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <style>
        
         .menu {
            display: none; /* hide menu by default */
            list-style: none;
            padding: 0;
            margin: 0;
            background: #eee;
        }

        .menu li {
            padding: 8px 12px;
        }

        .menu li a {
            text-decoration: none;
            color: black;
        }

        .menu-icon {
            font-size: 30px;
            cursor: pointer;
        }
          body {
  background-image: url('downloadBG.jpg');
  background-repeat: no-repeat;
  background-size: 100%;
  background-attachment: fixed;
  
}


    </style>
</head>
<body>
   


    <ul class="menu">
    <li><a href="ecommerce_front.php">Home</a></li>
   <li> <a href="About us.html">About us</a></li>
   <li><a href="shop.php">Shop</a></li>

    </ul>

 <span onclick="togglemenu()">
    <i class="fas fa-bars menu-icon"></i>
</span>
    
    <script>
       
        function togglemenu(){
             var menu=document.querySelector(".menu");

            if(menu.style.display=="block")
                menu.style.display="none";

            else{
                menu.style.display="block";
            }
        }

    </script>
    <div class="btns">
    <a href="Registration.php"><button class="signBtn">Create Account</button></a><!--I used <a>tags  for shortcuts,  i prefer click function-->
    <a href="login.php"><button class="logBtn">Login</button></a>
    </div>

    <h1>Let's Get Fit Together</h1>

</body>
</html>