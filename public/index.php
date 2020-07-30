<?php
include "../vendor/autoload.php";

use App\XMLtable;

$t = new XMLtable();
$t->add('aaaaa','878656');
$t->add('sdsdsd','878656');
$t->edit('aaaaa',['hhh','123']);
$t->edit('sdsdsd',['ooo','321']);
$t->del('ooo');
$t->save_xml();
print_r($t->readXML());
?>

