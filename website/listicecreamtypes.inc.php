<!-- Jazzlinne Arias 10/31 IT202-001 Phase 3 ja898@njit.edu -->

<?php
require_once("icecreamtype.php");
$icecreamTypes = IcecreamType::getTypes();
if ($icecreamTypes) {
?>
 <h2>Select Icecream Type</h2>
  <form name="icecreamtypes" method="post">
   <select name="icecreamTypeID" size="20">
       <?php
      foreach($icecreamTypes as $icecreamType) {
         $icecreamTypeID = $icecreamType->icecreamTypeID;
         $name = $icecreamTypeID . " - " . $icecreamType->icecreamTypeCode . ", " . $icecreamType->icecreamTypeName . ", " . $icecreamType->icecreamTypeMachine;
         echo "<option value=\"$icecreamTypeID\">$name</option>\n";
      }
      ?>
   </select>
  </form>
<?php
} else {
   echo "<h2>No icecream types found.</h2>";
}
?>