<!-- Jazzlinne Arias 10/24 IT202-001 Phase 2 ja898@njit.edu -->

<?php
require_once('database.php');

class Icecream
{
   public $icecreamID;
   public $icecreamCode;
   public $icecreamName;
   public $icecreamDescription;
   public $icecreamFlavor;
   public $icecreamServingSize;
   public $icecreamTypeID;
   public $icecreamWholesalePrice;
   public $icecreamListPrice;
   function __construct($icecreamID, $icecreamCode, $icecreamName, $icecreamDescription, $icecreamFlavor, $icecreamServingSize, $icecreamTypeID, $icecreamWholesalePrice, $icecreamListPrice)
   {
       $this->icecreamID = $icecreamID;
       $this->icecreamCode = $icecreamCode;
       $this->icecreamName = $icecreamName;
       $this->icecreamDescription = $icecreamDescription;
       $this->icecreamFlavor = $icecreamFlavor;
       $this->icecreamServingSize = $icecreamServingSize;
       $this->icecreamTypeID = $icecreamTypeID;
       $this->icecreamWholesalePrice = $icecreamWholesalePrice;
       $this->icecreamListPrice = $icecreamListPrice;
   }
   function __toString()
   {
       $output = "<h2>Icecream Number: $this->icecreamID</h2>\n" .
           "<h2>$this->icecreamCode, $this->icecreamName, $this->icecreamFlavor, $this->icecreamServingSize, $this->icecreamTypeID, $this->icecreamWholesalePrice, $this->icecreamListPrice</h2>\n" . 
           "<h2>Description: $this->icecreamDescription\n";
       return $output;
   }
    function saveIcecream()
   {
       $db = getDB();
       $query = "INSERT INTO Icecreams (icecreamID, icecreamCode, icecreamName, icecreamDescription, icecreamFlavor, icecreamServingSize, icecreamTypeID, icecreamWholesalePrice, icecreamListPrice) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
       $stmt = $db->prepare($query);
       $stmt->bind_param(
           "isssssidd",
            $this->icecreamID,
            $this->icecreamCode,
            $this->icecreamName,
            $this->icecreamDescription,
            $this->icecreamFlavor,
            $this->icecreamServingSize,
            $this->icecreamTypeID,
            $this->icecreamWholesalePrice,
            $this->icecreamListPrice
       );
       $result = $stmt->execute();
       $db->close();
       return $result;
   }
   static function getIcecreams()
   {
       $db = getDB();
       $query = "SELECT * FROM Icecreams";
       $result = $db->query($query);
       if (mysqli_num_rows($result) > 0) {
           $icecreams = array();
           while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
               $icecream = new Icecream(
                   $row['icecreamID'],
                   $row['icecreamCode'],
                   $row['icecreamName'],
                   $row['icecreamDescription'],
                   $row['icecreamFlavor'],
                   $row['icecreamServingSize'],
                   $row['icecreamTypeID'],
                   $row['icecreamWholesalePrice'],
                   $row['icecreamListPrice']
               );
               array_push($icecreams, $icecream);
               unset($icecream);
           }
           $db->close();
           return $icecreams;
       } else {
           $db->close();
           return NULL;
       }
   }

      static function findIcecream($icecreamID)
   {
       $db = getDB();
       $query = "SELECT * FROM Icecreams WHERE icecreamID = $icecreamID";
       $result = $db->query($query);
       $row = $result->fetch_array(MYSQLI_ASSOC);
       if ($row) {
           $icecream = new Icecream(
                   $row['icecreamID'],
                   $row['icecreamCode'],
                   $row['icecreamName'],
                   $row['icecreamDescription'],
                   $row['icecreamFlavor'],
                   $row['icecreamServingSize'],
                   $row['icecreamTypeID'],
                   $row['icecreamWholesalePrice'],
                   $row['icecreamListPrice']
           );
           $db->close();
           return $icecream;
       } else {
           $db->close();
           return NULL;
       }
   }
   function updateIcecream()
   {
       $db = getDB();
       $query = "UPDATE Icecreams SET icecreamCode= ?, " .
           "icecreamName= ?, icecreamDescription= ?, icecreamFlavor= ?, icecreamServingSize= ?, icecreamTypeID= ?, icecreamWholesalePrice= ?, icecreamListPrice= ? WHERE icecreamID = $this->icecreamID";
       $stmt = $db->prepare($query);
       $stmt->bind_param(
           "sssssidd",
            $this->icecreamCode,
            $this->icecreamName,
            $this->icecreamDescription,
            $this->icecreamFlavor,
            $this->icecreamServingSize,
            $this->icecreamTypeID,
            $this->icecreamWholesalePrice,
            $this->icecreamListPrice
       );
       $result = $stmt->execute();
       $db->close();
       return $result;
   }

//     static function findIcecream($icecreamID)
//    {
//        $db = getDB();
//        $query = "SELECT * FROM Icecreams WHERE icecreamID = $icecreamID";
//        $result = $db->query($query);
//        $row = $result->fetch_array(MYSQLI_ASSOC);
//        if ($row) {
//            $icecream = new Icecream(
//                    $row['icecreamID'],
//                    $row['icecreamCode'],
//                    $row['icecreamName'],
//                    $row['icecreamDescription'],
//                    $row['icecreamFlavor'],
//                    $row['icecreamServingSize'],
//                    $row['icecreamTypeID'],
//                    $row['icecreamWholesalePrice'],
//                    $row['icecreamListPrice']
//            );
//            $db->close();
//            return $icecream;
//        } else {
//            $db->close();
//            return NULL;
//        }
//    }
//     function updateIcecream()
//    {
//        $db = getDB();
//        $query = "UPDATE Icecreams SET icecreamCode = ?, " .
//            "icecreamName = ?, " .
//            "icecreamDescription = ?, " .
//            "icecreamFlavor = ?, " .
//            "icecreamServingSize = ?, " .
//            "icecreamTypeID = ?, " .
//            "icecreamWholesalePrice = ?, " .
//            "icecreamListPrice = ? " .
//            "WHERE icecreamID = $this->icecreamID";
//        $stmt = $db->prepare($query);
//        $stmt->bind_param(
//            "sssssidd",
//             $this->icecreamCode,
//             $this->icecreamName,
//             $this->icecreamDescription,
//             $this->icecreamFlavor,
//             $this->icecreamServingSize,
//             $this->icecreamTypeID,
//             $this->icecreamWholesalePrice,
//             $this->icecreamListPrice
//        );
//        $result = $stmt->execute();
//        $db->close();
//        return $result;
//    }
    function removeIcecream()
   {
       $db = getDB();
       $query = "DELETE FROM Icecreams WHERE icecreamID = $this->icecreamID";
       $result = $db->query($query);
       $db->close();
       return $result;
   }
}
?>
