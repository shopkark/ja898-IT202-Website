<!-- Jazzlinne Arias 12/5 IT202-001 Phase 5 ja898@njit.edu -->

<?php
error_log("\$_POST " . print_r($_POST, true));
require_once("icecream.php");
if (isset($_SESSION['login'])) {
   $icecreamID = filter_input(INPUT_POST, 'icecreamID', FILTER_VALIDATE_INT);
   if (is_int($icecreamID)) {
      $icecream = Icecream::findIcecream($icecreamID);
      $result = $icecream->removeIcecream();
      if ($result)
         echo "<h2>Icecream $icecreamID removed</h2>\n";
      else
         echo "<h2>Sorry, problem removing icecream $icecreamID</h2>\n";
   } else {
      echo "<h2>You did not select a valid icecream ID value</h2>\n";
   }
} else {
   echo "<h2>Please login first</h2>\n";
}
?>
