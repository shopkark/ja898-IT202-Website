<!-- Jazzlinne Arias 11/21 IT202-001 Phase 4 ja898@njit.edu -->

<h2>Enter New Icecream Type Information</h2>
<form name="newicecreamtype" action="index.php" method="post">
   <table cellpadding="1" border="0">
       <tr>
           <td>Icecream Type ID:</td>
           <td><input type="number" name="icecreamTypeID" size="5" min="1" max="999" required></td>
       </tr>
       <tr>
           <td>Icecream Type Code:</td>
           <td><input type="text" name="icecreamTypeCode" size="5" placeholder="00XXX" minlength="3" maxlength="10" required></td>
       </tr>
       <tr>
           <td>Icecream Type Name:</td>
           <td><input type="text" name="icecreamTypeName" size="20" minlength="5" maxlength="100" required></td>
       </tr>
       <tr>
           <td>Icecream Type Machine:</td>
           <td><input type="text" name="icecreamTypeMachine" size="20" minlegth="5" maxlength="100"></td>
       </tr>
   </table><br>
   <input type="submit" value="Submit New Icecream Type">
   <input type="hidden" name="content" value="addicecreamtype">
</form>