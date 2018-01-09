<?PHP
require_once ('inc/func.php');
require_once ('inc/conf.php');

if(isset($_POST['massage'])){
$myfile = fopen($filename, "a") or die("Unable to open file!");
$txt = en("[".$_POST['username']."]:".$_POST['massage']." |".date("Y-m-d")."/".date("h:i:sa")."]",$xpass)."] \n";
fwrite($myfile, $txt);
fclose($myfile);

}

?>