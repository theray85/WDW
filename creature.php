<html>
<head>
<title>index</title>
</head>

<body>

Menu<br/>
<a href="http://localhost/creature_db.php" target="_blank">-creature in-game database</a><br />
<a href="http://localhost/creature.php" target="_blank">-creature in-game distributions</a><br />

<form method='post'>
Entry NPC = <input type='text' name='id' />
<input type='submit' value='submit' />
</form>

<?
mysql_connect ("localhost", "root","****")  or die (mysql_error());
mysql_select_db ("world");

if (isset($_POST['id']))
{
$result=mysql_query("SELECT * FROM `creature` WHERE `id`='".$_POST['id']."'");
echo "<table border=0 cellpadding=4 cellspacing=0><tr><td>id</td><td>gid</td><td>column3</td></tr>";
while ($rowid=mysql_fetch_array($result))
{
//perform actions for earch row found
echo "Entry: ".$rowid['id']."</br>";
echo "GUID: ".$rowid['guid']."</br>";
echo "Map: ".$rowid['map']."</br>";
echo "SpawnMask: ".$rowid['spawnMask']."</br>";
echo "PhaseMask: ".$rowid['phaseMask']."</br>";
echo "Model ID: ".$rowid['modelid']."</br>";
echo "equipment_id: ".$rowid['equipment_id']."</br></p>";
echo "position_x: ".$rowid['position_x']."</br>";
echo "position_y: ".$rowid['position_y']."</br>";
echo "position_z: ".$rowid['position_z']."</br>";
echo "orientation: ".$rowid['orientation']."</br></p>";
echo "spawntimesecs: ".$rowid['spawntimesecs']."</br>";
echo "spawndist: ".$rowid['spawndist']."</br>";
echo "currentwaypoint: ".$rowid['currentwaypoint']."</br>";
echo "curhealth: ".$rowid['curhealth']."</br>";
echo "curmana: ".$rowid['curmana']."</br>";
echo "MovementType: ".$rowid['MovementType']."</br>";
echo "npcflag: ".$rowid['npcflag']."</br>";
echo "unit_flags: ".$rowid['unit_flags']."</br>";
echo "dinamicflags: ".$rowid['dynamicflags']."</br></p>";
echo 'Link: <a href="http://localhost/database/creature_template/'.$rowid['id'].'/index.php?id='.$rowid['id'].'">    http://localhost/database/creature_template/'.$rowid['id'].'/index.php?id='.$rowid['id'].'</a></br></p>';
}
echo "</table>";
}
?>

</body>
</html>