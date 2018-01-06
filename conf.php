<?PHP
$textfile = file('text.txt');
$xpass ='555';

$_SESSION["passcode"] = $xpass;
$cookie_name ="pass" ;
$cookie_value = $_SESSION["passcode"] ;
?>