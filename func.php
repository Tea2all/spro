<?PHP
function en($value,$xpass){
$encrypt = openssl_encrypt($value,"AES-128-ECB",$xpass);
  return $encrypt;
}
function de($value5,$xpass){
 $dec = openssl_decrypt($value5,"AES-128-ECB","$xpass");
 return $dec;
}

?>