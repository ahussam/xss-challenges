<?php 
header('X-XSS-Filter: 1; mode=block');
header('X-Frame-Option: deny');
header('Content-Type: text/html; charset=utf-8'); 
$xss= array( '"', '>', '<' ,'?' , '\\'); 
$_GET['url'] = str_ireplace($xss, '-XSS-', $_GET['url']);  
$check = parse_url($_GET['url'], PHP_URL_HOST); 

?>

<!doctype html>
<html>
<head>
<title>Script checker -XSS</title> 
</head>
<body>
<h1>Like challenges ? You are in the right place</h1>
<h2>Can you call a script outside Twitter ? </h2>

<?php

echo "Host is : $check" ;
echo "<br>";
echo "<h3><a href='http://sandbox.ahussam.me/challenges/1.php?url=https://twitter.com/x.js'>Test</a></h3>";
echo "\n";
if($check ==='twitter.com'){
echo '<script src="'.$_GET['url'].'"></script>' ; 
}else{
echo "Unallowed origin !" ; 
}

?>
<br>
<br>
<br>
<br>
<h2>Rules</h2>
<ul>
    <li>Use ?url= to check the script ;) </li>
    <li>User interaction is not allowed</li>
    <li>Call a script under your control </li>
     <li>Only modern browsers accepted</li>
</ul>
<br>
<br>
<h2>Solvers</h2>
<ol>
    <li>Stefano Vettorazzi (@stefano_soy)</li>
    <li>Mathias Karlsson (@avlidienbrunn)</li>
    <li>Garethheyes (@garethheyes) </li>
    <li>Pax (@rawsec)</li>
    <li>Salem Elmrayed</li>
    <li>Martin Bajaník(@_bayotop)</li>
    <li>Joaquin Ramirez(@rammarj)</li>
    <li>You !</li>

</ol>

<b>If you solve the challenge contact me (eye.magicme@gmail.com) or <a href="https://twitter.com/Abdulahhusam">@Abdulahhusam</a></b>
</body>
</html>
<!--
<?php readfile(__FILE__); ?>
