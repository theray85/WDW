<html>
<head>
<title>index</title>
</head>

<body>

Menu<br/>
<a href="http://localhost/creature_db.php" target="_blank">-creature in-game database</a><br />
<a href="http://localhost/creature.php" target="_blank">-creature in-game distributions</a><br />

<form method='post'>
Meno NPC = <input type='text' name='name' />
<input type='submit' value='submit' />
</form>

<?
mysql_connect ("localhost", "root","****")  or die (mysql_error());
mysql_select_db ("world");

if (isset($_POST['name']))
{
$result=mysql_query("SELECT * FROM `creature_template` WHERE `name`='".$_POST['name']."'");
echo "<table border=0 cellpadding=4 cellspacing=0><tr><td>id</td><td>gid</td><td>column3</td></tr>";
while ($rowid=mysql_fetch_array($result))
{
//perform actions for earch row found
echo "Meno:".$rowid['name']."</br>";
echo "Entry:".$rowid['entry']."</br>";
echo "Model ID:".$rowid['modelid1']."</br>";
echo 'Link: <a href="http://localhost/database/creature_template/'.$rowid['entry'].'/index.php?id='.$rowid['entry'].'">    http://localhost/database/creature_template/'.$rowid['entry'].'/index.php?id='.$rowid['entry'].'</a></br></p>';
}
echo "</table>";
}
?>

</body>
</html>