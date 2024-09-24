<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html lang="EN" dir="ltr" xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Show Heroes</title>
</head>
<body>
<h1>Show Heroes</h1>
<p>
<?php 
//make the database connection
$conn  = mysql_connect("localhost", "root", "") or die (mysql_error());
mysql_select_db("ph_6", $conn);
$sql = "SELECT * FROM hero";
$result = mysql_query($sql, $conn) or die(mysql_error());

while($row = mysql_fetch_assoc($result)){
  foreach ($row as $name => $value){
    print "$name: $value <br />\n";
  } // end foreach
  print "<br /> \n";
} // end while


?>
</p>

</body>
</html>

