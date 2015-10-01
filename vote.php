<?php
include "config.php";
$username=$_POST['UserName'];
$province = $_POST['selProvince'];
$president = $_POST['selPresident'];

	$sql = "INSERT INTO tbl_vote(fld_id, fld_name, fld_province, fld_president) 
			VALUES (NULL,'".$username."','".$province."','".$president."')";
	$result = mysqli_query($con, $sql);

		if($result){
			echo "i will graduate";
		}
		else{
			echo "5 years in GC";
		}

?>