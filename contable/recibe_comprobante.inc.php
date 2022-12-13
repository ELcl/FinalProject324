<p>
	<b>
		Recibe Comprobante de pago
	</b>	
	<?php
	$now = date("Y-m-d H:i:s");
	$sql="UPDATE contable1.tiempo ";
	$sql.="SET fecha_ini='". $now ."' ";
	$sql.="WHERE proceso= '". 'P10'."'";

	
	//echo($sql);
	mysqli_query($con, $sql);
	?>
</p>
