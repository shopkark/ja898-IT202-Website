<!-- Jazzlinne Arias 10/31 IT202-001 Phase 3 ja898@njit.edu -->

<script language="javascript">
   function listbox_dblclick() {
       document.icecreamtypes.displayicecreamtype.click();
   }
   function button_click(target) {
       var userConfirmed = true;
       if (target == 1) {
           userConfirmed = confirm("Are you sure you want to remove this icecream type?");
       }
       if (userConfirmed) {
           if (target == 0) icecreamtypes.action = "index.php?content=displayicecreamtype";
           if (target == 1) icecreamtypes.action = "index.php?content=removeicecreamtype";
           if (target == 2) icecreamtypes.action = "index.php?content=updateicecreamtype";
       } else {
           alert("Action canceled.");
       }
   }
</script>

<?php
require_once("icecreamtype.php");
$icecreamTypes = IcecreamType::getTypes();
if ($icecreamTypes) {
?>
 <h2>Select Icecream Type</h2>
  <form name="icecreamtypes" method="post">
   <select ondblclick="listbox_dblclick()" name="icecreamTypeID" size="20">
       <?php
      foreach($icecreamTypes as $icecreamType) {
         $icecreamTypeID = $icecreamType->icecreamTypeID;
         $name = $icecreamTypeID . " - " . $icecreamType->icecreamTypeCode . ", " . $icecreamType->icecreamTypeName . ", " . $icecreamType->icecreamTypeMachine;
         echo "<option value=\"$icecreamTypeID\">$name</option>\n";
      }
      ?>
   </select>

   <br>
   <input type="submit" onClick="button_click(0)" name="displayicecreamtype" value="View Icecream Type">
   <input type="submit" onClick="button_click(1)" name="deleteicecreamtype" value="Delete Icecream Type">
   <input type="submit" onClick="button_click(2)" name="updateicecreamtype" value="Update Icecream Type">
  </form>
<?php
} else {
   echo "<h2>No icecream types found.</h2>";
}
?>