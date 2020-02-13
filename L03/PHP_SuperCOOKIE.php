<html>
<head>
<title>PHP_SuperCOOKIE</title>
<style type="text/css">
<!--
body, table { font:12px Verdana,Arial,Helvetica,sans-serif}
tr.Light { background-color:#F9F9F9 }
tr.Dark { background-color:#C0C0A0 }
tr.Pink { background-color:#EEE0E0; border: solid 1px}
-->
</style>
</head>
<body>
<h1>Accessing the $_COOKIE superglobal</h1>

<table border="1" cellspacing="2">
<tbody>
<tr class="Pink">
<th><h2>Variable</h2></th><th><h2>Value</h2></th></tr>
<?php
$colors = array('Dark', 'Light'); //an array containing 2 values
$i=0;  //loop counter

//use 'foreach' iterate through the array
foreach($_COOKIE as $key=>$value) //see PHP manual: http://ie.php.net/manual/en/control-structures.foreach.php
    {
   echo '<tr class="'.$colors[$i++ % 2].'">'; //see PHP manual: http://ie.php.net/manual/en/language.operators.arithmetic.php
   echo '<td><b>$_SERVER[\''.$key.'\']</b></td>';
   echo '<td>'.$value.'</td></tr>';
    }
?>
</tbody>
</table>
</body>
</html> 
