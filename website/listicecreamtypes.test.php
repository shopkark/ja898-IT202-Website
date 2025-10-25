<!-- Jazzlinne Arias 10/24 IT202-001 Phase 2 ja898@njit.edu -->

<?php
require_once("icecreamtype.php");
$icecreamTypes = IcecreamType::getTypes();
foreach($icecreamTypes as $icecreamType) {
   $icecreamTypeID = $icecreamType->icecreamTypeID;
   $name = $icecreamTypeID . " - " . $icecreamType->icecreamTypeCode . ", " . $icecreamType->icecreamTypeName . ", " . $icecreamType->icecreamTypeMachine;
   echo "$name<br>";
}
?>
