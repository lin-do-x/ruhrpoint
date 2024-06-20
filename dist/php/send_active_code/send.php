<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
 

require '../../../phpmailer/src/Exception.php';
require '../../../phpmailer/src/PHPMailer.php';
require '../../../phpmailer/src/SMTP.php';


// Set the timezone if necessary
date_default_timezone_set('UTC');


// Get the current date and time
$currentDateTime = date('Y-m-d H:i:s');


// Choose a hashing algorithm
$hashAlgorithm = 'sha256';

// Generate the hash of the current date and time
$hashedDateTime = hash($hashAlgorithm, $currentDateTime);




    $email = $_GET['email'];
    $mail = new PHPMailer(true);
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'mohmad.althamer@gmail.com';
    $mail->Password = 'ykdhbkxyjcptatlx';
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;
    $mail->setFrom('mohmad.althamer@gmail.com');
    $mail->addAddress($_GET['email']);
    $mail->isHTML(true);
    $mail->Subject = 'testRuhrpoint';
    $mail->Body = "<p>Bitte Clicken Sie auf den folgende Link um Ihre Email zu aktivieren</p><br>
                    <a href='http://localhost/~kali/ruhr_point/dist/php/send_active_code/active.php?active_Code=$hashedDateTime&email=$email'>http://localhost/~kali/ruhr_point/dist/php/send_active_code/active.php?active_Code=$hashedDateTime&email=$email</a>";
    $mail->send();

    // echo "
    
    //     <script>
        
    //         alert('Sent Successfully');
    //         document.location.href = 'index.php';
        
    //     </script>
    
    // ";






 



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
                <button type="button" class="w-full py-3 px-4 text-sm font-semibold rounded text-white bg-green-600 hover:bg-green-700 focus:outline-none">
                Bitte überprüfen Sie Ihre E-Mail. Wir haben Ihnen eine E-Mail gesendet.
                Falls Sie die E-Mail nicht finden können, überprüfen Sie bitte auch Ihren Spam-Ordner.
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