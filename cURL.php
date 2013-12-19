<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php  
//EXE cURL
 
    $ch = curl_init();
    curl_setopt( $ch, CURLOPT_ENCODING, "UTF-8" );
    curl_setopt($ch, CURLOPT_URL, "http://www.defencenet.gr/defence/index.php");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $contents = curl_exec ($ch);
    curl_close ($ch);
 
//Replace "H"   with "Hello World of PHP"

    $pattern='/H/';
    $replacement='Hello World of PHP';
    echo preg_replace($pattern,$replacement,$contents);
//Write curled page to a text file
   
    $filename = 'test.txt';
    if (is_writable($filename)) {
    	if (!$handle = fopen($filename, 'a')) {
        	   echo "Cannot open file ($filename)";
               exit;
        }
//Write $contents to our opened file.
    	if (fwrite($handle, $contents) === FALSE) {
               echo "Cannot write to file ($filename)";
               exit;
         }
   		 echo "Success, wrote ($somecontent) to file ($filename)";
    	 fclose($handle);

    }else {
    		echo "The file $filename is not writable";
    }

?>

<?php
//echo ( $contents);
?>


</body>
</html>
