<?php if (isset($_REQUEST['consent'])) { $_SESSION['consent'] = $_REQUEST['consent']; } 
//var_dump($_SESSION);
?>

Name: <?php echo $_SESSION['name']; ?>
<br>
Phone: <?php echo $_SESSION['phone']; ?>
<br>
Email: <?php echo $_SESSION['email']; ?>
<br>
Background search consent: <?php echo $_SESSION['consent']; ?>
<br>
<form action="confirm.php">
<input type="submit" value="The above is accurate.">
</form>
<br>
<form action="edit.php">
<input type="submit" value="I need to edit some information.">
</form>

