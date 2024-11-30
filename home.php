<?php session_start() ;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    
 <title>Document</title>
</head>
<body>
    <style>
        .undgr{
    background-color: rgba(0, 0, 0, 0.9);
    width: 100%;
    height: 120px;
    position: relative;
    z-index: 3;
}

nav ul{
    float: right;
    margin-right: 90px;
}
nav ul li{
    display: inline-block;
    margin: 0 5 px;
    padding-left: 20px;

}
nav ul li a{
    color: #f3c90c;
    border-radius: 3px;
    font-size: 20px;
    text-transform: uppercase;
    font-family: montserrat;
    padding: 19px;
    margin: 17px;
    display: block;
}
 .navmen li a:hover{
    background:#919c28 ;
    
}
    </style>

<nav class="undgr">
      
        <ul class="navmen">
            <li><a href="" >Acceuil</a></li>
            <li><a href="" >dfsd</a></li>
            <li><a href="" >A propos</a></li>
            <li><a href=""  ><?php echo $_SESSION["emailSession"] ?></a></li>
            <li><a href="login.php" >logout</a></li>
         </ul>

    </nav>
 
</body>
</html>