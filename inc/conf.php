<?PHP
foreach (glob("inc/*.txt") as $filename) {


}

$textfile = file($filename);
$randF = rand(1,9999999999);
$xpass ='555';

$_SESSION["passcode"] = $xpass;
$cookie_name ="pass" ;

$cookie_value = $_SESSION["passcode"] ;

?>