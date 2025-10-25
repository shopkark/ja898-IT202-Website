<?php
require_once("icecream.php");
$icecreamID = $_POST['icecreamID'];
if ((trim($icecreamID) == '') or (!is_numeric($icecreamID))) {
  echo "<h2>Sorry, you must enter a valid icecream ID number</h2>\n";
} else {
  $icecreamCode = $_POST['icecreamCode'];
  $icecreamName = $_POST['icecreamName'];
  $icecreamDescription = $_POST['icecreamDescription'];
  $icecreamFlavor = $_POST['icecreamFlavor'];
  $icecreamServingSize = $_POST['icecreamServingSize'];
  $icecreamTypeID = $_POST['icecreamTypeID'];
  $icecreamWholesalePrice = $_POST['icecreamWholesalePrice'];
  $icecreamListPrice = $_POST['icecreamListPrice'];
  $icecream = new Icecream($icecreamID, $icecreamCode, $icecreamName, $icecreamDescription, $icecreamFlavor, $icecreamServingSize, $icecreamTypeID, $icecreamWholesalePrice, $icecreamListPrice);
  $result = $icecream->saveIcecream();
  if ($result) {
      echo "<h2>New icecream #$icecreamID successfully added</h2>\n";
      echo "<h2>$icecream</h2>\n";
  } else {
      echo "<h2>Sorry, there was a problem adding that icecream</h2>\n";
  }
}
?>
