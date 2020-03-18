<?php 
header("content-type: application/javascript");
$arr = array("(",")","'","\"","\\",":","[","]","{","}", "=", "&", '`','n');

if ($_GET["path"] ==="img/dog1.jpg" || $_GET["path"] ==="img/dog2.jpg" ||$_GET["path"] ==="img/dog3.jpg" || $_GET["path"] ==="img/dog4.jpg") {
	echo '{ 
  "desc": "A very cute dog I found somewhere!",
  "det": "Iphone X camera"
}';
}else{
echo str_replace($arr,"",$_GET["path"]);

}

?>