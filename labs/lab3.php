<?php include_once ('../printable.php');
/*

               ,'``.._   ,'``.
              :,--._:)\,:,._,.:       All Glory to
              :`--,''   :`...';\      the HYPNO TOAD!
               `,'       `---'  `.
               /                 :
              /                   \
            ,'                     :\.___,-.
           `...,---'``````-..._    |:       \
             (                 )   ;:    )   \  _,-.
              `.              (   //          `'    \
               :               `.//  )      )     , ;
             ,-|`.            _,'/       )    ) ,' ,'
            (  :`.`-..____..=:.-':     .     _,' ,'
             `,'\ ``--....-)='    `._,  \  ,') _ '``._
          _.-/ _ `.       (_)      /     )' ; / \ \`-.'
         `--(   `-:`.     `' ___..'  _,-'   |/   `.)
             `-. `.`.``-----``--,  .'
               |/`.\`'        ,','); SSt
                   `         (/  (/
*/
?>

<?php
	define('EOL',"<br />\n"); // defining my constants

	error_reporting(E_ALL); // error reporting
	ini_set('display_errors','On');
 
$colors = array( 'lightcoral' => 'F08080', 'rosybrown' => 'BC8F8F', 'indianred' => 'CD5C5C', 'red' => 'FF0000', 'firebrick' => 'B22222', 'brown' => 'A52A2A', 'darkred' => '8B0000', 'maroon' => '800000', 'mistyrose' => 'FFE4E1', 'salmon' => 'FA8072', 'tomato' => 'FF6347', 'darksalmon' => 'E9967A', 'coral' => 'FF7F50', 'orangered' => 'FF4500', 'lightsalmon' => 'FFA07A', 'sienna' => 'A0522D', 'seashell' => 'FFF5EE', 'chocolate' => 'D2691E', 'saddlebrown' => '8B4513', 'sandybrown' => 'F4A460', 'peachpuff' => 'FFDAB9', 'peru' => 'CD853F', 'linen' => 'FAF0E6', 'bisque' => 'FFE4C4', 'darkorange' => 'FF8C00', 'burlywood' => 'DEB887', 'antiquewhite' => 'FAEBD7', 'darkgoldenrod' => 'B8860B', 'goldenrod' => 'DAA520', 'cornsilk' => 'FFF8DC', 'gold' => 'FFD700', 'lemonchiffon' => 'FFFACD', 'khaki' => 'F0E68C', 'palegoldenrod' => 'EEE8AA', 'darkkhaki' => 'BDB76B', 'ivory' => 'FFFFF0', 'lightyellow' => 'FFFFE0', 'beige' => 'F5F5DC', 'lightgoldenrodyellow' => 'FAFAD2', 'yellow' => 'FFFF00', 'olive' => '808000', 'olivedrab' => '6B8E23', 'yellowgreen' => '9ACD32', 'chartreuse' => '7FFF00', 'darkseagreen' => '8FBC8B', 'honeydew' => 'F0FFF0', 'lightgreen' => '90EE90', 'lime' => 'bfff00', 'mediumaquamarine' => '66CDAA', 'aquamarine' => '7FFFD4', 'turquoise' => '40E0D0', 'lightseagreen' => '20B2AA', 'mediumturquoise' => '48D1CC', 'azure' => 'F0FFFF', 'lightcyan' => 'E0FFFF', 'paleturquoise' => 'AFEEEE', 'aqua' => '00FFFF', 'cyan' => '00FFFF', 'darkcyan' => '008B8B', 'teal' => '008080', 'darkslategray' => '2F4F4F', 'darkturquoise' => '00CED1', 'cadetblue' => '5F9EA0', 'powderblue' => 'B0E0E6', 'lightblue' => 'ADD8E6', 'deepskyblue' => '00BFFF', 'skyblue' => '87CEEB', 'lightskyblue' => '87CEFA', 'steelblue' => '4682B4', 'aliceblue' => 'F0F8FF', 'dodgerblue' => '1E90FF', 'lightslategray' => '778899', 'midnightblue' => '191970', 'navy' => '000080', 'slateblue' => '6A5ACD', 'darkslateblue' => '483D8B', 'mediumslateblue' => '7B68EE', 'mediumpurple' => '9370DB', 'blueviolet' => '8A2BE2', 'indigo' => '4B0082', 'darkorchid' => '9932CC', 'darkviolet' => '9400D3', 'mediumorchid' => 'BA55D3', 'thistle' => 'D8BFD8', 'plum' => 'DDA0DD', 'violet' => 'EE82EE', 'fuchsia' => 'FF00FF', 'magenta' => 'FF00FF', 'darkmagenta' => '8B008B', 'purple' => '800080', 'orchid' => 'DA70D6', 'mediumvioletred' => 'C71585', 'deeppink' => 'FF1493', 'hotpink' => 'FF69B4', 'lavenderblush' => 'FFF0F5', 'palevioletred' => 'DB7093', 'crimson' => 'DC143C', 'gray' => '808080', 'dimgray' => '696969', 'black' => '000000' ); $colors = array_flip($colors); asort($colors);  
?>


<html>
<head>
<title>Lab 3</title>
</head>
<body bgcolor="<?=isset($_POST['colors'])?$_POST['colors'][0]:''?>">
<?php
	if (array_key_exists('colors', $_POST))
	{
		echo 'You have picked ' .$_POST['colors'][0].EOL;
	}
	else {
		echo 'Please select a color.'.EOL;
	}
echo 'Data submitted:'.EOL;
print_r($_POST);

echo '<form name="submit" method="post">';
echo '<input type="submit" value="Clear Array" />'; 

// Form 1 with radio buttons
echo '<h3>Form 1</h3>';
	echo '<form name="submit" method="post">';
        foreach($colors as $hex => $vals) {
                echo '<input type="radio" name="';
                echo "colors[]";
                echo '" value="';
                echo '#'. $hex;
                echo '" />';
                echo $vals.EOL;
                
}
	echo '<input type="submit" value="Change color" />';

// Form 2 with select drop-down
echo '<h3>Form 2</h3>';
	echo '<form name="submit" method="post">';
		echo '<select name="colors[]">';
			foreach($colors as $hex => $vals) {
				echo '<option value="';
		        echo '#'. $hex;
		        echo '">';
		        echo $vals;
		        echo '</option>';
			}
		echo '</select>';
	echo '<input type="submit" value="Change me again" />';
	echo '</form>';

// Form 3 with checkboxes
echo '<h3>Form 3</h3>';
	echo '<form name="submit" method="post">';
		foreach($colors as $hex => $vals) {
			echo '<input type="checkbox" name="';
	                echo "colors[]";
	                echo '" value="';
	                echo '#'. $hex;
	                echo '" />';
	                echo $vals.EOL;
		}
	echo '<input type="submit" value="Seriously..?"/>'
?>

</body>                                                         
</html> 