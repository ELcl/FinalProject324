<?php
	$now = date("Y-m-d H:i:s");
	$sql="UPDATE contable1.tiempo ";
	$sql.="SET fecha_fin='". $now ."' ";
	$sql.="WHERE proceso= '". 'P1'."'";


	//echo($sql);
	mysqli_query($con, $sql);
?>