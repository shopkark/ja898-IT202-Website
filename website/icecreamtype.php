<!-- Jazzlinne Arias 10/24 IT202-001 Phase 2 ja898@njit.edu -->

<?php
require_once('database.php');
class IcecreamType
{
   public $icecreamTypeID;
   public $icecreamTypeCode;
   public $icecreamTypeName;
   public $icecreamTypeMachine;
   function __construct($icecreamTypeID, $icecreamTypeCode, $icecreamTypeName, $icecreamTypeMachine)
   {
       $this->icecreamTypeID = $icecreamTypeID;
       $this->icecreamTypeCode = $icecreamTypeCode;
       $this->icecreamTypeName = $icecreamTypeName;
       $this->icecreamTypeMachine = $icecreamTypeMachine;
   }
   function __toString()
   {
       $output = "<h2>Icecream Type Number: $this->icecreamTypeID</h2>\n" .
           "<h2>$this->icecreamTypeCode, $this->icecreamTypeName, $this->icecreamTypeMachine</h2>\n";
       return $output;
   }
    function saveType()
   {
       $db = getDB();
       $query = "INSERT INTO IcecreamTypes (icecreamTypeID, icecreamTypeCode, icecreamTypeName, icecreamTypeMachine) VALUES (?, ?, ?, ?)";
       $stmt = $db->prepare($query);
       $stmt->bind_param(
           "isss",
           $this->icecreamTypeID,
           $this->icecreamTypeCode,
           $this->icecreamTypeName,
           $this->icecreamTypeMachine
       );
       $result = $stmt->execute();
       $db->close();
       return $result;
   }
   static function getTypes()
   {
       $db = getDB();
       $query = "SELECT * FROM IcecreamTypes";
       $result = $db->query($query);
       if (mysqli_num_rows($result) > 0) {
           $icecreamTypes = array();
           while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
               $icecreamType = new IcecreamType(
                   $row['icecreamTypeID'],
                   $row['icecreamTypeCode'],
                   $row['icecreamTypeName'],
                   $row['icecreamTypeMachine']
               );
               array_push($icecreamTypes, $icecreamType);
               unset($icecreamType);
           }
           $db->close();
           return $icecreamTypes;
       } else {
           $db->close();
           return NULL;
       }
   }
    static function findType($icecreamTypeID)
   {
       $db = getDB();
       $query = "SELECT * FROM IcecreamTypes WHERE icecreamTypeID = $icecreamTypeID";
       $result = $db->query($query);
       $row = $result->fetch_array(MYSQLI_ASSOC);
       if ($row) {
           $icecreamType = new IcecreamType(
               $row['icecreamTypeID'],
               $row['icecreamTypeCode'],
               $row['icecreamTypeName'],
               $row['icecreamTypeMachine']
           );
           $db->close();
           return $icecreamType;
       } else {
           $db->close();
           return NULL;
       }
   }
    function updateType()
   {
       $db = getDB();
       $query = "UPDATE IcecreamTypes SET icecreamTypeID = ?,
           icecreamTypeCode = ?, " .
           "icecreamTypeName = ?, " .
           "icecreamTypeMachine = ? " .
           "WHERE icecreamTypeID = $this->icecreamTypeID";
       $stmt = $db->prepare($query);
       $stmt->bind_param(
           "isss",
           $this->icecreamTypeID,
           $this->icecreamTypeCode,
           $this->icecreamTypeName,
           $this->icecreamTypeMachine
       );
       $result = $stmt->execute();
       $db->close();
       return $result;
   }
    function removeType()
   {
       $db = getDB();
       $query = "DELETE FROM IcecreamTypes WHERE icecreamTypeID = $this->icecreamTypeID";
       $result = $db->query($query);
       $db->close();
       return $result;
   }
}
?>
