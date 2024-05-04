<?php
ini_set('display_errors','on');
error_reporting(E_ALL & ~E_NOTICE & ~E_WARNING);
include_once("../db/01_conn.php");
$iid=$_GET['iid'];
try{
    $sql="delete from dogcatsignup where iid=" . $iid;
	echo $sql. "<br>\n";
	//die();
	$msg='';

	$result =$connect->exec($sql);
	if($result === false){
		$msg="Delete fail. <br>\n";
	} else {
		$msg="Delete Successful. <br>\n";
	}
	if($msg != '') echo $msg;
}catch(PDOException $e){
    echo $e->getMessage() . "<br>\n";
}

?>