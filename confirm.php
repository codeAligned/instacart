<html>
<body>
Thank you for your application! We will respond to you as soon as possible.

<?php
// Update our session values if coming from edit form.
session_start();
require('updatesession.php');
//error_log("Sample write", 3, "/usr/share/nginx/html/fakedb.txt");
require('fakeoutput.php');
?>

<form action="edit.php">
<input type="submit" value="I would like to review or edit my submission.">
</form>
</body>
</html>

