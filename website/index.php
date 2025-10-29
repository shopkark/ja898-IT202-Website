<!-- Jazzlinne Arias 10/31 IT202-001 Phase 3 ja898@njit.edu -->

<?php
session_start();
require_once("icecreamtype.php");
require_once("icecream.php");
?>
<!DOCTYPE html>
<html>
<head><title>Icecream Shop's Inventory Helper</title></head>
<body>
    <header>
        <?php include("header.inc.php"); ?>
    </header>
    <section style="height: 425px;">
        <nav>
            <?php include("nav.inc.php"); ?>
        </nav>
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
   <footer>
    <?php include("footer.inc.php"); ?>
   </footer>
</body>
</html>
