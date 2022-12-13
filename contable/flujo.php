<?php
$flujo = $_GET["flujo"];
$proceso = $_GET["proceso"];
$proceso_fijo = 'F1';
	if ($proceso != '') {
		include "conexion.inc.php";
		$sql="select * from flujo ";
		$sql.="where flujo='".$flujo."' and ";
		$sql.="proceso='".$proceso."'";
		
		$resultado=mysqli_query($con, $sql);
		//var_dump($resultado);
		$fila=mysqli_fetch_array($resultado);
		$pantalla=$fila["pantalla"];
		$tipo=$fila["tipo"];
		session_start();
		$rol=$fila["rol"];
		
		
		if ($fila["tipo"] == 'A') {
			$id = $fila["id"];
			include $pantalla.".grabar.inc.php";
			}
		//echo($tipo);
		?>

<form method="GET" action="motor.php">
	<?php 
	include $pantalla.".inc.php";

	?>
		<input type="hidden" value="<?php echo $pantalla;?>" name="pantalla"/>
		<input type="hidden" value="<?php echo $flujo;?>" name="flujo"/>
		<input type="hidden" value="<?php echo $proceso;?>" name="proceso"/>
		<input type="hidden" value="<?php echo $tipo;?>" name="tipo"/>
		<input type="hidden" value="<?php echo $usuario;?>" name="usuario"/>
		<input type="hidden" value="<?php echo $proceso_ant;?>" name="usuario"/>
		<br/>
	<?php
	if ($tipo=="C")
	{
	?>
		<input type="submit" value="Si" name="Si"/>
		<input type="submit" value="No" name="No"/>
	<?php
	}
	if($tipo == 'P' or  $tipo == 'I')
	{
	?>
		<input type="submit" value="Anterior" name="Anterior"/>
		<input type="submit" value="Siguiente" name="Siguiente"/>
	<?php
	}
	?>
</form>
	<?php 
	}
	if($tipo =="A"){
	?>
	<form action="http://contable.test">
    	<input type="submit" value="Su petición se está evaluando..." />
	</form>
	<?php
	}
	if ($tipo == 'F') {
	?>
		<form action="http://contable.test">
    	<input type="submit" value="Fin del Proceso" />
		</form>
	<?php
	}
	
	 ?>