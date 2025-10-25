<?php
require_once("icecreamtype.php");
$icecreamTypes = IcecreamType::getTypes();
foreach($icecreamTypes as $icecreamType) {
   $icecreamTypeID = $icecreamType->icecreamTypeID;
   $name = $icecreamTypeID . " - " . $icecreamType->icecreamTypeCode . ", " . $icecreamType->icecreamTypeName . ", " . $icecreamType->icecreamTypeMachine;
   echo "$name<br>";
}
?>
