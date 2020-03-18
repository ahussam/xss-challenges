<?php 
header("Cache-Control: no-cache, no-store, must-revalidate");
header("Pragma: no-cache");
header("Expires: 0");
error_reporting(0);
session_start();

if (isset($_SERVER['HTTP_REFERER'])) {
	echo "Request came from unknown origin.";
}
elseif(strlen($_SERVER['HTTP_ACCEPT_LANGUAGE']) > 14 || strpos($_SERVER['HTTP_ACCEPT'],"<") !== false || strpos($_SERVER['HTTP_ACCEPT_LANGUAGE'],"<") !== false  ||strpos($_SERVER['HTTP_CONTENT_LANGUAGE'],"<") !== false || strpos($_SERVER['CONTENT_TYPE'],"<") !== false){

echo "HTTP request header is misconfigured!<br>\n(HTTP-Header-System v 0.1)";	

}else{
if (isset($_SESSION['previous_request'])) {
	echo strpos($_SERVER['Accept'],"<");
	echo"<html>\n<head>\n<title>XSS - Challenge</title>\n</head>\n<body>";
	echo "<h1>Your Last Request Header:</h1>";
	print_r($_SESSION['previous_request']);
	$_SESSION['previous_request'] = getallheaders();
	}else{
     $_SESSION['previous_request'] = getallheaders();
     echo "It soundns like it's your first time here!";
	}
}
?>
<br>
<br>
<h2>Rules</h2>
<ul>
    <li>I click your PoC and nothing appeared? you are not a winner.</li>
    <li>There are no hidden parameter in the page.</li>
    <li>User interaction is not allowed.</li>
    <li>Only modern browsers are accepted.</li>
</ul>
<br>
<br>
<h2>Solvers</h2>
<ol>
<li><a href="https://twitter.com/michielprins">Michiel Prins</a></li>
<li><a href="https://twitter.com/_bayotop">Martin Bajanik</a></li>
<li><a href="https://twitter.com/filedescriptor">Filedescriptor</a></li>
<li>You!</li>
</ol>

<b>If you solve the challenge you can contact me(eye.magicme[at]gmail.com) or DM <a href="https://twitter.com/Abdulahhusam">@Abdulahhusam</a></b>
</body>
</html>