<?php
// PHP doesn't like to write to console while making a webpage
// valid locations of files to write to depends on environment
// so, just put the fake output into the page
echo "<br>This record would be added to the database if not already present:<br>";
echo "Format is {key}->{value} pairs.<br>";
echo "{name}->{" . $_SESSION['name'] . "}, {email}->{" . $_SESSION['email'] . "}, {phone}->{" . $_SESSION['phone'] . "}, {consent}->{" . $_SESSION['consent'] . "}<br>";
?>

