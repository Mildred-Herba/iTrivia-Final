<?php
include "conn.php";
session_start();

if($_SERVER['REQUEST_METHOD'] == "POST"){

    if (isset($_POST["save"])){
        $uName = $_POST['userName'];
        $emL = $_POST['eMail'];
        $pWord = $_POST['passWord'];
        $sql = "INSERT INTO myinfo (_username, _email, _password) VALUES ('$uName', '$emL', '$pWord')";

        if (mysqli_query($con, $sql)){
            header ("Location: login.php");
            die;
        } else {
            echo "Error: " .$sql . "<br>" . mysqli_error($con);
        }
    }      
}


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/reg.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <title>Sign Up</title>
</head>
<body>

    <div class = "signForm">
        <div class = "headLine">
             <p class = "createAcc">Create Account</p>
             <p>Please fill the input below here.</p>
        </div>

    <div class = "signUp">

        <!--userName-->
        <form method="post" autocomplete="off">
            <div class = "fullNameCon">
                <i class="fa-regular fa-user" style="color: #ffffff; font-size: 20px; justify-content: center; text-align: center;"></i> 
                <label class = "lblFullName">  USERNAME</label>
                <input type = "text" class = "fullName" name = "userName"><br>
            </div>
            
            <!--email-->
            <div class = "firstNameCon">
                <i class="fa-regular fa-envelope" style="color: #fcfcfc; font-size: 20px; justify-content: center; text-align: center;"></i>
                <label class = "lblFirstName">   EMAIL</label>
                <input type = "text" class = "firstName" name = "eMail"><br>
            </div>

            <div class = "passWordCon">
                 <i class="fa-solid fa-lock" style="color: #ffffff; font-size: 20px; justify-content: center; text-align: center;"></i> 
                <label class = "lblPasswordOne">PASSWORD</label>
                <input type = "password" class = "passwordSign" name = "passWord"><br>
            </div>

            <div class = "conFrimPass">
                <i class="fa-solid fa-lock" style="color: #ffffff; font-size: 20px; justify-content: center; text-align: center;"></i>
                <label class = "lblConfirmPass">   CONFIRM PASSWORD</label>
                <input type = "password" class = "confirmPass"><br>
            </div>

        
        
    </div>

    <div class = "btnSign">
        <button class = "btnSignBlue" type = "submit" name = "save">Sign Up</button>
        <p>Already have an account? <a href = "logIn.php" class="logIn">Sign in</a></p>
    </div>
</div> 
</form>
</body>
</html>