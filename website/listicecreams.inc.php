<!-- Jazzlinne Arias 12/5 IT202-001 Phase 5 ja898@njit.edu -->

<script language="javascript">
   function listbox_dblclick() {
       document.icecreams.displayicecream.click();
   }
   function button_click(target) {
       var userConfirmed = true;
       if (target == 1) {
           userConfirmed = confirm("Are you sure you want to remove this icecream?");
       }
       if (userConfirmed) {
           if (target == 0) icecreams.action = "index.php?content=displayicecream";
           if (target == 1) icecreams.action = "index.php?content=removeicecream";
           if (target == 2) icecreams.action = "index.php?content=updateicecream";
       } else {
           alert("Action canceled.");
       }
   }
</script>

<?php
require_once("icecream.php");
$icecreams = Icecream::getIcecreams();
if ($icecreams) {
?>
   <h2>Select icecream</h2>
      <form name="icecreams" method="post" >
         <select ondblclick="listbox_dblclick()" name="icecreamID" size="20">
            <?php
            foreach ($icecreams as $icecream) {
               $icecreamID = $icecream->icecreamID;
               $option = $icecreamID . " - " . $icecream->icecreamCode . ", " . $icecream->icecreamName . ", Details: " . $icecream->icecreamDescription . ", " . $icecream->icecreamFlavor . ", " . $icecream->icecreamServingSize . ", " . $icecream->icecreamTypeID . ", " . $icecream->icecreamWholesalePrice . ", " . $icecream->icecreamListPrice;
               echo "<option value=\"$icecreamID\">$option</option>\n";
            }
            ?>
         </select>
      <br>
      <input type="submit" onClick="button_click(0)" name="displayicecream" value="View Icecream">
      <input type="submit" onClick="button_click(1)" name="deleteicecream" value="Delete Icecream">
      <input type="submit" onClick="button_click(2)" name="updateicecream" value="Update Icecream">
   </form>
<?php
} else {
   echo "<h2>No icecreams found.</h2>";
}
?>
