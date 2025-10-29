<!-- Jazzlinne Arias 10/31 IT202-001 Phase 3 ja898@njit.edu -->

<?php
if (!isset($_REQUEST['icecreamTypeID']) or (!is_numeric($_REQUEST['icecreamTypeID']))) {
?>
 <h2>You did not select a valid icecreamTypeID to view.</h2>
 <a href="index.php?content=listicecreamtypes">List Icecream Types</a>
 <?php
} else {
 $icecreamTypeID = $_REQUEST['icecreamTypeID'];
 $icecreamType = IcecreamType::findType($icecreamTypeID);
 if ($icecreamType) {
   echo $icecreamType;
   $icecreams = Icecream::getIcecreamsByType($icecreamTypeID);
   if ($icecreams) {
 ?>
     <br><br>
     <b>Icecreams:</b><br>
     <table>
       <tr>
         <th>Icecream</th>
         <th>Code</th>
         <th>Name</th>
         <th>Description</th>
         <th>Flavor</th>
         <th>Serving size</th>
         <th>Wholesale price</th>
         <th>List price</th>
       </tr>
       <?php
       $icecreamtotal = 0;
       foreach ($icecreams as $icecream) {
       ?>
         <tr>
           <td><?php echo $icecream->icecreamID; ?></td>
           <td><?php echo $icecream->icecreamCode; ?></td>
           <td><?php echo $icecream->icecreamName; ?></td>
           <td><?php echo $icecream->icecreamDescription; ?></td>
           <td><?php echo $icecream->icecreamFlavor; ?></td>
           <td><?php echo $icecream->icecreamServingSize; ?></td>
           <td><?php echo $icecream->icecreamWholesalePrice; ?></td>
           <td><?php echo $icecream->icecreamListPrice; ?></td>
         </tr>
       <?php
         $icecreamtotal = $icecreamtotal + $icecream->icecreamListPrice;
       }
       ?>
       <tr>
         <td></td>
         <td>Total</td>
         <td><?php echo '$' . number_format($icecreamtotal, 2); ?></td>
       </tr>
     </table>
<?php
   } else {
     echo "<h2>There are no icecreams for this icecream type</h2>\n";
   }
 } else {
   echo "<h2>Sorry, icecreamType $icecreamTypeID not found</h2>\n";
 }
}
?>