<!-- Jazzlinne Arias 10/31 IT202-001 Phase 3 ja898@njit.edu -->

<?php
if (!isset($_POST['icecreamID']) or (!is_numeric($_POST['icecreamID']))) {
?>
   <h2>You did not select a valid icecreamID value</h2>
   <a href="index.php?content=listicecreams">List icecreams</a>
   <?php
} else {
   $icecreamID = $_POST['icecreamID'];
   $icecream = Icecream::findIcecream($icecreamID);
   if ($icecream) {
   ?>
       <h2>Update Icecream <?php echo $icecream->icecreamID; ?></h2><br>
       <form name="icecreams" action="index.php" method="post">
           <table>
        <tr>
           <td>Icecream ID:</td>
           <td><?php echo $icecream->icecreamID; ?></td>
       </tr>
       <tr>
           <td>Code:</td>
           <td><input type="text" name="icecreamCode" value="<?php echo $icecream->icecreamCode; ?>"></td>
       </tr>
       <tr>
           <td>Name:</td>
           <td><input type="text" name="icecreamName" value="<?php echo $icecream->icecreamName; ?>"></td>
        </tr>
       <tr>
           <td>Description:</td>
           <td><input type="text" name="icecreamDescription" value="<?php echo $icecream->icecreamDescription; ?>"></td>
       </tr>
       <tr>
           <td>Flavor:</td>
           <td><input type="text" name="icecreamFlavor" value="<?php echo $icecream->icecreamFlavor; ?>"></td>
       </tr>
       <tr>
           <td>Serving Size:</td>
           <td><input type="text" name="icecreamServingSize" value="<?php echo $icecream->icecreamServingSize; ?>"></td>
       </tr>
       <tr>
           <td>Icecream type ID</td>
           <td><input type="text" name="icecreamTypeID" value="<?php echo $icecream->icecreamTypeID; ?>"></td>
       </tr>
       <tr>
           <td>Wholesale Price:</td>
           <td><input type="text" name="icecreamWholesalePrice" value="<?php echo $icecream->icecreamWholesalePrice; ?>"></td>
       </tr>
       <tr>
           <td>List Price:</td>
           <td><input type="text" name="icecreamListPrice" value="<?php echo $icecream->icecreamListPrice; ?>"></td>
       </tr>
           </table><br><br>
           <input type="submit" name="answer" value="Update Icecream">
           <input type="submit" name="answer" value="Cancel">
           <input type="hidden" name="icecreamID" value="<?php echo $icecreamID; ?>">
           <input type="hidden" name="content" value="changeicecream">
       </form>
   <?php
   } else {
   ?>
       <h2>Sorry, icecream <?php echo $icecreamID; ?> not found</h2>
       <a href="index.php?content=listicecreams">List Icecreams</a>
<?php
   }
}
?>