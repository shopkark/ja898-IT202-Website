<!-- Jazzlinne Arias 12/5 IT202-001 Phase 5 ja898@njit.edu -->

<style>
   form[name="icecreamtype"] {
       display: grid;
       grid-template-columns: 125px 1fr;
       gap: 10px 5px;
       align-items: left;
       max-width: 300px;
       margin: 0px;
   }
   form[name="icecreamtype"] label {
       text-align: left;
       padding-right: 5px;
   }
   form[name="icecreamtype"] input[type="text"] {
       width: 100%;
   }
   form[name="icecreamtype"] input[type="submit"] {
       grid-column: 2;
       justify-self: start;
   }
</style>
<?php
if (!isset($_POST['icecreamTypeID']) or (!is_numeric($_POST['icecreamTypeID']))) {
?>
   <h2>You did not select a valid icecream type ID value</h2>
   <a href="index.php?content=listicecreamtypes">List icecream types</a>
   <?php
} else {
    $icecreamTypeID = filter_input(INPUT_POST, 'icecreamTypeID', FILTER_VALIDATE_INT);
    if (is_int($icecreamTypeID)) {
        $icecreamType = IcecreamType::findType($icecreamTypeID);
        if ($icecreamType) {
        ?>
        <h2>Update Icecream Type <?php echo $icecreamTypeID; ?></h2><br>
        <form name="icecreamtype" action="index.php" method="post">
            <label for="icecreamTypeCode">Icecream Type Code:</label>
            <input type="text" name="icecreamTypeCode" id="icecreamTypeCode" value="<?php echo $icecreamType->icecreamTypeCode; ?>">
            <label for="icecreamTypeName">Icecream Type Name:</label>
            <input type="text" name="icecreamTypeName" id="icecreamTypeName" value="<?php echo $icecreamType->icecreamTypeName; ?>">
            <label for="icecreamTypeMachine">Icecream Type Machine:</label>
            <input type="text" name="icecreamTypeMachine" id="icecreamTypeMachine" value="<?php echo $icecreamType->icecreamTypeMachine; ?>">
            <input type="submit" name="answer" value="Update Icecream Type">
            <input type="submit" name="answer" value="Cancel">
            <input type="hidden" name="icecreamTypeID" value="<?php echo $icecreamTypeID; ?>">
            <input type="hidden" name="content" value="changeicecreamtype">
        </form>
        <?php
        } else {
        ?>
            <h2>Sorry, icecream type <?php echo $icecreamTypeID; ?> not found</h2>
            <a href="index.php?content=listicecreamtypes">List Icecream Types</a>
        <?php
        }
    } else {
        ?>
        <h2>You did not select a valid icecream type ID value</h2>
        <a href="index.php?content=listicecreamtypes">List icecream types</a>
        <?php
    }
}
?>
<script language="javascript">
   document.icecreamtype.icecreamTypeCode.focus();
   document.icecreamtype.icecreamTypeCode.select();
</script>