<!-- Jazzlinne Arias 10/31 IT202-001 Phase 3 ja898@njit.edu -->

<?php
require_once("icecream.php");

if (isset($_SESSION['login'])) {
   $icecreamID = $_POST['icecreamID'];
   $answer = $_POST['answer'];
   if ($answer == "Update Icecream") {
      $icecreamID = $_POST['icecreamID'];
      $icecream = Icecream::findIcecream($icecreamID);
      $icecream->icecreamCode = $_POST['icecreamCode'];
      $icecream->icecreamName = $_POST['icecreamName'];
      $icecream->icecreamDescription = $_POST['icecreamDescription'];
      $icecream->icecreamFlavor = $_POST['icecreamFlavor'];
      $icecream->icecreamServingSize = $_POST['icecreamServingSize'];
      $icecream->icecreamTypeID = $_POST['icecreamTypeID'];
      $icecream->icecreamWholesalePrice = $_POST['icecreamWholesalePrice'];
      $icecream->icecreamListPrice = $_POST['icecreamListPrice'];
      $result = $icecream->updateIcecream();
      if ($result) {
         echo "<h2>Icecream $icecreamID updated</h2>\n";
      } else {
         echo "<h2>Problem updating icecream $icecreamID</h2>\n";
      }
   } else {
      echo "<h2>Update canceled for icecream $icecreamID</h2>\n";
   }
} else {
   echo "<h2>Please login first</h2>\n";
}
?>
