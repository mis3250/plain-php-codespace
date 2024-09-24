<?php 

//XCMS
//XML-Based Simple CMS system
//Andy Harris for PHP/MySQL Adv. Beg 2nd Ed.
// NOTE:  Requires simpleXML extensions in PHP 5.0!

//get an XML file or load a default

if (filter_has_var(INPUT_GET, "theXML")){
  $theXML = filter_input(INPUT_GET, "theXML");
} else {
  $theXML = "main.xml";
} // end if

//Open up XML file 
$xml = simplexml_load_file($theXML);

if ( !$xml){
  print ("there was a problem opening the XML");

} else {

  //include ($xml->css);
  include($xml->top);

  print "<div class = \"menuPanel\"> \n";
  include ($xml->menu);
  print "</div> \n";

  print "<div class = \"item\"> \n";
  include ($xml->content);
  print "</div> \n";

} // end if

?>
</body>
</html>






