<?php
// send.php
header('Content-Type: application/json');
include '../../config/conn.php';
session_start();



$email = $_POST['email'];
$password = $_POST['password'];

// $email = 'Mohmad.althamer@gmail.com';
// $password = 'T123h1234';


$check_email_if_exists = "SELECT * FROM user WHERE email = '$email';";
$send_check_email_if_exists = $conn->query($check_email_if_exists);

$check_email_if_active = "SELECT * FROM user WHERE email = '$email' AND is_active = 1;";
$send_check_email_if_active = $conn->query($check_email_if_active);

$check_email_and_password = "SELECT * FROM user WHERE email = '$email' AND pass = '$password';";
$send_check_email_and_password = $conn->query($check_email_and_password);


function generateRandomToken($length = 32) {
    // Generate random bytes
    $bytes = random_bytes($length / 2);
    // Convert the binary data into hexadecimal representation
    $token = bin2hex($bytes);
    return $token;
}

// Usage
$token = generateRandomToken();

if (mysqli_num_rows($send_check_email_if_exists) > 0) {
    if (mysqli_num_rows($send_check_email_if_active) > 0) {
        if (mysqli_num_rows($send_check_email_and_password) > 0) {
            
            $res = mysqli_fetch_assoc($send_check_email_and_password);
            
            $_SESSION['u_id'] = $res['u_id'];
            $_SESSION['username'] = $res['username'];
            $_SESSION['email'] = $res['email'];
            $_SESSION['Active_Code'] = $res['Active_Code'];
            $_SESSION['role'] = $res['role'];
            
            $Active_Code = $_SESSION['Active_Code'];
            $_SESSION['logged_in'] = true;
           
           
            echo json_encode(['message' => 'Email und pass sind richtig', 'status' => true , 'token' => $Active_Code ]);
        } else {
            echo json_encode(['message' => 'Email oder pass sind falsch', 'status' => false]);
            // $_SESSION['logged_in'] = false;
        }
    } else {
        echo json_encode(['message' => 'Bitte aktivieren Sie Ihre Email', 'status' => false]);
        // $_SESSION['logged_in'] = false;
    }
} else {
    echo json_encode(['message' => 'Email ist nicht vorhanden', 'status' => false]);
    // $_SESSION['logged_in'] = false;
}

$conn->close();
?>



<?php
// // send.php
// header('Content-Type: application/json');

// include '../../config/conn.php';

// $email = $_POST['email'];
// $password = $_POST['password'];


// // $email = 'mohmad.althamer@gmail.com';
// // $password = 't123h123cccCCCer4';

// $check_email_if_exists = "SELECT * FROM user WHERE email = '$email';";
// $send_check_email_if_exists = $conn->query($check_email_if_exists);

// $check_email_if_active = "SELECT * FROM user WHERE email = '$email' AND is_active = 1;";
// $send_check_email_if_active = $conn->query($check_email_if_active);


// $check_email_and_password = "SELECT * FROM user WHERE email = '$email' AND pass = '$password';";
// $send_check_email_and_password = $conn->query($check_email_and_password);






// if($row_1 = mysqli_num_rows($send_check_email_if_exists) > 0) {
//         // echo 'email ist vorhanden';
//     if($row_2 = mysqli_num_rows($send_check_email_if_active) > 0) {
//         // echo 'email ist active';

//         if($row_3 = mysqli_num_rows($send_check_email_and_password) > 0) {
            
//             echo json_encode(['message' => 'email und pass sind  richtig' , 'status' => true]);
//         }else {
//             echo 'email und pass sind  falsh';
            
//             echo json_encode(['message' => 'Email oder password sind Falsh' , 'status' => false]);
            
//         }   

//     }else {
       
//         echo json_encode(['message' => 'Bitte aktivieren Sie Ihre Email' , 'status' => false]);
//     }

// }else {
   
//     echo json_encode(['message' => 'email ist nicht vorhanden' , 'status' => false]);
   
// }








// // if($row = mysqli_num_rows($send_check_email_if_exists) > 0) {
// // if ($conn->query($sql) === TRUE) {
// //     echo json_encode(['message' => true]);
// // } else {
// //     echo json_encode(['message' => 'Error: ' . $sql . '<br>' . $conn->error]);
// // }
// // }else {
// //     echo json_encode(['message' => false]);
// // }
// $conn->close();
?> 
