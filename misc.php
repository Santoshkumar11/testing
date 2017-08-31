<?php
$value=$_REQUEST['snm'];
if(isset($_REQUEST['sub']))
{
foreach ($value as $names)
{
         echo "$names".",<br/>";
}
echo "<hr>";
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" href="misc_hower.css">
<title>misc test</title>
</head>
<body>
Hower test
<br />
<input id="how" class="button1" type="button" name="but" value="hower test its expand" /> <br />
<input id="how1" class="button2" type="button" name="but1" value="hower-chg color" /> <br />
Multiple selection<br />
<form action="#" method="post" >
<select multiple="multiple" id="s" name="snm[]">
  <option id="s1" value="car">car</option>
  <option id="s2" value="scooter">scooter</option>
  <option id="s3" value="bus">bus</option>
  <option id="s4" value="cycle">cycle</option>
</select>
<input type="submit" name="sub" value="show selected value" />
</form>
</body>
</html>
