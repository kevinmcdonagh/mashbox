<?php
header('Content-type: application/xml');

$daurl = 'http://ws.audioscrobbler.com/2.0/';

$strData = '';
foreach ($_POST as $key => $value) {
    if ($strData == '') {
        $strData = '?';
    }
    else {
        $strData .= '&';
    }
    $strData .= $key .'='. $value;
}

$daurl = $daurl . $strData;

$daurl = str_replace(' ', '%20', $daurl);

$handle = fopen($daurl, "r");

if ($handle) {
    while (!feof($handle)) {
        $buffer = fgets($handle, 4096);
        echo $buffer;
    }
    fclose($handle);
}
?>