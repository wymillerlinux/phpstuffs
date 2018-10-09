
<html>
<head>
<title>CIT 228 - Finish v2</title>
</head>
<body>
<?php
$file = 'afile.txt';
if( file_exists($file)){
  $handle = fopen($file, 'r');
  if( $file == false ){
    echo ( "Error in opening file" );
    exit();
  } else {
    $data = fread($handle,filesize($file));
    echo ( "File size : " . filesize($file) . " bytes" );
    echo ( "<pre>$data</pre>" );
    fclose($handle);
  }
}
else echo "The file does not exist";
?>
</body>
</html>
