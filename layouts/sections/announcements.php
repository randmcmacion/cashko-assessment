<h1 class="text-center mt-5 ">Announcements</h1>
<div class="announcement-section mb-4 mt-3">
      <?php
      $sql = "SELECT * FROM announcements";
      $result = $connection->query($sql);
      if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                  echo "<div class='morph'>";
                  echo $row['description'];
                  echo "</div> ";
            }
      } else {
            echo "0 results";
      }
      $connection->close();
      ?>
</div>