<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html lang="EN" dir="ltr" xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>SQLite Hero Demo</title>
</head>
<body>
<?php 
//Connect to the hero database using SQLite.

$db = sqlite_open("chapter8.db");
$query = "SELECT * FROM hero";
$result = sqlite_query($db, $query);

print "<table border = 1>\n";
while ($row = sqlite_fetch_array($result, SQLITE_ASSOC)){
  print "  <tr> \n";
  foreach ($row as $field => $value){
    //print "<td>$field</td>\n";
    print "<td>$value</td>\n";
  } // end foreach
  print "</tr> \n";
} // end while
print "</table> \n";




?>
</body>
</html>

