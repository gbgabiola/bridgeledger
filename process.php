<?php
  if (isset($_POST['email'])) {

    // Email Information
    $admin_email = 'genesisbritanicogabiola@yahoo.com';
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    // Send Email
    mail($admin_email, "New Form Submission", $message . ' _ ' . $phone, "From:" . $email);

    header('Location: https://bridgeledger.netlify.com/success.html');
  }