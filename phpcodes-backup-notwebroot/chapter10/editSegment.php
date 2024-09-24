<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html lang="EN" dir="ltr" xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel = "stylesheet"
      type = "text/css"
      href = "listSegments.css" />
      
<title>Edit Segment</title>
<style type = "text/css">
body {
  color:red
}
td {
 color: white;
 background-color: blue;
 width: 20%;
 height: 5em;
 text-align: center;
}
</style>
</head>
<body>
<?php

//connect to database
connect();

$room = filter_input(INPUT_POST, "room");
//$room = mysql_escape_string($room);
$room = mysqli_real_escape_string($conn, $room);
if (empty($room)){
  $room = 0;
} // end if




$sql = "SELECT * FROM adventure WHERE id = '$room'";
$result = mysqli_query($conn, $sql) or die(mysqli_error());
$mainRow = mysqli_fetch_assoc($result);
$theText = $mainRow["description"];
$roomName = $mainRow["name"];
$northList = makeList("north", $mainRow["north"]);
$westList = makeList("west", $mainRow["west"]);
$eastList = makeList("east", $mainRow["east"]);
$southList = makeList("south", $mainRow["south"]);
$roomNum = $mainRow["id"];

print <<<HERE

<form action = "saveRoom.php"
      method = "post">
      
<table border = "1">
<tr>
  <td colspan = "3">
Room # $roomNum:
    <input type = "text"
           name = "name"
           value = "$roomName" />
    <input type = "hidden"
           name = "id"
           value = "$roomNum" />
   </td>
</tr>

<tr>
  <td></td>
  <td>$northList</td>
  <td></td>
</tr>

<tr>
  <td>$westList</td>
  <td>
    <textarea rows = "5" 
              cols = "30" 
              name = "description">$theText</textarea>
  </td>
  <td>$eastList</td>
</tr>

<tr>
  <td></td>
  <td>$southList</td>
  <td></td>
</tr>

<tr>
  <td colspan = "3">
    <input type = "submit"
           value = "save this room" />
  </td>
</tr>
</table>


</form>

HERE;

function makeList($dir, $current){
  //make a list of all the places in the system
  
  //how do I indicate the currently selected item?
  
  global $conn;
  $listCode = "<select name = \"$dir\">\n";
  $sql = "SELECT id, name FROM adventure";
  $result = mysqli_query($conn,$sql);
  $rowNum = 0;
  while ($row = mysqli_fetch_assoc($result)){
    $id = $row["id"];
    $placeName = $row["name"];
    $listCode .= "  <option value = \"$id\"";
    
    //select this option if it's the one indicated
    if ($rowNum == $current){
      $listCode .= "selected = \"selected\" \n ";
    } // end if
    if ($placeName == ""){
      $placeName = "&nbsp;"; 
    } // end if
    $listCode .= ">$placeName</option>\n";
    $rowNum++;
  } // end while
  $listCode .= "</select> \n";
  return $listCode;
} // end makeList

function connect(){
	global $conn, $select;
  $conn  = mysqli_connect("localhost", "root", "") or die(mysqli_error());
  $select = mysqli_select_db($conn, "ph_6");
} // end function
?>



</body>
</html>
