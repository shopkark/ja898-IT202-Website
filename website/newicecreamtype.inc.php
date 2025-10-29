<!-- Jazzlinne Arias 10/31 IT202-001 Phase 3 ja898@njit.edu -->

<h2>Enter New Icecream Type Information</h2>
<form name="newicecreamtype" action="index.php" method="post">
   <table cellpadding="1" border="0">
       <tr>
           <td>Icecream Type ID:</td>
           <td><input type="text" name="icecreamTypeID" size="4"></td>
       </tr>
       <tr>
           <td>Icecream Type Code:</td>
           <td><input type="text" name="icecreamTypeCode" size="20"></td>
       </tr>
       <tr>
           <td>Icecream Type Name:</td>
           <td><input type="text" name="icecreamTypeName" size="50"></td>
       </tr>
       <tr>
           <td>Icecream Type Machine:</td>
           <td><input type="text" name="icecreamTypeMachine" size="50"></td>
       </tr>
   </table><br>
   <input type="submit" value="Submit New Icecream Type">
   <input type="hidden" name="content" value="addicecreamtype">
</form>