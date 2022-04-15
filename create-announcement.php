<?php include("./layouts/header.php"); ?>

<div class="container">
      <div class="row">
            <div class="col-md-8 offset-md-2 p-4 rounded create-anouncement-container">
                  <form class="d-flex justify-content-center flex-column " action="./includes/create-announcement.inc.php" method="post">
                        <div class="site-logo d-flex justify-content-center my-3">
                              <img src="./assets/images/logo.png" alt="">
                        </div>
                        <h2 class="text-center py-4">Create Announcement</h2>

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
                              }
                              else   if ($_GET['error'] == "create_announcement_sql_error") {
                                    echo
                                    "
                                          <div class='alert alert-danger alert-dismissible fade show' role='alert'>
                                                SQL Error in creating the announcement
                                                <a type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></a>
                                          </div>
                                    ";
                              }
                              else if ($_GET['error'] == "none"){
                                    echo
                                    "
                                          <div class='alert alert-success alert-dismissible fade show' role='alert'>
                                                Successfully created announcement
                                                <a type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></a>
                                          </div>
                                    ";
                              }
                        }
                        ?>

                        <div class="mb-3">
                              <input type="text" name="title" class="form-control shadow-none" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Title">
                        </div>
                        <div class="mb-3">
                              <textarea name="description" id="announcementTextEditor" cols="30" rows="10">
                              </textarea>
                        </div>
                        <button type="submit" name="create-announcement" class="btn btn-primary">CREATE ANNOUNCEMENT</button>
                  </form>

            </div>
      </div>
</div>


<?php include_once './layouts/footer.php'; ?>