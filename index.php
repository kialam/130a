<?php
// File: index.php
// Creator: Kia Lam
// Description: MVC entry point controller

include 'config.ini';
$LAYOUT = 'default.html';
$VIEW   = 'index.html';
$CONTROLLER    = 'default/';
$DIR = '';

if(isset($_REQUEST['c'])) {
    $CONTROLLER  = strtolower(basename($_REQUEST['c'])) .'/';
}
if(isset($_REQUEST['v'])) {
    $VIEW = strtolower(basename($_REQUEST['v'])).'.html';
}

if(!file_exists(VIEWS . $CONTROLLER . $VIEW)) {
    $CONTROLLER =  'default/';
    $VIEW = 'error404.html';
}

include LAYOUTS . $LAYOUT;
?>
<html>
<head>
<title>A PHP Exercise (in futility)</title>
</head>
<body>
<h1>This is my index.php</h1>
<a href="labs/lab1.php" target="_blank">Link to lab1.php</a><br />
<a href="labs/lab2.php" target="_blank">Link to lab2.php</a><br />
<a href="labs/lab3.php" target="_blank">Link to lab3.php</a><br />
<!-- <a href="labs/lab4.php" target="_blank">Link to lab4.php</a><br /> -->

<br />

</body>
</html>
