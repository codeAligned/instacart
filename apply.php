<head>
<title>Instacart application</title>
</head>
<body>
<?php
session_start();
if (!isset($_REQUEST['name']) && !isset($_SESSION['name']) {
require('firstform.php');
} else if (!isset($_REQUEST['consent']){
require('secondform.php');
} else {
echo "confirm.";
}
?>
</body>
