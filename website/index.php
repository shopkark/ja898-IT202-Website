<!-- Jazzlinne Arias 10/1 IT202-001 Phase 1 ja898@njit.edu -->

<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head><title>Icecream Shop's Inventory Helper</title></head>
<body>
   <section id="container">
       <main>
           <?php
           if (isset($_REQUEST['content'])) {
               include($_REQUEST['content'] . ".inc.php");
           } else {
               include("main.inc.php");
           }
           ?>
       </main>
   </section>
</body>
</html>
