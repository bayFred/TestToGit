<?php // Example 26-12: logout.php
  require_once 'header.php';

  if (isset($_SESSION['user']))
  {
    destroySession();
    
//    echo "<br><div class='center'>You have been logged out. Please
//         <a data-transition='slide' href='index.php'>click here</a>
//         to refresh the screen.</div>";
  }
  header("Location: http://localhost/TestToGit/robinsnest/index.php");
//  else echo "<div class='center'>You cannot log out because
//             you are not logged in</div>";
?>
    </div>
  </body>
</html>