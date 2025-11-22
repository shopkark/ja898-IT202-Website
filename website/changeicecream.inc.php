<!-- Jazzlinne Arias 11/21 IT202-001 Phase 4 ja898@njit.edu -->

<?php
require_once("icecream.php");

if (isset($_SESSION['login'])) {
   $icecreamID = filter_input(INPUT_POST, 'icecreamID', FILTER_VALIDATE_INT);
   $answer = $_POST['answer'];
   if ($answer == "Update Icecream") {
      $icecreamID = $_POST['icecreamID'];
      $icecream = Icecream::findIcecream($icecreamID);
      $icecream->icecreamCode = htmlspecialchars($_POST['icecreamCode']);
      $icecream->icecreamName = htmlspecialchars($_POST['icecreamName']);
      $icecream->icecreamDescription = htmlspecialchars($_POST['icecreamDescription']);
      $icecream->icecreamFlavor = htmlspecialchars($_POST['icecreamFlavor']);
      $icecream->icecreamServingSize = htmlspecialchars($_POST['icecreamServingSize']);
      $icecream->icecreamTypeID = htmlspecialchars($_POST['icecreamTypeID']);
      $icecream->icecreamWholesalePrice = htmlspecialchars($_POST['icecreamWholesalePrice']);
      $icecream->icecreamListPrice = htmlspecialchars($_POST['icecreamListPrice']);
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
