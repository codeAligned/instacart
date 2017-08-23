<?php
// storing values from the first form
$_SESSION["name"] = $_REQUEST["name"];
$_SESSION["email"] = $_REQUEST["email"];
$_SESSION["phone"] = $_REQUEST["phone"];
?>
<form action="apply.php">
<input type="checkbox" name="consent" value="yes"> Do you consent to a background check?
<br>
<input type="submit" value="Submit">
</form>
