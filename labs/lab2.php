<?php
	include_once('../printable.php');
?>
<html>
<head>
<title>Lab 2</title>
</head>
<body>
<?php
	define('EOL', "<br />\n");
?>
<h1>For Loop</h1>
<?php
for ($i=0;$i<10;$i++) echo $i." ";
?>
<h1>While</h1>
<?php
$x=10;
while ($x--) echo $x--." ";
?>
<h1>Do While</h1>
<?php
$i=0;
do {
    echo $i;
      } while ($i>10);
?>
</body>
</html>
