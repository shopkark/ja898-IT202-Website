<!-- Jazzlinne Arias 10/31 IT202-001 Phase 3 ja898@njit.edu -->

<?php
require_once("icecreamtype.php");
if (isset($_SESSION['login'])) {

  $icecreamTypeID = $_POST['icecreamTypeID'];
  if ((trim($icecreamTypeID) == '') or (!is_numeric($icecreamTypeID))) {
    echo "<h2>Sorry, you must enter a valid icecream type ID number</h2>\n";
  } else {
    $icecreamTypeCode = $_POST['icecreamTypeCode'];
    $icecreamTypeName = $_POST['icecreamTypeName'];
    $icecreamTypeMachine = $_POST['icecreamTypeMachine'];
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