<html>
 <body>
 
 <form action="#"method="post" >
 <table align="center">
 
first number<br>
<input type="number" name= "first number" value "">
<br>

last number<br> 
<input type="number" name="last number"value"" >
<br>

result<br> 
<input type="text" name="result" value"">
<br>

<input type="submit" value="+">
<input type="submit" value="-">
<input type="submit" value="*">
<input type="submit" value="/"> 
</table>
</form>

 
 
 <?php
 $x;
$y;
$result;
switch (op)
{
case'+':
 $result=$x+$y;
echo result;
break;

case'-':
 $result=$x-$y;
echo result;
break;

case'*':
 $result=$x*$y;
echo result;
break;

case'/':
 $result=$x/$y;
echo result;
break;

?>
<body>
<html>