<?php

if (isset($_POST["register"])) {

      $full_name = $_POST['full_name']; 
      $email_address = $_POST['email_address']; 
      $password = $_POST['password'];
      $confirm_password = $_POST['confirm_password'];

      require_once '../database/database.php';
      require_once 'functions.inc.php';

      if (emptyRegisterFields($full_name, $email_address, $password, $confirm_password) !== false) {
            header("location: ../register.php?error=empty_fields");
            exit();
      }

      if (confirmPasswordMatch($password, $confirm_password) !== false) {
            header("location: ../register.php?error=password_mismatched");
            exit();
      }

      if (userExists($connection, $email_address) !== false) {
            header("location: ../register.php?error=user_exists");
            exit();
      }

      createUser($connection, $full_name, $email_address, $password);

} else {
      header("location: ../register.php");
      exit();
}
