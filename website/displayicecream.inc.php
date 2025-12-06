<!-- Jazzlinne Arias 12/5 IT202-001 Phase 5 ja898@njit.edu -->

<?php
if (!isset($_REQUEST['icecreamID']) or (!is_numeric($_REQUEST['icecreamID']))) {
?>
 <h2>You did not select a valid icecreamID to view.</h2>
 <a href="index.php?content=listicecreams">List Icecreams</a>
 <?php
} else {
 $icecreamID = $_REQUEST['icecreamID'];
 $icecream = Icecream::findIcecream($icecreamID);
 if ($icecream) {
 ?>
    <h2>Icecream ID: <?php echo $icecream->icecreamID; ?></h2>
    <h2>Icecream Code: <?php echo $icecream->icecreamCode; ?></h2>
    <h2>Icecream Name: <?php echo $icecream->icecreamName; ?></h2>
    <h2>Description: <?php echo $icecream->icecreamDescription; ?></h2>
    <h2>Flavor: <?php echo $icecream->icecreamFlavor; ?></h2>
    <h2>Serving size: <?php echo $icecream->icecreamServingSize; ?></h2>
    <h2>Wholesale price: <?php echo $icecream->icecreamWholesalePrice; ?></h2>
    <h2>List price: <?php echo $icecream->icecreamListPrice; ?></h2>
    <br>
<?php
 } else {
   echo "<h2>Sorry, icecream not found</h2>\n";
 }
}
?>