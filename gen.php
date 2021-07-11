<?php
$link = htmlspecialchars($_POST['url']);
$end = htmlspecialchars($_POST['gen']);
$myfile = fopen('page/' . $end . '.html', 'w') or die("ujsciusdnfiks");

$txt = '
<html><head><meta http-equiv="refresh" content="3;url="'. $link .'"</head><body>redirecting</body></html>
';
fwrite($myfile, $txt);
fclose($myfile);

$myfile1 = fopen('copy/' . $end . '.html', 'w') or die("ujsciusdnfiks");

$txt1 = '
<html><head></head><body><p>localhost/challenge/page/'. $end .'.html</p></body></html>
';
fwrite($myfile1, $txt1);
fclose($myfile1);
header('Location: copy/'. $end .'.html');