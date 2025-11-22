<!-- Jazzlinne Arias 11/21 IT202-001 Phase 4 ja898@njit.edu -->

<h2>Enter New Item Information</h2>
<form name="newicecream" action="index.php" method="post">
   <table cellpadding="1" border="0">
       <tr>
           <td>Icecream ID:</td>
           <td><input type="number" name="icecreamID" size="5" min="1" max="999" required></td>
       </tr>
       <tr>
           <td>Code:</td>
           <td><input type="text" name="icecreamCode" size="5" minlength="3" maxlength="10" required></td>
       </tr>
       <tr>
           <td>Name:</td>
           <td><input type="text" name="icecreamName" size="20" minlength="5" maxlength="100" required></td>
       </tr>
       <tr>
           <td>Description:</td>
           <td><textarea name="icecreamDescription" size="20" minlength="25" maxlength="500"></textarea></td>

       </tr>
       <tr>
           <td>Flavor:</td>
           <td><input type="text" name="icecreamFlavor" size="20" minlength="5" maxlength="100"></td>
       </tr>
       <tr>
           <td>Serving Size:</td>
           <td><input type="text" name="icecreamServingSize" size="5" minlength="3" maxlength="10"></td>
       </tr>
       <tr>
           <td>Icecream Type ID:</td>
           <td><input type="number" name="icecreamTypeID" size="5" min="1" max="999" required></td>
       </tr>
       <tr>
           <td>Wholesale Price:</td>
           <td><input type="float" name="icecreamWholesalePrice" size="5" min="0" max="999" required></td>
       </tr>
       <tr>
           <td>List Price:</td>
           <td><input type="float" name="icecreamListPrice" size="5" min="0" max="999" required></td>
       </tr>
   </table><br>
   <input type="submit" value="Submit New Icecream">
   <input type="hidden" name="content" value="addicecream">
</form>