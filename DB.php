<?php
/**
 * Created by PhpStorm.
 * User: apple
 * Date: 18/10/14
 * Time: 下午4:10
 */

$con = mysql_connect("localhost:3306",'root','');

mysql_select_db("test", $con);

$result = mysql_query("SELECT * FROM t_user order by age desc");

//var_dump(mysql_fetch_array($result));
//var_dump(mysql_fetch_array($result));
//var_dump(mysql_fetch_array($result));

while($row = mysql_fetch_array($result))
{
    echo $row['id'] . " " . $row['age']. " " . $row['name'];
    echo "<br />";
}

//$pdo = new PDO();

mysql_close($con);