<p>
	<b>
		Imprime los datos
	</b>	
	<?php
	$now = date("Y-m-d H:i:s");
	$sql="UPDATE contable1.tiempo ";
	$sql.="SET fecha_fin='". $now ."' ";
	$sql.="WHERE proceso= '". 'P10'."'";

	
	//echo($sql);
	mysqli_query($con, $sql);
	?>
</p>


