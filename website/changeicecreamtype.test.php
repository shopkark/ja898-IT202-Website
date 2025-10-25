<?php
require_once("icecreamtype.php");
$icecreamTypeID = $_POST['icecreamTypeID'];
$icecreamType = IcecreamType::findType($icecreamTypeID);
$icecreamType->icecreamTypeID = $_POST['icecreamTypeID'];
$icecreamType->icecreamTypeCode = $_POST['icecreamTypeCode'];
$icecreamType->icecreamTypeName = $_POST['icecreamTypeName'];
$icecreamType->icecreamTypeMachine = $_POST['icecreamTypeMachine'];
$result = $icecreamType->updateType();
if ($result) {
   echo "<h2>Icecream type $icecreamTypeID updated</h2>\n";
} else {
   echo "<h2>Problem updating icecream type $icecreamTypeID</h2>\n";
}
?>
