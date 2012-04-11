<html>
<head></head>
<body style="width:600px">
<h2>Decrypted</h2>
<?php

$key = 'White Glow Silver Yellow Penny';
// $string = ' string to be encrypted '; // note the spaces
$string = $_POST['string']; // note the spaces


if($string){
// $encrypted = base64_encode(mcrypt_encrypt(MCRYPT_RIJNDAEL_256, md5($key), $string, MCRYPT_MODE_CBC, md5(md5($key))));
// $decrypted = rtrim(mcrypt_decrypt(MCRYPT_RIJNDAEL_256, md5($key), base64_decode($encrypted), MCRYPT_MODE_CBC, md5(md5($key))), "\0");
$decrypted = rtrim(mcrypt_decrypt(MCRYPT_RIJNDAEL_256, md5($key), base64_decode($string), MCRYPT_MODE_CBC, md5(md5($key))), "\0");

echo 'Decrypted:' . '<br />';
echo $decrypted; // "ey7zu5zBqJB0rGtIn5UB1xG03efyCp+KSNR4/GAv14w="

//echo "\n";

//echo 'Decrypted:' ;
//var_dump($decrypted); // " string to be encrypted "

// phpinfo();
}



?>

<form action="" method="post">
<textarea style="width:600px;height:800px" name="string"></textarea><br />
<input type="submit" />
</form>
</body>
</html>