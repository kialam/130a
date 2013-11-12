<?php
	include_once('printable.php'); 
//This code will show the source code if you append '?source' to the URL.
?>
<html>
<head>
<title>Arrays Assignment</title>
<body>
<?php // Defining my constants
	define('EOL',"<br />\n");
?>
<?php
// Create Array and Initialize
//$sevenDwarves = array('happy', 'doc', 'bashful', 'sneezy', 'angry', 'dopey','sleepy');

// Create Array and Initialize using shortcut
$happilyEverAfter = ['Snow White', 'Prince Charming'];

//Create Array using auto-increment mechanism
$sevenDwarves[] = 'happy';
$sevenDwarves[] = 'doc';
$sevenDwarves[] = 'bashful';
$sevenDwarves[] = 'sneezy';
$sevenDwarves[] = 'angry';
$sevenDwarves[] = 'dopey';
$sevenDwarves[] = 'sleepy';

$keys = array_keys($sevenDwarves);
$vals = array_values($sevenDwarves);

//print_r ($keys);
//print_r ($vals);

//Display array values and keys
foreach ($sevenDwarves as $keys => $vals) echo "$keys has a $vals value.".EOL;


//Displaying array values only
foreach ($sevenDwarves as $vals) echo $vals.EOL;
?>

</body>
</html>
