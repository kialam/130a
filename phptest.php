<?php // Defining my constants
        define('EOL',"<br />\n");
	?>

<?php
$sevenDwarves[] = 'happy';
$sevenDwarves[] = 'doc';
$sevenDwarves[] = 'bashful';
$sevenDwarves[] = 'sneezy';
$sevenDwarves[] = 'angry';
$sevenDwarves[] = 'dopey';
$sevenDwarves[] = 'sleepy';

print_r ($sevenDwarves);

$keys = array_keys($sevenDwarves);
$vals = array_values($sevenDwarves);

print_r ($vals).EOL;
foreach ($sevenDwarves as $vals) echo $vals.EOL;
?>
<?php
$color = 'red';
 $count = 0;
  if($count = 100) {
   print $color;
    }
    ?>

<?php
$number2 = 2;
 $string2 = "2";
  $number98 = 98;
   $string98 = "98";

    if($number2 = 100) {
     if($number98 == $string98) {
      if($number2 === $string2) {
       print $number2 + $string98;
        }
	 else {
	  print $number98 . $string98;
	   }
	    }
	     else {
	      print $number98;
	       }
	        }
		 else {
		  print $number2;
		   }
?>
<br />
<?php

function multiply ($num1, $num2=1) {
	return $num1*$num2;
	};
echo multiply(7);

function test ($str1='Blank',$str2) { 
   return $str1.$str2; 
   } 
echo "<br />\ntest('String1','String2')<br />\n"; 
echo test('String1','String2'); 
echo "<br />\ntest()<br />\n"; 
echo test();

function addOne ($i=func_get_args) {
	foreach ($i as $add) {
		$sum = $add++;
	}
	echo 'The sum is $sum.';
}
?>
<br />
<?php
$tests = array (
	 1.93E+11,	
	 -1.93E-2,	
	  // 1 1/4,	
	  0xff12ab,	
	  // 1.22.33E+11,	
	  1+1/4
);

foreach($tests as $element){
	if(is_numeric($element)) {
		echo "'{$element}' is numeric <br />", PHP_EOL;
	} else {
		echo "'{$element}'is NOT numeric <br />", PHP_EOL;
	}
}
?>
<br />
<?php

$globalName = "Zoe";

function sayHello() {
	$localName = "Harry";
	echo "Hello, $localName!<br />";
}

sayHello();
echo "The value of \$globalName is: '$globalName' <br />";
echo "The value of \$localName is: '$localName' <br />";
?>

<br />
<?php

function createWidget(){
	static $numWidgets = 0;
	return ++$numWidgets;
}

echo "Creating some widgets...<br />";
echo createWidget() . " created so far.<br />";
echo createWidget() . " created so far.<br />";
echo createWidget() . " created so far.<br />";
?>

<h1>The Main Script</h1>
<?php
include 'file2.php';
include 'file1.php';
print $greeting;
?>
<?php echo "<br />";?>
<?php
var_dump((bool) "0.0");        // bool(false)
var_dump((bool) '');         // bool(true)
var_dump((bool) 0.0);        // bool(true)
var_dump((bool) "");     // bool(true)
var_dump((bool) (int)"strings are always true");     // bool(true)
var_dump((bool) 0); // bool(true)
var_dump((bool) NULL);   // bool(false)
var_dump((bool) "000a");   // bool(true)
var_dump((bool) $colors=array());
var_dump((bool) "0");
var_dump((bool) "FALSE");
?>

