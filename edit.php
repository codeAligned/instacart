<html>
<body>
Review and edit application:
<?php
session_start();
// We know that the consent for background check had to be given to reach here,
// and we don't bother including an option to remove that consent, just to
// then inform the user that we require it.
?>
<form action="confirm.php">
Name: <input type="text" name="name" value="<?php echo $_SESSION["name"];?>">
<br>
Phone: <input type="text" name="phone" value="<?php echo $_SESSION["phone"];?>">
<br>
Email: <input type="text" name="email" value="<?php echo $_SESSION["email"];?>">
<br>
By submitting this update, you are also reconfirming your consent for the background check.
<br>
<input type="submit" value="Update application.">
</form>
</body>
</html>

