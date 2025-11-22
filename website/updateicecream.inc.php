<!-- Jazzlinne Arias 11/21 IT202-001 Phase 4 ja898@njit.edu -->

<?php
if (!isset($_POST['icecreamID']) or (!is_numeric($_POST['icecreamID']))) {
?>
   <h2>You did not select a valid icecream ID value</h2>
   <a href="index.php?content=listicecreams">List icecreams</a>
   <?php
} else {
   $icecreamID = filter_input(INPUT_POST, 'icecreamID', FILTER_VALIDATE_INT);
    if (is_numeric($icecreamID)) {
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
                <td><input type="text" name="icecreamCode" size="5" minlength="3" maxlength="50" value="<?php echo $icecream->icecreamCode; ?>" required></td>
            </tr>
            <tr>
                <td>Name:</td>
                <td><input type="text" name="icecreamName" size="20" maxlength="100" value="<?php echo $icecream->icecreamName; ?>" required></td>
                </tr>
            <tr>
                <td>Description:</td>
                <td><textarea name="icecreamDescription" size="20" maxlength="500"><?php echo $icecream->icecreamDescription; ?></textarea></td>
            </tr>
            <tr>
                <td>Flavor:</td>
                <td><input type="text" name="icecreamFlavor" size="20" value="<?php echo $icecream->icecreamFlavor; ?>"></td>
            </tr>
            <tr>
                <td>Serving Size:</td>
                <td><input type="text" name="icecreamServingSize" size="5" value="<?php echo $icecream->icecreamServingSize; ?>"></td>
            </tr>
            <tr>
                <td>Icecream type ID</td>
                <td><input type="number" name="icecreamTypeID" size="5" min="1" max="999" value="<?php echo $icecream->icecreamTypeID; ?>" required></td>
            </tr>
            <tr>
                <td>Wholesale Price:</td>
                <td><input type="float" name="icecreamWholesalePrice" size="5" min="0" max="999" value="<?php echo $icecream->icecreamWholesalePrice; ?>" required></td>
            </tr>
            <tr>
                <td>List Price:</td>
                <td><input type="float" name="icecreamListPrice" size="5" min="0" max="999" value="<?php echo $icecream->icecreamListPrice; ?>" required></td>
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
            <h2>Sorry, icecream #<?php echo $icecreamID; ?> not found</h2>
            <a href="index.php?content=listicecreams">List Icecreams</a>
        <?php
        }
    } else {
        ?>
        <h2>You did not select a valid icecream ID value</h2>
        <a href="index.php?content=listicecreams">List icecreams</a>
        <?php
    }
}
?>