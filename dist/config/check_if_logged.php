<?php

session_start();

if(isset($_POST['logout'])) {
    // session_start(); // Start the PHP session
    unset($_SESSION['logged_in']); // Unset the 'logged_in' session variable
    session_destroy(); // Destroy all session data
    // header('Location: http://localhost/~kali/ruhr_point/dist/login.php'); // Redirect to login page
}





if($_SESSION['logged_in'] == true) {
    // echo 'ok';
    }else {
        
        header('Location:http://localhost/~kali/ruhr_point/dist/login.php');

}


?>