<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">

    <title>報名表單更改</title>
  </head>
  <body>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js" integrity="sha384-lpyLfhYuitXl2zRZ5Bn2fqnhNAKOAaM/0Kr9laMspuaMiZfGmfwRNFh8HlMy49eQ" crossorigin="anonymous"></script>
    -->
<?php
ini_set('display_errors','on');
error_reporting(E_ALL & ~E_NOTICE & ~E_WARNING);
include_once("../db/01_conn.php");
/*
try{
    $sql="update visit set vcnter=vcnter+1 where vid=5";

	$msg='';

	$result =$connect->exec($sql);
	if($result === false){
		$msg="fail update. <br>\n";
	} 
	if($msg != '') echo $msg;
}catch(PDOException $e){
    echo $e->getMessage() . "<br>\n";
}
*/
$sql2="select * from dogcatsignup ";
$connect->setAttribute(PDO::ATTR_CASE, PDO::CASE_NATURAL);
$rs2=$connect->query($sql2);
$rs2->setFetchMode(PDO::FETCH_BOTH);
//$row2=$rs2->fetch();
?>
<table class="table table-striped table-hover">
  <thead>
    <tr>
      <th scope="col">修改</th>
	    <th scope="col">刪除</th>
      <th scope="col">會員序號</th>
      <th scope="col">代表人</th>
      <th scope="col">參觀人數</th>
      <th scope="col">連絡電話</th>
      <th scope="col">Email</th>
      <th scope="col">參觀日期</th>
      <th scope="col">上網預約時間</th>
    </tr>
  </thead>

<?php
while($row3=$rs2->fetch()){
	echo "<tr>";
	echo "<td><a href='dogcatsignupdate.php?iid=" . $row3['iid'] ."&count=" . $row3['count'] . 
	"&uid=" .$row3['uid'] . "'>修</a>";
	echo "<td><a href='dogcatsignupDel.php?iid=" . $row3['iid'] . "'>刪</a>";
	echo "<td>". $row3['iid'];
	echo "<td>". $row3['uname'];
	echo "<td>". $row3['count'];
	echo "<td>". $row3['cell'];
	echo "<td>". $row3['umail'];
  echo "<td>". $row3['ddate'];
	echo "<td>". $row3['otime'];

	


	
	

	
	echo "</tr>";
}	
?>
</table>
</body>
</html>