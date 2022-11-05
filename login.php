<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User login</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

    <?php

    $users = array(
        array("Username"=>"admin","Password"=>"admin"),
        array("Username"=>"admin","Password"=>"12345"),
       
    );
    
    $usernameInput = $_POST['username'];
    $passwordInput = $_POST['password'];
    
        for ($n = 0; $n <= count($users); $n++) {
            if($users[$n]['Username'] == $usernameInput AND $users[$n]['Password'] == $passwordInput){
                $msg1 = "Welcome ". $usernameInput ;   
                $msg2 = "Login Successful";
                break;
             }if($users[$n]['Username'] != $usernameInput AND $users[$n]['Password'] != $passwordInput){
                $msg1 = "Username does not exist";
                $msg2 = "Login Failed";
                 break;
             }if($users[$n]['Password'] != $passwordInput AND $users[$n]['Username'] != $usernameInput){
                $msg1 = "Access Denied";
                $msg2 = "Login Failed";
                 break;
             }
        }
        ?>


<!DOCTYPE html>
<h3>User Validation</h3>
<h3>Result</h3>
<?php echo $msg1 . "<br>"?>
<?php echo $msg2 ?> 
</html>
