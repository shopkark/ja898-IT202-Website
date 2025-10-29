<!-- Jazzlinne Arias 10/31 IT202-001 Phase 3 ja898@njit.edu -->

<?php
   if (isset($_SESSION['login'])) {
   ?>
    <div class="navigation" style="float: left; height: 100%; min-width: 175px; width: auto;">
      <table width="100%" cellpadding="3">
        <?php
         echo "<td><h3>Welcome, {$_SESSION['firstName']} {$_SESSION['lastName']} ({$_SESSION['pronouns']})</h3></td>";
         ?>
        <tr>
          <td><a href="index.php"><strong>Home</strong></a></td>
        </tr>
        <tr>
          <td><strong>Icecream Types</strong></td>
        </tr>
        <tr>
          <td>&nbsp;&nbsp;&nbsp;<a href="index.php?content=listicecreamtypes">
              <strong>List Icecream Types</strong></a></td>
        </tr>
        <tr>
          <td>&nbsp;&nbsp;&nbsp;<a href="index.php?content=newicecreamtype">
              <strong>Add New Icecream Type</strong></a></td>
        </tr>
        <tr>
          <td><strong>Icecreams</strong></td>
        </tr>
        <tr>
          <td>&nbsp;&nbsp;&nbsp;<a href="index.php?content=listicecreams">
              <strong>List Icecreams</strong></a></td>
        </tr>
        <tr>
          <td>&nbsp;&nbsp;&nbsp;<a href="index.php?content=newicecream">
              <strong>Add New Icecream</strong></a></td>
        </tr>
        <tr>
          <td>
            <hr />
          </td>
        </tr>
        <tr>
          <td><a href="index.php?content=logout">
              <strong>Logout</strong></a></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>
            <form action="index.php" method="post">
              <label>Search for Icecream:</label><br>
              <input type="text" name="icecreamID" size="14" />
              <input type="submit" value="find" />
              <input type="hidden" name="content" value="updateicecream" />
            </form>
          </td>
        </tr>
        <tr>
          <td>
            <form action="index.php" method="post">
              <label>Search for Icecream Type:</label><br>
              <input type="text" name="icecreamTypeID" size="14" />
              <input type="submit" value="find" />
              <input type="hidden" name="content" value="displayicecreamtype" />
            </form>
          </td>
        </tr>
      </table>
    </div>
  <?php
   }
   ?>