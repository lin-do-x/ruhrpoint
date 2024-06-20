<?php


include '../../../config/conn.php';
header('Content-Type: application/json');
session_start();
$u_id = $_SESSION['u_id'];
$p_id = $_POST['attr'];
$query = mysqli_query($conn,"INSERT INTO shopping_cart (u_id,p_id,crowd) VALUES ($u_id,$p_id,5)");
if($query) {
  
    echo json_encode(['message' => 'Ihre artikel wurde in warenkorb erfolgreich addiert', 'status' => true]);
}else {
    echo 2;
}

?>