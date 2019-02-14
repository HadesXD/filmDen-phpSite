<?php
    include_once 'utils/database.php';
    include_once 'utils/session.php';
    
    $username = $_POST['username'];
    $email = $_POST['email'];
    $pass1 = $_POST['password'];
    $pass2 = $_POST['passwordConfirm'];
    
        if (!empty($username) && !empty($email) && !empty($pass1) 
                && !empty($pass2) && ($pass1 == $pass2)) 
        {   
            $query = mysqli_query($link, "SELECT email FROM users WHERE email='$email'");
            
            if (mysqli_num_rows($query) != 0) {
                
                //array_push($_SESSION['alert']);
                echo "This email is already in use!";
            }
            
            else {
                $pass1 = sha1($pass1); //zakodiram geslo
                $query = sprintf("INSERT INTO users (username, email, password)"
                         . "VALUES ('%s','%s','$pass1')",
                            mysqli_real_escape_string($link, $username),
                            mysqli_real_escape_string($link, $email));
                mysqli_query($link, $query);
                //preusmeritev na prijavo
                echo "added!";
            }
        }
 ?>

