<?PHP
require_once ('func.php');
require_once ('conf.php');

if(isset($_POST['massage'])){
$myfile = fopen("text.txt", "a") or die("Unable to open file!");
$txt = en($_POST['massage'],$xpass)."\n";
fwrite($myfile, $txt);
fclose($myfile);
}

?>