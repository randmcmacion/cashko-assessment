<?php

if (isset($_POST['login'])) {
      $email_address = $_POST['login_email_address'];
      $password = $_POST['login_password'];

      require_once '../database/database.php';
      require_once 'functions.inc.php';

      if(emptyLoginFields($email_address, $password) !== false) {
            header("location: ../login.php?error=empty_fields");
            exit();
      }

      loginUser($connection, $email_address, $password);
} else {
      header("location: ../login.php");
      exit();
}
