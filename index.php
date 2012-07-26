<html>
<head>
<title>index</title>
</head>
<body>

<form method='post'>
Meno NPC = <input type='text' name='name' />
<input type='submit' value='submit' />
</form>

<?
mysql_connect ("localhost", "root","root")  or die (mysql_error());
mysql_select_db ("world");

if (isset($_POST['name']))
{
$result=mysql_query("SELECT * FROM `creature_template` WHERE `name`='".$_POST['name']."'");
echo "<table border=0 cellpadding=4 cellspacing=0><tr><td>id</td><td>gid</td><td>column3</td></tr>";
while ($rowid=mysql_fetch_array($result))
{
//perform actions for earch row found
echo "Meno:".$rowid['name']."</br>";
echo "ID:".$rowid['entry']."</br>";
echo "Model ID:".$rowid['modelid1']."</br>";
echo 'Link: <a href="http://localhost/web.sk/database/creature_template/'.$rowid['entry'].'/index.php?id='.$rowid['entry'].'">    http://localhost/web.sk/database/creature_template/'.$rowid['entry'].'/index.php?id='.$rowid['entry'].'</a>';
}
echo "</table>";
}
?>

</body>
</html>