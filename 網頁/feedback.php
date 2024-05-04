<?php
ini_set('display_errors','on');
mb_internal_encoding('utf-8');
error_reporting(E_ALL & ~E_NOTICE & ~E_WARNING);
include_once("../db/01_conn.php");
$uname2=$_POST['uname'];
$umail2=$_POST['umail'];
$sservice2=$_POST['sservice'];
$ffeedback2=$_POST['ffeedback'];






try{
    $sql = "insert into feedback(uname,umail,sservice,ffeedback)
		values('" .$uname2. "','" .
		$umail2 . "','" .
		$sservice2 . "','" .
		$ffeedback2 ."')";
	echo $sql."<br>\n";

	$msg='';

	$result =$connect->exec($sql);
	if($result === false){
		$msg="fail update. <br>\n";
	} 
	else{
		$msg="We already receive your messages, we'll reply you asap. <br>\n";
	}
	if($msg != '') echo $msg;
}catch(PDOException $e){
    echo $e->getMessage() . "<br>\n";
}

?>

<a href="index.php">Return to Home Page</a>