<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">

    <title>Hello, world!</title>
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
$iid=$_GET['iid'];
$uname=$_GET['uname'];
$count=$_GET['count'];
$cell=$_GET['cell'];
$umail=$_GET['umail'];
$$ddate=date('Y-m-d H:i:s');
echo "會員序號=$iid";

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
$sql2="select * from dogcatsignup where iid= $iid";
$connect->setAttribute(PDO::ATTR_CASE, PDO::CASE_NATURAL);
$rs2=$connect->query($sql2);
$rs2->setFetchMode(PDO::FETCH_BOTH);
//$row2=$rs2->fetch();
?>
<form method="post" action="dogcatsignupdate2.php">
<input type="hidden" name="iid" value=<?php echo $iid;?>>

參觀人數:<input name="count" class="form-control form-control-lg" type="text" placeholder="人數" aria-label=".form-control-lg example">

連絡電話:<input name="cell" class="form-control form-control-lg" type="text" placeholder="電話" aria-label=".form-control-lg example">

Email:<input name="umail" class="form-control form-control-lg" type="email" placeholder="電子郵件" aria-label=".form-control-lg example">

日期<input name="ddate" type="date"><br>


<input type="submit" class="btn btn-warning" value="修改">
</table>
</form>
</body>
</html>