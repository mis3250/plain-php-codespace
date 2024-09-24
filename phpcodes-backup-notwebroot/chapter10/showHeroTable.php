<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html lang="EN" dir="ltr" xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Show Heros</title>
</head>
<body>
<h1>Show Heros</h1>
<?php 
//make the database connection
$conn  = mysql_connect("localhost", "user", "password") or die (mysql_error());
mysql_select_db("ph_6", $conn);

//create a query
$sql = "SELECT * FROM hero";
$result = mysql_query($sql, $conn) or die(mysql_error);

print "<table border = \"1\">\n";

//get field names
print "<tr>\n";
while ($field = mysql_fetch_field($result)){
  print "  <th>$field->name</th>\n";
} // end while
print "</tr>\n\n";

//get row data as an associative array
while ($row = mysql_fetch_assoc($result)){
  print "<tr>\n";
  //look at each field
  foreach ($row as $col=>$val){
    print "  <td>$val</td>\n";
  } // end foreach
  print "</tr>\n\n";
}// end while

print "</table>\n";
?>
</body>
</html>

