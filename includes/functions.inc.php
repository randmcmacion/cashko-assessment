<?php

function emptyRegisterFields($full_name, $email_address, $password, $confirm_password)
{
      $result = false;
      if (empty($full_name) || empty($email_address) || empty($password) || empty($confirm_password)) {
            $result = true;
      } else {
            $result = false;
      }
      return $result;
}

function confirmPasswordMatch($password, $confirm_password)
{
      $result = false;
      if ($password !== $confirm_password) {
            $result = true;
      } else {
            $result = false;
      }
      return $result;
}

function userExists($connection, $email_address)
{
      $result = false;
      $sql = "SELECT * FROM users WHERE email_address = ?; ";
      $prepared_statement = mysqli_stmt_init($connection);
      if (!mysqli_stmt_prepare($prepared_statement, $sql)) {
            header("location: ../register.php?error=user_exist_prepared_statement_error");
            exit();
      }

      mysqli_stmt_bind_param($prepared_statement, "s", $email_address);
      mysqli_stmt_execute($prepared_statement);

      $result_data = mysqli_stmt_get_result($prepared_statement);

      if ($row = mysqli_fetch_assoc($result_data)) {
            return $row;
      } else {
            $result = false;
            return $result;
      }

      mysqli_stmt_close($prepared_statement);
}

function createUser($connection, $full_name, $email_address, $password)
{
      $sql = "INSERT INTO users (full_name, email_address, password) VALUES (?, ?, ?) ; ";
      $prepared_statement = mysqli_stmt_init($connection);
      if (!mysqli_stmt_prepare($prepared_statement, $sql)) {
            header("location: ../register.php?error=create_user_prepared_statement_error");
            exit();
      }

      $password_hashed = password_hash($password, PASSWORD_DEFAULT);

      mysqli_stmt_bind_param($prepared_statement, "sss", $full_name, $email_address, $password_hashed);
      mysqli_stmt_execute($prepared_statement);
      mysqli_stmt_close($prepared_statement);
      header("location: ../register.php?error=none");
      exit();
}

function emptyLoginFields($email_address, $password)
{
      $result = false;
      if (empty($email_address) || empty($password)) {
            $result = true;
      } else {
            $result = false;
      }
      return $result;
}

function loginUser($connection, $email_address, $password)
{
      $userExist =  userExists($connection, $email_address);

      if ($userExist === false) {
            header("location: ../login.php?error=account_not_yet_created");
            exit();
      }

      $password_hashed = $userExist["password"];
      $check_password = password_verify($password, $password_hashed);

      if ($check_password === false) {
            header("location: ../login.php?error=account_not_yet_created");
            exit();
      } else if ($check_password === true) {
            session_start();
            $_SESSION['user_id'] = $userExist['user_id'];
            $_SESSION['email_address'] = $userExist['email_address']; 
            header("location: ../index.php");
            exit();
      }
}

function emptyAnnouncementFields($title, $description)
{
      $result = false;
      if (empty($title) || empty($description)) {
            $result = true;
      } else {
            $result = false;
      }
      return $result;
} 

function createAnnouncement($connection, $title, $description)
{
      $sql = "INSERT INTO announcements (title, description) VALUES (?, ?) ; ";
      $prepared_statement = mysqli_stmt_init($connection);
      if (!mysqli_stmt_prepare($prepared_statement, $sql)) {
            header("location: ../create-announcement.php?error=create_announcement_sql_error");
            exit();
      }

      mysqli_stmt_bind_param($prepared_statement, "ss", $title, $description);
      mysqli_stmt_execute($prepared_statement);
      mysqli_stmt_close($prepared_statement);
      header("location: ../create-announcement.php?error=none");
      exit();
}
