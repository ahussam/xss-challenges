<?php 
error_reporting(0);
$jsevents = array(
        'onabort',
        'onactivate',
        'onanimationend',
        'onanimationiteration',
        'onanimationstart',
        'onafterprint',
        'onafterupdate',
        'onbeforeactivate',
        'onbeforecopy',
        'onbeforecut',
        'onbeforedeactivate',
        'onbeforeeditfocus',
        'onbeforepaste',
        'onbeforeprint',
        'onbeforeunload',
        'onbegin',
        'onblur',
        'onbounce',
        'oncanplay',
        'oncanplaythrough',
        'oncellchange',
        'onchange',
        'onclick',
        'oncontextmenu',
        'oncontrolselect',
        'oncopy',
        'oncut',
        'ondataavailable',
        'ondatasetchanged',
        'ondatasetcomplete',
        'ondblclick',
        'ondeactivate',
        'ondrag',
        'ondragdrop',
        'ondragend',
        'ondragenter',
        'ondragleave',
        'ondragover',
        'ondragstart',
        'ondrop',
        'ondurationchange',
        'onemptied',
        'onend',
        'onended',
       /** 'onerror', < SOLVE !! **/
        'onerrorupdate',
        'onexit',
        'onfilterchange',
        'onfinish',
        'onfocus',
        'onfocusin',
        'onfocusout',
        'onformchange', 
        'onforminput', 
        'oninvalid',
        'onreceived',
        'onhelp',
        'onkeydown',
        'onkeypress',
        'onkeyup',
        'onlayoutcomplete',
        'onload',
        'onloadeddata',
        'onloadedmetadata',
        'onloadstart',
        'onlosecapture',
        'onmediacomplete',
        'onmediaerror',
        'onmessage',
        'onmousedown',
        'onmouseenter',
        'onmouseleave',
        'onmousemove',
        'onmouseout',
        'onmouseover',
        'onmouseup',
        'onmousewheel',
        'onmove',
        'onmoveend',
        'onmovestart',
        'onoffline',
        'ononline',
        'onoutofsync',
        'onpagehide',
        'onpageshow',
        'onpaste',
        'onpause',
        'onplay',
        'onplaying',
        'oppopstate',
        'onprogress',
        'onpropertychange',
        'onload',
        'onreadystatechange',
        'onrepeat',
        'onreset',
        'onresize',
        'onresizeend',
        'onresizestart',
        'onresume',
        'onreverse',
        'onrowdelete',
        'onrowenter',
        'onrowexit',
        'onrowinserted',
        'onscroll',
        'onsearch',
        'onselect',
        'onseek',
        'onseeked', 
        'onseeking',
        'onselect',
        'onselectionchange',
        'onselectstart',
        'onstalled',
        'onstart',
        'onstorage',
        'onstop',
        'onsubmit',
        'onsuspend',
        'onsynchrestored',
        'ontimeerror',
        'ontimeupdate',
        'ontrackchange',
        'ontransitionend',
        'onunload',
        'onurlflip',
        'onvolumechange',
        'onwaiting',
        'onwebkitanimationend',
        'onwebkitanimationiteration',
        'onwebkitanimationstart',
        'onwebkittransitionend' ,
        'contenteditable'
    );
    $_GET['xss'] = htmlentities(str_ireplace($jsevents, '(xss-event)', $_GET['xss']));  
?>

<!DOCTYPE html>

<html>
<head>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-72574313-1', 'auto');
  ga('send', 'pageview');

</script>
<style>
body {
    direction: rtl;
}
body { background-color: ;#eef2f5 } /* Adding !important forces the browser to overwrite the default style applied by Bootstrap */
</style>	
	<meta charset="UTF-8">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	
<title>Isecur1ty XSS Challenge  2</title>
</head>
<body bgcolor="">
<div class="jumbotron">
 <center>
 	<h1>Isecur1ty XSS Challenge  3</h1>
<p> &#1575;&#1587;&#1578;&#1582;&#1583;&#1605; &#1605;&#1578;&#1594;&#1610;&#1585; xss &#1604;&#1581;&#1602;&#1606; &#1575;&#1604;&#1576;&#1575;&#1610; &#1604;&#1608;&#1583; &#1575;&#1604;&#1582;&#1575;&#1589; &#1576;&#1603; .  <br>
 <br>
المستوى : متوسط  </p>
<h3>What you submit</h3>
<form id="xss">
	<input name='<?php echo $_GET['xss']; ?>' type='text'/> 
	<input type='submit' value='Check your code'>
</form>
</center>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<center>فور حل التحدي قُم بإرسال رسالة إلينا عبر البريد challenge@isecur1ty.org

</center>
<center><h4>التحدي مقدم لكم من خلال <a href="http://isecur1ty.org">مجتمع iSecur1ty</a> &amp; بإشراف <a href="https://twitter.com/Abdulahhusam">@Abdulahhusam</a></h4></center>
</body>
</div>
</html>