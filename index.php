<?php include_once './layouts/header.php';                  // Header Template

require_once './database/database.php';                     // Database Connection
require_once './includes/functions.inc.php';                // Functions

if (isset($_SESSION['user_id'])) {
      include_once './layouts/sections/dashboard.php';      // Dashboard Section
}

include_once './layouts/sections/announcements.php';        // Announcement Section
include_once './layouts/sections/contact-us.php';           // Contact Us Section

include_once './layouts/footer.php';                        // Footer Template
