<?php
ini_set('display_errors','on');
error_reporting(E_ALL & ~E_NOTICE & ~E_WARNING);
include_once("../db/01_conn.php");
$uname2=$_POST['uname'];
$count2=$_POST['count'];
$cell2=$_POST['cell'];
$umail2=$_POST['umail'];
$ddate2=$_POST['daydate'];
$mydate2=date('Y-m-d H:i:s');




try{
    $sql = "insert into dogcatsignup(uname, count, cell, umail, ddate, otime)
		values('" .$uname2. "','" .
		$count2 . "','" . 
		$cell2 . "','" .
		$umail2 . "','" .
		$ddate2 . "','".
		$mydate2 ."')";
	echo $sql."<br>\n";

	$msg='';

	$result =$connect->exec($sql);
	if($result === false){
		$msg="fail update. <br>\n";
	} 
	else{
		$msg="success update. <br>\n <a href='dogcatsignupQuery.php'>Return to modify page</a>";
	}
	if($msg != '') echo $msg;
}catch(PDOException $e){
    echo $e->getMessage() . "<br>\n";
}


?>

<a href="dogcatsignup.html">Return to sign-up page</a>