<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>test</title>
  <meta name="description" content="test">
  <meta name="author" content="SitePoint">

  <link rel="stylesheet" href="styles.css">

  <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
  <![endif]-->
</head>

<body>
<?php
session_start();
require_once ('func.php');
require_once ('conf.php');
setcookie($cookie_name, $cookie_value, time() + (86400 * 2), "/"); // 86400 = 1 day



if(isset($_COOKIE[$cookie_name])) { // check if coockie is there if not page will not load

$clength = count($textfile); // count 
for($x = 0; $x < $clength; $x++) {
$zx = en($textfile[$x], $_SESSION["passcode"]);
echo $zx."<br>";
echo "[decoded:][".de($textfile[$x], $_SESSION["passcode"]).""."]$textfile[$x]<br><br>"; 
}

}else{die();}




?>
  <script src="js/scripts.js"></script>
</body>
</html>

