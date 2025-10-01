<!-- Jazzlinne Arias 10/1 IT202-001 Phase 1 ja898@njit.edu -->

<?php
 function getDB() {
   $host = 'sql1.njit.edu';
   $port = 3306;
   $dbname = 'ja898';
   $username = 'ja898';
   $password = 'Pancakes123%';
   mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
   try {
       $db = new mysqli($host, $username, $password, $dbname, $port);
       error_log("You are connected to the $host database!");
       // echo "You are connected to the $host database!";
       return $db;
   } catch (mysqli_sql_exception $e) {
       error_log($e->getMessage(), 0);
       // echo $e->getMessage();
   }
 }
 // getDB();
?>
