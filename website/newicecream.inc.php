<!-- Jazzlinne Arias 10/31 IT202-001 Phase 3 ja898@njit.edu -->

<h2>Enter New Item Information</h2>
<form name="newicecream" action="index.php" method="post">
   <table cellpadding="1" border="0">
       <tr>
           <td>Icecream ID:</td>
           <td><input type="text" name="icecreamID" size="4"></td>
       </tr>
       <tr>
           <td>Code:</td>
           <td><input type="text" name="icecreamCode" size="4"></td>
       </tr>
       <tr>
           <td>Name:</td>
           <td><input type="text" name="icecreamName" size="20"></td>
       </tr>
       <tr>
           <td>Description:</td>
           <td><input type="text" name="icecreamDescription" size="4"></td>
       </tr>
       <tr>
           <td>Flavor:</td>
           <td><input type="text" name="icecreamFlavor" size="4"></td>
       </tr>
       <tr>
           <td>Serving Size:</td>
           <td><input type="text" name="icecreamServingSize" size="4"></td>
       </tr>
       <tr>
           <td>Icecream Type ID:</td>
           <td><input type="text" name="icecreamTypeID" size="4"></td>
       </tr>
       <tr>
           <td>Wholesale Price:</td>
           <td><input type="text" name="icecreamWholesalePrice" size="10"></td>
       </tr>
       <tr>
           <td>List Price:</td>
           <td><input type="text" name="icecreamListPrice" size="10"></td>
       </tr>
   </table><br>
   <input type="submit" value="Submit New Icecream">
   <input type="hidden" name="content" value="addicecream">
</form>