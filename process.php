<?php
  if (isset($_POST['email'])) {

    // Email Information
    $admin_email = 'genesisbritanicogabiola@gmail.com';
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    // Send Email
    mail($admin_email, "New Form Submission", $message . ' _ ' . $phone, "From:" . $email);

    header('Location: https://genesisgabiola.github.io/edgeledger/success.html');
  }