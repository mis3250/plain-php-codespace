<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html lang="EN" dir="ltr" xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>XML Demo</title>
<link rel = "stylesheet"
      type = "text/css"
      href = "XMLDemo.css" />
</head>
<body>

<h1>XML Demo</h1>

<?php 

//load up main.xml and examine it

$xml = simplexml_load_file("main.xml");

print "<h3>original XML</h3> \n";

$xmlText = $xml->asXML();
$xmlText = htmlentities($xmlText);
print "<pre>$xmlText</pre> \n";

print "<h3>extract a named element</h3> \n";
print "<p>$xml->title</p> \n";


print "<h3>Extract as an array</h3> \n";
print "<dl> \n";
foreach ($xml->children() as $name => $value){
  print "  <dt>$name:</dt>   <dd>$value</dd> \n";
} // end foreach

print "</dl> \n";
?>
</body>
</html>

