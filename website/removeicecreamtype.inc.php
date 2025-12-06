<!-- Jazzlinne Arias 12/5 IT202-001 Phase 5 ja898@njit.edu -->

<?php
error_log("\$_POST " . print_r($_POST, true));
require_once("icecreamtype.php");
if (isset($_SESSION['login'])) {
   $icecreamTypeID = filter_input(INPUT_POST, 'icecreamTypeID', FILTER_VALIDATE_INT);
   if (is_int($icecreamTypeID)) { 
      $icecreamType = IcecreamType::findType($icecreamTypeID);
      $result = $icecreamType->removeType();
      if ($result)
         echo "<h2>Icecream type $icecreamTypeID removed</h2>\n";
      else
         echo "<h2>Sorry, problem removing icecream type $icecreamTypeID</h2>\n";
   } else {
      echo "<h2>You did not select a valid icecream type ID</h2>\n";
   }
} else {
   echo "<h2>Please login first</h2>\n";
}
?>
