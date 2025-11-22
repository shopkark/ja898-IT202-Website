<!-- Jazzlinne Arias 11/21 IT202-001 Phase 4 ja898@njit.edu -->

<?php
require_once("icecream.php");
if (isset($_SESSION['login'])) {
  $icecreamID = filter_input(INPUT_POST, 'icecreamID', FILTER_VALIDATE_INT);
  if ((trim($icecreamID) == '') or (!is_int($icecreamID))) {
    echo "<h2>Sorry, you must enter a valid icecream ID number</h2>\n";
  } else if (Icecream::findIcecream($icecreamID)) {
    echo "<h2>Sorry, an icecream with the ID #$icecreamID already exists</h2>\n";
  } else {
    $icecreamCode = htmlspecialchars($_POST['icecreamCode']);
    $icecreamName = htmlspecialchars($_POST['icecreamName']);
    $icecreamDescription = htmlspecialchars($_POST['icecreamDescription']);
    $icecreamFlavor = htmlspecialchars($_POST['icecreamFlavor']);
    $icecreamServingSize = htmlspecialchars($_POST['icecreamServingSize']);
    $icecreamTypeID = htmlspecialchars($_POST['icecreamTypeID']);
    $icecreamWholesalePrice = htmlspecialchars($_POST['icecreamWholesalePrice']);
    $icecreamListPrice = htmlspecialchars($_POST['icecreamListPrice']);
    $icecream = new Icecream($icecreamID, $icecreamCode, $icecreamName, $icecreamDescription, $icecreamFlavor, $icecreamServingSize, $icecreamTypeID, $icecreamWholesalePrice, $icecreamListPrice);
    $result = $icecream->saveIcecream();
    if ($result) {
        echo "<h2>New icecream #$icecreamID successfully added</h2>\n";
        echo "<h2>$icecream</h2>\n";
    } else {
        echo "<h2>Sorry, there was a problem adding that icecream</h2>\n";
  }
}
} else {
  echo "<h2>Please login first</h2>\n";
}
?>
