<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html lang="EN" dir="ltr" xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Tip of the day</title>
</head>

<body>


<h1>Tip of the day</h1>
<?php 

print "<h3>Here's your tip:</h3>";
?>

<div style = "border-color:green; border-style:groove; border-width:2px">
<?php 
readfile("tips.txt");
?>
</div>


</body>
</html>
