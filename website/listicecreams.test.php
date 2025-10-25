<!-- Jazzlinne Arias 10/24 IT202-001 Phase 2 ja898@njit.edu -->

<?php
require_once("icecream.php");
$icecreams = Icecream::getIcecreams();
foreach($icecreams as $icecream) {
   $icecreamID = $icecream->icecreamID;
   $name = $icecreamID . " - " . $icecream->icecreamCode . ", " . $icecream->icecreamName . "\nDetails: " . $icecream->icecreamDescription . ", " . $icecream->icecreamFlavor . ", " . $icecream->icecreamServingSize . ", " . $icecream->icecreamTypeID . ", " . $icecream->icecreamWholesalePrice . ", " . $icecream->icecreamListPrice;
   echo "$name<br>";
}
?>
