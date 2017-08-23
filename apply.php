<head>
<title>Instacart application</title>
</head>
<body>
<?php
session_start();
//var_dump($_SESSION);

if (!isset($_REQUEST['name']) && !isset($_SESSION['name'])) {
require('firstform.php');
} else if ((!isset($_REQUEST['consent']) || $_REQUEST['consent'] != "yes") && $_SESSION['consent'] != "yes"){
require('secondform.php');
} else {
require('confirmform.php');
}
?>
</body>
