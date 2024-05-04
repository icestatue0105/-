<?php
session_start();
ini_set('display_errors','on');
error_reporting(E_ALL & ~E_NOTICE & ~E_WARNING);
include_once("01_conn.php");
$umail2=$_POST['umail'];
$pwd2=$_POST['pwd'];





try{
    $sql = "select * from dogsignup where umail='$umail2' and pwd='$pwd2'";
	echo $sql."<br>\n";

	$msg='';

	$result =$connect->query($sql);
	$rs2=$result->fetchALL();
	if(count($rs2)==1) {
		$_SESSION['umail']=$umail2;
		header("refresh:0;url=www/icestatue/index.html");
	}
	if($result === false){
		$msg="fail select. <br>\n";
	} 
	else{
		$msg="帳號或密碼錯誤 <br>\n";
	}
	if($msg != '') echo $msg;
}catch(PDOException $e){
    echo $e->getMessage() . "<br>\n";
}

?>