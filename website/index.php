<!-- Jazzlinne Arias 11/21 IT202-001 Phase 4 ja898@njit.edu -->

<?php
session_start();
require_once("config.php");
require_once("icecreamtype.php");
require_once("icecream.php");
?>
<!DOCTYPE html>
<html>
<head>
    <title>Icecream Shop's Inventory Helper</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <link rel="icon" type="image/png" href="images/logo.png">
    <script src="realtime.js"></script>
</head>
<body>
    <div id="page">
        <div id="header">
            <?php include("header.inc.php"); ?>
        </div>
        <div id="main">
            <?php if (isset($_SESSION['login'])) { ?>
            <div id="nav">
                <?php include("nav.inc.php") ?>
            </div>
            <?php } ?>
            <div id="content">
                <?php
                if (isset($_REQUEST['content'])) {
                    include($_REQUEST['content'] . ".inc.php");
                } else {
                    include("main.inc.php");
                }
                ?>
            </div>
            <?php if (isset($_SESSION['login'])) { ?>
            <div id="aside">
                <?php include("aside.inc.php"); ?>
                <script>
                    getRealTime();
                    setInterval(getRealTime, 5000);
                </script>
            </div>     
            <?php } ?>  
        </div>
        <div id="footer">
            <?php include("footer.inc.php"); ?>
        </div>
    </div>
</body>
</html>
