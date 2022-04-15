<?php include_once './layouts/header.php'; ?>

<div class="container">
      <div class="row">
            <div class="col-md-4 offset-md-4 p-4 rounded register-container">
                  <form class="d-flex justify-content-center flex-column " action="./includes/register.inc.php" method="post">
                        <div class="site-logo d-flex justify-content-center my-3">
                              <img src="./assets/images/logo.png" alt="">
                        </div>
                        <h2 class="text-center py-4">Register</h2>
                        <?php
                        if (isset($_GET['error'])) {
                              if ($_GET['error'] == "empty_fields") {
                                    echo
                                    "
                                          <div class='alert alert-danger alert-dismissible fade show' role='alert'>
                                                Input Required Fields
                                                <a type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></a>
                                          </div>
                                    ";
                              } else if ($_GET['error'] == "create_user_prepared_statement_error") {
                                    echo
                                    "
                                          <div class='alert alert-danger alert-dismissible fade show' role='alert'>
                                                User Exists SQL Error
                                                <a type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></a>
                                          </div>
                                    ";
                              } else if ($_GET['error'] == "create_user_prepared_statement_error") {
                                    echo
                                    "
                                          <div class='alert alert-danger alert-dismissible fade show' role='alert'>
                                                SQL Error while creating an account
                                                <a type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></a>
                                          </div>
                                    ";
                              } else if ($_GET['error'] == "user_exist_prepared_statement_error") {
                                    echo
                                    "
                                          <div class='alert alert-danger alert-dismissible fade show' role='alert'>
                                                SQL Error while checking if user exists
                                                <a type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></a>
                                          </div>
                                    ";
                              } else if ($_GET['error'] == "password_mismatched") {
                                    echo
                                    "
                                          <div class='alert alert-danger alert-dismissible fade show' role='alert'>
                                                Password Mismatched
                                                <a type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></a>
                                          </div>
                                    ";
                              } else if ($_GET['error'] == "user_exists") {
                                    echo
                                    "
                                          <div class='alert alert-danger alert-dismissible fade show' role='alert'>
                                                Account already exists
                                                <a type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></a>
                                          </div>
                                    ";
                              } else {
                                    echo
                                    "
                                          <div class='alert alert-success alert-dismissible fade show' role='alert'>
                                                Successfully Created an Account
                                                <a type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></a>
                                          </div>
                                    ";
                              }
                        }
                        ?>

                        <div class="mb-3">
                              <input type="text" name="full_name" class="form-control shadow-none" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Full Name">
                        </div>
                        <div class="mb-3">
                              <input type="email" name="email_address" class="form-control shadow-none" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email Address">
                        </div>
                        <div class="mb-3">
                              <input type="password" name="password" class="form-control shadow-none" id="exampleInputPassword1" placeholder="Password">
                        </div>
                        <div class="mb-3">
                              <input type="password" name="confirm_password" class="form-control shadow-none" id="exampleInputPassword1" placeholder="Confirm your Password">
                        </div>
                        <button type="submit" name="register" class="btn btn-primary">Register</button>

                  </form>

            </div>
      </div>
</div>


<?php include_once './layouts/footer.php'; ?>