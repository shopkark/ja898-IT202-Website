<!-- Jazzlinne Arias 10/24 IT202-001 Phase 2 ja898@njit.edu -->

<?php
require_once("icecreamtype.php");
if (isset($_SESSION['login'])) {
   $icecreamTypeID = filter_input(INPUT_POST, 'icecreamTypeID', FILTER_VALIDATE_INT);
   $answer = $_POST['answer'];
   if ($answer == "Update Icecream Type") {
      $icecreamType = IcecreamType::findType($icecreamTypeID);
      $icecreamType->icecreamTypeID = htmlspecialchars($_POST['icecreamTypeID']);
      $icecreamType->icecreamTypeCode = htmlspecialchars($_POST['icecreamTypeCode']);
      $icecreamType->icecreamTypeName = htmlspecialchars($_POST['icecreamTypeName']);
      $icecreamType->icecreamTypeMachine = htmlspecialchars($_POST['icecreamTypeMachine']);
      $result = $icecreamType->updateType();
      if ($result) {
         echo "<h2>Icecream type $icecreamTypeID updated</h2>\n";
      } else {
         echo "<h2>Problem updating icecream type $icecreamTypeID</h2>\n";
      }
   } else {
      echo "<h2>Update canceled for icecream type $icecreamTypeID</h2>\n";
   }
} else {
   echo "<h2>Please login first</h2>\n";
}
?>
