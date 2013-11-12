<?php include_once ('printable.php');
/*
          _ _,---._ 
       ,-','       `-.___ 
      /-;'               `._ 
     /\/          ._   _,'o \ 
    ( /\       _,--'\,','"`. ) 
     |\      ,'o     \'    //\ 
     |      \        /   ,--'""`-. 
     :       \_    _/ ,-'         `-._ 
      \        `--'  /                ) 
       `.  \`._    ,'     ________,',' 
         .--`     ,'  ,--` __\___,;' 
          \`.,-- ,' ,`_)--'  /`.,' 
           \( ;  | | )      (`-/ 
             `--'| |)       |-/ 
               | | |        | | 
               | | |,.,-.   | |_ 
               | `./ /   )---`  ) 
              _|  /    ,',   ,-' 
     -hrr-   ,'|_(    /-<._,' |--, 
             |    `--'---.     \/ \ 
             |          / \    /\  \ 
           ,-^---._     |  \  /  \  \ 
        ,-'        \----'   \/    \--`. 
       /            \              \   \ 
*/
?>

<?php
	define('EOL',"<br />\n"); // defining my constants

  $bg_color = array('white' => '#ffffff', 'black' => '#000000', 'grey' => '#cccccc', 'steel blue' => '#236B8E', 'light-grey' => 'hex=#A8A8A8');
  $font_fam = array('serif', 'sans-serif', 'fantasy', 'monospace');
  $font_size = array('normal' => '100%', 'tiny' => '40%', 'large' => '150%', 'extra-large' => '200%', 'medium' => '60%');
?>
<!DOCTYPE HTML>
<html lang=en-us>
<head>
    <meta charset=utf-8>
    <title>Midterm Example</title>
    <style type="text/css">
    .container {
      width:640px;
      margin:0 auto;
      text-align: center;
      background-color: #06A2CB;
      color: #DD1E2F;
    }
    footer {
      text-align: center;
      color: #DD1E2F;
      font-family: monospace;
    }
    </style>
</head>
<body bgcolor="<?=isset($_POST['colors'])?$_POST['colors'][0]:''?>" style="font-family:<?=isset($_POST['font'])?$_POST['font'][0]:''?>; font-size:<?=isset($_POST['size'])?$_POST['size'][0]:''?>">
  <div class="container">
    <section>
      <h1>Midterm Exam</h1>
    </section>
    <section>
<?php
print_r($_POST);
      // change background color
echo '<h3>Select the background color</h3>';
  echo '<form name="submit" method="post">';
    echo '<select name="colors[]">';
      foreach($bg_color as $vals => $hex) {
        echo '<option value="';
            echo $hex;
            echo '">';
            echo $vals;
            echo '</option>';
      }
    echo '</select>';

    // Change font family
    echo '<h3>Select the font family</h3>';
  echo '<form name="submit" method="post">';
    echo '<select name="font[]">';
      foreach($font_fam as $font) {
        echo '<option value="';
            echo $font;
            echo '">';
            echo $font;
            echo '</option>';
      }
    echo '</select>';

    // Change font size
    echo '<h3>Select the font size</h3>';
  echo '<form name="submit" method="post">';
    echo '<select name="size[]">';
      foreach($font_size as $value => $size) {
        echo '<option value="';
            echo $size;
            echo '">';
            echo $value;
            echo '</option>';
      }
    echo '</select>';
    echo EOL;
    echo EOL;
  echo '<input type="submit" value="Change" />';
  echo '</form>';
?>
    </section>
  </div>
  <footer>
    <p>&copy; Kia Lam 2013</p>
  </footer>
</body>
</html>