<!-- Jazzlinne Arias 10/1 IT202-001 Phase 1 ja898@njit.edu -->

<?php
if (isset($_SESSION['login'])) {
   unset($_SESSION['login']);
   unset($_SESSION['emailAddress']);
   unset($_SESSION['firstName']);
   unset($_SESSION['lastName']);
   unset($_SESSION['pronouns']);
}
header("Location: index.php");
?>
