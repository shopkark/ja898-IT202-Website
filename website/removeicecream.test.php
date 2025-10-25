<?php
error_log("\$_POST " . print_r($_POST, true));
require_once("icecream.php");
$icecreamID = $_POST['icecreamID'];
$icecream = Icecream::findIcecream($icecreamID);
$result = $icecream->removeIcecream();
if ($result)
   echo "<h2>Icecream $icecreamID removed</h2>\n";
else
   echo "<h2>Sorry, problem removing icecream $icecreamID</h2>\n";
?>
