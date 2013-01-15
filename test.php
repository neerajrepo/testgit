<?php
$con = mysql_connect("localhost","root","") or die("Could not connect");
mysql_selectdb("test", $con);
$query = 'INSERT INTO item (`name`) VALUES ("DELTaaaA")';
$res = mysql_query($query, $con) or die(mysql_error());
echo "<pre>";
print_r($res);
$query = 'UPDATE item set name="DELTaaaA1" WHERE id = LAST_INSERT_ID()';
$res = mysql_query($query, $con) or die(mysql_error());
print_r($res);
?>
