<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html>
  <head>
    <title>creature</title>
    <meta name="GENERATOR" content="HeidiSQL 7.0.0.4053">
    <meta http-equiv="Content-Type" content="text/html; charset=utf8" />

  </head>

  <body>
  
  

<?php
echo 'ID<input type="text" value="' . htmlspecialchars($_GET["id"]) . '" />';
?>


<?php
mysql_connect("localhost", "root", "****") or
    die("Could not connect: " . mysql_error());
mysql_select_db("world");

$result = mysql_query("SELECT world FROM table WHERE id='($_GET["id"])'");

while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
    echo 'value= '.$row["id"].'!';
}

mysql_free_result($result);
?>


$name = $_POST["Allan_Hafgan"];
$id = $_POST["1315"];
$level = $_POST["30"];
$health = $_POST["1003"];
$reaction = $_POST["Aliance"];
$faction = $_POST["Stormwind"];
$addInfo = $_POST["Can repair"];
$addPatch = $_POST["1.11.1"];

?>

  </body>
</html>
