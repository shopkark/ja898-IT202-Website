<!-- Jazzlinne Arias 10/31 IT202-001 Phase 3 ja898@njit.edu -->

<?php
require_once("icecream.php");
$icecreams = Icecream::getIcecreams();
if ($icecreams) {
?>
   <h2>Select icecream</h2>
      <form name="icecreams" method="post">
         <select name="icecreamID" size="20">
            <?php
            foreach ($icecreams as $icecream) {
               $icecreamID = $icecream->icecreamID;
               $option = $icecreamID . " - " . $icecream->icecreamCode . ", " . $icecream->icecreamName . ", Details: " . $icecream->icecreamDescription . ", " . $icecream->icecreamFlavor . ", " . $icecream->icecreamServingSize . ", " . $icecream->icecreamTypeID . ", " . $icecream->icecreamWholesalePrice . ", " . $icecream->icecreamListPrice;
               echo "<option value=\"$icecreamID\">$option</option>\n";
            }
            ?>
         </select>
   </form>
<?php
} else {
   echo "<h2>No icecreams found.</h2>";
}
?>
