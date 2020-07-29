<?php
include "../vendor/autoload.php";

use App\XMLtable;

$t = new XMLtable();
$t->add('aaaaa','878656');
$t->add('sdsdsd','878656');
$t->add('sdasdsa','77777');
$t->add('sdasdsa','77777');
$t->add('sdasdsa','77777');
$t->del('aaaaa');
//print_r($t->add('rerer','12345'));
$t->save_xml();
//
//$t->del(1);
print_r($t->readXML());
?>

