<!-- Jazzlinne Arias 11/21 IT202-001 Phase 4 ja898@njit.edu -->

<?php
require_once("icecreamtype.php");
if (isset($_SESSION['login'])) {
  $icecreamTypeID = filter_input(INPUT_POST, 'icecreamTypeID', FILTER_VALIDATE_INT);
  if ((trim($icecreamTypeID) == '') or (!is_int($icecreamTypeID))) {
    echo "<h2>Sorry, you must enter a valid icecream type ID number</h2>\n";
  } else if (IcecreamType::findType($icecreamTypeID)) {
    echo "<h2>Sorry, an icecream type with the ID #$icecreamTypeID already exists</h2>\n";
  } else {
    $icecreamTypeCode = htmlspecialchars($_POST['icecreamTypeCode']);
    $icecreamTypeName = htmlspecialchars($_POST['icecreamTypeName']);
    $icecreamTypeMachine = htmlspecialchars($_POST['icecreamTypeMachine']);
    $icecreamType = new IcecreamType($icecreamTypeID, $icecreamTypeCode, $icecreamTypeName, $icecreamTypeMachine);
    $result = $icecreamType->saveType();
    if ($result) {
        echo "<h2>New icecream type #$icecreamTypeID successfully added</h2>\n";
        echo "<h2>$icecreamType</h2>\n";
    } else {
        echo "<h2>Sorry, there was a problem adding that icecream type</h2>\n";
    }
  }
} else {
    echo "<h2>Please log in first</h2>\n";
}
?>