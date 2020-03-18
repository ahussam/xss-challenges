<!DOCTYPE html>
<html>
<head>
  <title>Isecur1ty XSS Challenge  1</title>
</head>
<body>
 <center>
 <h1>Isecur1ty XSS Challenge  1</h1>
<?php 
$xss= $_GET['xss'];
$r[0]= '/>/';
$r[1]= '/</';
$r[2]= "/'o/";
$rep='-_-';
$xss1= preg_replace($r,$rep,$xss) ;
$xss2 = preg_replace('/\s+/','-_-',$xss1 )
?>
<p>Use ?xss= to inject your payload. <br>
You should show the domain name in alert box <br>
Level : easy  </p>
<h3>URL "<?php echo htmlentities($xss); ?>"</h3>
<form action='user?=<?php echo $xss2; ?>'>
<input type='hidden' name='xss'>
</form></center>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<h2>Hints ?</h2>
 <ul>
  <li><a href="https://twitter.com/Abdulahhusam">Contact me !</a></li>
</ul> 
<h2>Solvers</h2>
 <ul>
  <li>None !</li>
  <li><a href="mailto://a.hussam@isecur1ty.org">YOU !</a></li>
</ul> 
<br>
<br>
<br>
<br>
<h3>Brought to you by <a href="http://isecur1ty.org">isecur1ty</a> & Challenge by <a href="https://twitter.com/Abdulahhusam">@Abdulahhusam</a>
</body>
</html>