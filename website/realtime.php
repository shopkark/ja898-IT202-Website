<?php
ob_start();
include("icecreamtype.php");
include("icecream.php");

$totalIcecreamTypes = IcecreamType::getTotalTypes();
$totalIcecreams = Icecream::getTotalIcecreams();
$totalWholesalePrice = Icecream::getTotalWholesalePrice();
$totalListPrice = Icecream::getTotalListPrice();

$doc = new DOMDocument("1.0");
$websiteElement = $doc->createElement("website");
$websiteElement = $doc->appendChild($websiteElement);

$icecreamtypesElement = $doc->createElement("icecreamtypes", $totalIcecreamTypes);
$icecreamtypesElement = $websiteElement->appendChild($icecreamtypesElement);
$icecreamsElement = $doc->createElement("icecreams", $totalIcecreams);
$icecreamsElement = $websiteElement->appendChild($icecreamsElement);
$wholesalepriceElement = $doc->createElement("wholesaleprice", $totalWholesalePrice);
$wholesalepriceElement = $websiteElement->appendChild($wholesalepriceElement);
$listpriceElement = $doc->createElement("listprice", $totalListPrice);
$listpriceElement = $websiteElement->appendChild($listpriceElement);

$output = $doc->saveXML();

header("Content-type: application/xml");
ob_end_clean();
echo $output;
?>