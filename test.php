
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
echo "	[decoded:][".de($textfile[$x], $_SESSION["passcode"]).""."]$textfile[$x]<br><br>"; 
}

}else{die();}




?>

