<?php include_once 'header.php'; ?>

<?php
require_once './database/database.php';
require_once './includes/functions.inc.php';
?>
 
<h1 class="text-center mt-5 ">Announcements</h1>
<div class="announcement-section mb-4 mt-3">
      <?php
      $sql = "SELECT * FROM announcements";
      $result = $connection->query($sql);
      if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                  echo "<div class='morph shadow-lg'>";
                  echo $row['description'];
                  echo "</div> ";
            }
      } else {
            echo "0 results";
      }
      $connection->close();
      ?>
</div>

<div class="contact-us-section">
      <div class="container">
            <div class="row shadow-lg text-center morph">
                  <p class="text-responsive">
                        MANILA LANDLINE(GLOBE): 028 876 1428
                  </p>
                  <p class="text-responsive">
                        MANILA LANDLINE(GLOBE): 028 876 1428
                  </p>
                  <p class="text-responsive">
                        CEBU LANDLINE(PLDT): 032 342 7826
                  </p>
                  <p class="text-responsive">
                        TOLL FREE (SMART, SUN, PLDT) SUBSCRIBERS: 1800 1320 0211
                  </p>
                  <p class="text-responsive">
                        PLEASE NOTE THAT CALLING FROM A SMART, SUN, PLDT IS <br> AT NO CHARGE
                  </p>
            </div>
      </div>
</div>
<?php include_once 'footer.php'; ?>