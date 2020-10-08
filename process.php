<?php
  if (isset($_POST['email']))  {
  
    //Email information
    $admin_email = "luckyanry@gmail.com";
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    // $message = $_POST['message'];
    
    //send email
    mail($admin_email, "New Form Submission - Test of EdgeLedger page", "Phone number:" . $phone, "From:" . $email);
    
    header('Location: https://edgeledger.com/success.html');
  } 
?>