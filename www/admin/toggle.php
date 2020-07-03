<?php 
include("include/db.php");
$sql = "SELECT * FROM `user`";
$result = mysql_query($conn,$sql)or die(mysql_error());
$r =$result->fetch_array(MYSQLI_ASSOC);




echo 'Finding:'.$r['status'].'<br>';
if($r['staus'] == '1')
$status = '0';
else
$status = '1';
$sql = "UPDATE user SET status ='" . $status . "'";
$result = mysql_query($sql)or die(mysql_error());
echo 'Updating To: '.$quickVar1a.'<br>';    

?>