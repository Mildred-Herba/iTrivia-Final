<?php

include "../php/conn.php";
session_start();

if (isset ($_POST["login"])){
    $eMail = $_POST["email"];
    $passWord = $_POST["pssWord"];

    $sql = "SELECT * FROM myinfo WHERE _email = '$eMail' AND _password = '$passWord'";
    $result = mysqli_query($con, $sql);

    
    
    if (mysqli_num_rows($result) > 0){
        header("Location: landing.php");
        exit();
    }

    mysqli_close($con);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <title>iTrivia</title>
</head>

<body>
    <script src = "../js/logIn.js"></script>
    
    <div class = "formLog" id = "formLog">
        <div class = "open">
            <p>Login</p>
            <p>Please login to continue.</p>
        </div>
       
        <div class = "logIn">

        <form action = "" method = "post" autocomplete = "off">
            <div class = "formEmail">
                <i class="fa-regular fa-envelope" style="color: #fcfcfc; font-size: 25px; justify-content: center; text-align: center;"></i>
                <label class = "lblEmail">   EMAIL</label>
                <input type = "email" id = "mail" class = "email" name = "email"><br>
            </div>
        
            <div class = "formPass">
                <i class="fa-solid fa-lock" style="color: #ffffff; font-size: 25px; justify-content: center; text-align: center;"></i>
                <label class = "lblPassword">PASSWORD</label>
                <input type = "password" id = "passWord" class = "password" name = "pssWord"><br>
            </div>
        
        
            <button class = "btnLog" name = "login" type= "submit">LOGIN</button>
            
        </div>
   
   <div class="forgotPass">
        <a href = "forgot" class="forgot">Forgot Password?</a>
   </div>

    <div class = "endLineOne">
        <p>Don't have an account? <a  href = "reg.php" class = "signUp">Sign up </a></p>
    </div>
    
</div>
</form>    

     
        
   
    
</body>

</html>