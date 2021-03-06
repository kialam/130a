<?php /* this file allows you to view the php source file
		* by adding a ?source at the end of the file name


					     /   `.
					    J     |   Dr. Zoidberg (by M-K)
					   (,)(,) |  
					    L7 -- | 
					    ((((> | 
					     L::::J
	  */
	include_once('../printable.php'); 
?>
<html>
<head>
<title>A PHP Example</title>
</head>
<body>
<a href="../index.php" target="_blank">Link to index.php</a>
<h3>Lab 1</h3>
<?php
//Course: CS 130A
/*Assignment: Lab 1 (lab1.php)
Student: USERNAME
*/
#Date completed: The Date
?>
<?php //Defining my constants
	define('EOL',"<br />\n"); #creates pretty line breaks in markup
?>
<?php //Defining my variables
	$myName = "Kia Lam";
	echo 'Name: '.$myName.EOL;

	$className = "CS 130a PHP Programming";
	echo 'Class: '.$className.EOL;

	$assignmentNum = "1";
	echo 'Assignment: '.$assignmentNum.EOL;

	print date('M j, Y');

	$demo = 'DEMO';

	$browser = $_SERVER['HTTP_USER_AGENT'];
?>

<?php echo EOL;?><br />
<h3>Single Quoted</h3>
<?php 
	echo 'All PHP variables begin with a "$" character.'.EOL;
	echo 'We\'re learning about proper quoting using double quotes (") and single quotes (\').'.EOL; 
	echo 'We can print variables inside of double-quoted strings. For example: $demo.'.EOL;
?>
<br />
<h3>Double Quoted</h3>
<?php 
	echo "All PHP variables begin with a \"$\" character.".EOL;
	echo "We're learning about proper quoting using double quotes (\") and single quotes (').".EOL; 
	echo "We can print variables inside of double-quoted strings. For example: $demo.".EOL;
?>
<br />
<h3>HEREDOC</h3>
<?php echo <<<EOD
	All PHP variables begin with a "$" character.
	We're learning about proper quoting using double quotes (") and single quotes (').
	We can print variables inside of double-quoted strings. For example: $demo.
EOD;
?>

<h3>$_SERVER</h3>
<?php
	print_r(get_defined_vars());
	print_r($_SERVER);
?></p>
<p><?php
	print "Hello, I see that you are using $browser.";
?></p>
</body>
</html>

