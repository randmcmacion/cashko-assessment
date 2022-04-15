<?php session_start(); ?>
<!doctype html>
<html lang="en">

<head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">

      <!-- Bootstrap CSS -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
      <link rel="stylesheet" href="./assets/css/style.css">

      <title>CashKo</title>
</head>

<body>
      <div class="container-fluid">
            <div class="row bg-dark  text-center">
                  <?php
                  if (isset($_SESSION['user_id'])) {
                        echo "<a>";
                        echo " <button type='button' class='btn btn-disabled me-2 text-white'>Welcome: ";
                        echo "<strong>";
                        echo $_SESSION['email_address'];
                        echo "</strong>";
                        echo " Created at: April 14, 2022";
                        echo "</button>";
                        echo "</a>";
                  }
                  ?>
            </div>
      </div>
      <header class="navbar navbar-expand-lg navbar-light" style="margin-bottom:100px;" aria-label="Ninth navbar example">
            <div class="container-xl">
                  <a href="../index.php">
                        <img src="./assets/images/logo.png" alt="">
                  </a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample07XL" aria-controls="navbarsExample07XL" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                  </button>

                  <div class="collapse navbar-collapse" id="navbarsExample07XL">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                              <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="../index.php">HOME</a>
                              </li>
                              <li class="nav-item dropdown">
                                    <a class="link-dark nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                          INSURANCE
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-light shadow-lg " aria-labelledby="navbarDarkDropdownMenuLink">
                                          <li><a class="dropdown-item" href="#">Sales</a></li>
                                          <li><a class="dropdown-item" href="#">Collections</a></li>
                                          <li><a class="dropdown-item" href="#">Claims</a></li>
                                          <li><a class="dropdown-item" href="#">Modifications</a></li>
                                          <li><a class="dropdown-item" href="#">Cancellations</a></li>
                                    </ul>
                              </li>
                              <li class="nav-item dropdown">
                                    <a class="link-dark nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                          REPORTS
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-light  shadow-lg" aria-labelledby="navbarDarkDropdownMenuLink">
                                          <li><a class="dropdown-item" href="#">View Sales</a></li>
                                          <li><a class="dropdown-item" href="#">View Collections</a></li>
                                          <li><a class="dropdown-item" href="#">View Claims</a></li>
                                    </ul>
                              </li>
                              <li class="nav-item dropdown">
                                    <a class="link-dark nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                          SETTLEMENT
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-light " aria-labelledby="navbarDarkDropdownMenuLink">
                                          <li><a class="dropdown-item" href="#">Funding</a></li>
                                          <li><a class="dropdown-item" href="#">Wallet Balance</a></li>
                                          <li><a class="dropdown-item" href="#">Daily Transactions</a></li>
                                    </ul>
                              </li>

                        </ul>
                        <div class="col-md-8 text-end">

                              <?php

                              if (isset($_SESSION['user_id'])) {
                                    echo
                                    "     
                                          <a href='./create-announcement.php'>
                                                <button type='button' class='btn btn-dark  me-2'>Create Announcement</button>
                                          </a>
                                          <a href='./includes/logout.inc.php'>
                                                <button type='button' class='btn btn-danger me-2'>Logout</button>
                                          </a>
                                    ";
                              } else {
                                    echo
                                    "
                                          <a href='./login.php'>
                                                <button type='button' class='btn  me-2'>Login</button>
                                          </a>
                                          <a href='./register.php'>
                                                <button type='button' class='btn btn-primary me-2'>Register</button>
                                          </a>
                                    ";
                              }

                              ?>
                        </div>
                  </div>
            </div>
      </header>