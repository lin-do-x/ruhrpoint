


<?php
// send.php
header('Content-Type: application/json');

include '../../config/conn.php';

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

$check_email_if_exists = "SELECT * FROM user WHERE email = '$email';";
$send_check_email_if_exists = $conn->query($check_email_if_exists);
$sql = "INSERT INTO user (username, email, pass) VALUES ('$name', '$email', '$password')";

if(!$row = mysqli_num_rows($send_check_email_if_exists) > 0) {
if ($conn->query($sql) === TRUE) {
    echo json_encode(['message' => true]);
} else {
    echo json_encode(['message' => 'Error: ' . $sql . '<br>' . $conn->error]);
}
}else {
    echo json_encode(['message' => false]);
}
$conn->close();
?>
