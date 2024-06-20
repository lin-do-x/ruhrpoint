
<?php
// send.php


include '../../config/conn.php';


$email = $_GET['email'];

$Active_Code = $_GET['active_Code'];

// Check email if active
$check_email_if_active = "SELECT * FROM user WHERE email = '$email' AND is_active = 1;";
$send_check_email_if_active = $conn->query($check_email_if_active);
$sql = "UPDATE  user set Active_Code = '$Active_Code'  , is_active = true WHERE email = '$email';";





if(!$row = mysqli_num_rows($send_check_email_if_active) > 0) {
    if ($conn->query($sql) === TRUE) {
        // echo json_encode(['message' => 'New record created successfully']);
    } else {
        // echo json_encode(['message' => 'Error: ' . $sql . '<br>' . $conn->error]);
    }
    // print_r($send_check_email_if_active);
    // echo 'yesssssss';
    $active_message = 'Ihre Account wurde aktiviert Sie können Sich jetzt anmelden';
    $active_color = 'bg-green-600';
}else {
    $active_message = 'Dieser Link ist nicht mehr Gültig';
    $active_color = 'bg-red-600';



}



$conn->close();
?>







  
  
  
  <!-- ================= start Started ==================== -->
  <?php   include '../../tablemts/gast/send_active_code/start_page.php'; ?>
  <!-- ================= start Ended ==================== -->
  
  <!-- ================= Whatsapp Started ==================== -->
      <?php   include '../../tablemts/gast/send_active_code/whatsapp_btn.php'; ?>
  <!-- ================= Whatsapp Ended ==================== -->



  <!-- ================= Header Started ==================== -->
  <?php   include '../../tablemts/gast/send_active_code/header.php'; ?>
  <!-- ================= Header Ended ==================== -->


  <!-- ================= Sidebar Started ==================== -->
  <?php   include '../../tablemts/gast/send_active_code/sidebar.php'; ?>
  <!-- ================= Sidebar Ended ==================== -->



  <!-- ================= Main Started ==================== -->
  <main class="py-20 overflow-hidden">
    

    <div class="font-[sans-serif] text-[#333] mt-4 p-4 relative">
        <div class="max-w-md w-full mx-auto h-96 relative z-10">
          <div class="text-center mb-8">
            
          </div>
          <div class="border border-gray-300 bg-white rounded-md p-8 ">
           
         
              <div class="!my-10">
                <button type="button" class="w-full py-3 px-4 text-sm font-semibold rounded text-white <?php echo $active_color?> focus:outline-none">
                    <?php echo $active_message?>
                </button>
              </div>
           
          </div>
        </div>
        <img src="https://readymadeui.com/bg-effect.svg" class="absolute inset-0 w-full h-full z-0 opacity-40" />
      </div>
    
    
  </main>

  <!-- ================= Main Ended ==================== -->



  <!-- ================= Footer Started ==================== -->
  <?php   include '../../tablemts/gast/send_active_code/footer.php'; ?>
  <!-- ================= Footer Ended ==================== -->





  <!-- ================= Scripts Started ==================== -->
  <?php   include '../../tablemts/gast/send_active_code/scripts.php'; ?>
  <!-- ================= Scripts Ended ==================== -->





  <!-- ================= end_page Started ==================== -->
  <?php   include '../../tablemts/gast/send_active_code/end_page.php'; ?>

  <!-- ================= end_page Ended ==================== -->