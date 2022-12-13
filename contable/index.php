
<style type="text/css">
	.box {
	  display: flex;
	  align-items: center;
	  justify-content: center;
	}

	.box div {
	  width: 100px;
	  height: 100px;
	}

	label{
		font-family: cursive;
	}
</style>

<div class="box">
	<div>
		<form method="GET" action="indexcontrol.php">
			<h1 style=" font-family: cursive;">
				Acceso
			</h1>
			<label>Usuario:</label>
				<input type="text" value="" name="usuario"/>
			<br/>
			<br/>
			<label>Contraseña:</label>
				<input type="password" value="" name="contrasenia"/>
			<br/>
			<br/>
				<input type="submit" value="Ingresar" name="Aceptar"/>
		</form>	
	</div>
</div>

