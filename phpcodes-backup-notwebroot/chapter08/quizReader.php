<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html lang="EN" dir="ltr" xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Quiz Reader</title>
<style type = "text/css">
li {
  list-style-type: upper-alpha;
}
</style>
</head>
<body>
<?php 
//quiz reader
//demonstrates working with more complex XML files

//load up a quiz file
$xml = simplexml_load_file("python.xml");

//step through quiz as associative array
foreach ($xml->children() as $problem){

  //print each question as an ordered list.
  print <<<HERE
  <h3>$problem->question</h3>
  <ol>
    <li>$problem->answerA</li>
    <li>$problem->answerB</li>
    <li>$problem->answerC</li>
    <li>$problem->answerD</li>
  </ol>
  
HERE;
} // end foreach

//directly accessing a node:
print "<p> \n";
print $xml->problem[0]->question;
print "</p> \n";

?>
</body>
</html>

