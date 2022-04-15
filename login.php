<?php include_once './layouts/header.php'; ?>

<div class="container mt-5">
      <div class="row">
            <div class="col-md-4 offset-md-4 p-4 rounded login-container">
                  <form class="d-flex justify-content-center flex-column " action="./includes/login.inc.php" method="post">
                        <div class="site-logo d-flex justify-content-center my-3">
                              <img src="./assets/images/logo.png" alt="">
                        </div>
                        <h2 class="text-center py-4">Login</h2>
                        <?php
                        if (isset($_GET['error'])) {
                              if ($_GET['error'] == "empty_fields") {
                                    echo
                                    "
                                          <div class='alert alert-danger alert-dismissible fade show' role='alert'>
                                                Input Required FIelds
                                                <a type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></a>
                                          </div>
                                    ";
                              } else if ($_GET['error'] == "account_not_yet_created") {
                                    echo
                                    "
                                          <div class='alert alert-danger alert-dismissible fade show' role='alert'>
                                                Account is not yet created.
                                                <a type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></a>
                                          </div>
                                    ";
                              } else {
                                    echo
                                    "
                                          <div class='alert alert-success alert-dismissible fade show' role='alert'>
                                                Successfully Logged in.
                                                <a type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></a>
                                          </div>
                                    ";
                              }
                        }
                        ?>
                        <div class="mb-3">
                              <input type="email" name="login_email_address" class="form-control shadow-none" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email Address">
                        </div>
                        <div class="mb-3">
                              <input type="password" name="login_password" class="form-control shadow-none" id="exampleInputPassword1" placeholder="Password">
                        </div>
                        <button type="submit" name="login" class="btn btn-primary">LOGIN TO CASHKO</button>
                  </form>
            </div>
      </div>
</div>

<?php include_once './layouts/footer.php'; ?>