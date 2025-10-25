<?php
require_once("icecream.php");
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
?>
