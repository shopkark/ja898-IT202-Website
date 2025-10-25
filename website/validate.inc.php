<!-- Jazzlinne Arias 10/1 IT202-001 Phase 1 ja898@njit.edu -->

<?php
 error_log("\$_POST " . print_r($_POST, true));
 require_once('database.php');
 $emailAddress = $_POST['emailAddress'];
 $password = $_POST['password'];
 $query = "SELECT firstName, lastName, pronouns FROM IcecreamManagers " .
        "WHERE emailAddress = ? AND password = SHA2(?,256)";
 $db = getDB();
 $stmt = $db->prepare($query);
 $stmt->bind_param("ss", $emailAddress, $password);
 $stmt->execute();
 $stmt->bind_result($firstName, $lastName, $pronouns);
 $fetched = $stmt->fetch();
 if ($fetched) {
   echo "<h2>Welcome to Icecream Shop's Inventory Helper, $firstName $lastName ($pronouns)</h2>\n";
   $_SESSION['login'] = true;
   $_SESSION['emailAddress'] = $emailAddress;
   $_SESSION['firstName'] = $firstName;
   $_SESSION['lastName'] = $lastName;
   $_SESSION['pronouns'] = $pronouns;
   header("Location: index.php");
 } else {
   echo "<h2>Icecream Shop's Inventory Helper<br><br>Sorry, login incorrect</h2>\n";
   echo "<a href=\"index.php\">Please try again</a>\n";
 }
?>
