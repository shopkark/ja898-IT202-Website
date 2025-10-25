<?php
error_log("\$_POST " . print_r($_POST, true));
require_once("icecreamtype.php");
$icecreamTypeID = $_POST['icecreamTypeID'];
$icecreamType = IcecreamType::findType($icecreamTypeID);
$result = $icecreamType->removeType();
if ($result)
   echo "<h2>Icecream type $icecreamTypeID removed</h2>\n";
else
   echo "<h2>Sorry, problem removing icecream type $icecreamTypeID</h2>\n";
?>
