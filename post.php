<?PHP
require_once ('inc/func.php');
require_once ('inc/conf.php');

if(isset($_POST['massage'])){
$myfile = fopen("inc/text.txt", "a") or die("Unable to open file!");
$txt = en($_POST['massage']."[by]:[".$_POST['username']."]"."[".date("Y-m-d")."]",$xpass)."\n";
fwrite($myfile, $txt);
fclose($myfile);
}

?>