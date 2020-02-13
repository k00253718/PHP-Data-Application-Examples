<html><head>
<title>PHP_VariablesScope</title>
</head>
<body>
<h1>Variables Scope</h1>
<?php
$a=100;  //define a variable in main script

//echo the value of $a
echo "<p>Variable value from global/main script is ".$a;

//call the FUNCTION
echoVar1();  //call the function
echoVar2();  //call the function - this function uses the global keyword to access the value of $a
echoVar3($a);//call the function, pass the variable $a as argument

//define a FUNCTION
function echoVar1()
{
echo '<p>EchoVar1:$a is outside the scope of this function :'.$a;  //$a is outside the scope of this function
}

function echoVar2()
{
global $a;
echo '<p>EchoVar2: using <em>global</em> keyword  :'.$a;  //$a is now inside scope of the function
}

function echoVar3($value)
{
echo '<p>EchoVar3: Pass a value to function : '.$value;  //$value is inside scope of the function
}

?>
</body>
</html> 


