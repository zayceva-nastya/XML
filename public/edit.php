<?php
rename($_POST['old'],$_POST['new']);
header("Location: index.php");
?>

<html>
<body>
<form action="?" method="post">
    <input type="text" name="name" >
    <input type="hidden" name="old" value="<?=$_GET['name']?>" >
    <button type="submit" class="btn btn-primary">rename</button>

</form>
</body>
</html>
