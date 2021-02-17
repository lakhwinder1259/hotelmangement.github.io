<?php
$conn=mysql_connect("localhost","root","");
$db =mysql_select_db("person",$conn);
?>
<?php
echo "<ul>";
$sql="SELECT * FROM data";
$qury=mysql_query($sql);
while($row= mysql_fetch_array($qury))
     echo"<li>ID:$row[0]</li><li>NAME:$row[1]</li><li>DATE:$row[2]</li><li>COMMENT:$row[3]</li><br/>";
echo "</ul>";

?>

