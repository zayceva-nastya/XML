<?php
include "../vendor/autoload.php";

use App\XMLtable;

$t = new XMLtable();
//$t->save_xml('1.xml',1,'dfd');
//$t->save_xml('1.xml',2,'dfd');
//$t->save_xml('1.xml',3,'dfd');
//$t->save_xml('1.xml',5,'dfd');
//$t->save_xml('1.xml',7,'dfd');
//
$t->del(1);
print_r($t->readXML());
?>

