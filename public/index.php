<?php
include "../vendor/autoload.php";

use App\XMLtable;

$t = new XMLtable();

if (!empty($_POST['text'])) {
    $t->save_xml($_POST['text']);
}

echo $t->read_xml('1.xml');
print_r($_GET['name']);
$t->del($_GET['name']);
?>

<html>
<body>
<form action="?" method="post">
    <input type="text" name="text">
    <input type="submit">

</form>
</body>
</html>

