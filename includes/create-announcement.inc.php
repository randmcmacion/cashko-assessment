<?php

if (isset($_POST["create-announcement"])) {

      $title = $_POST['title'];
      $description = $_POST['description'];

      require_once '../database/database.php';
      require_once 'functions.inc.php';

      if (emptyAnnouncementFields($title, $description) !== false) {
            header("location: ../create-announcement.php?error=empty_fields");
            exit();
      }

      createAnnouncement($connection, $title, $description);
} else {
      header("location: ../register.php");
      exit();
}
