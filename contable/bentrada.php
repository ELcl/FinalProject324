
<?php
include "conexion.inc.php";
session_start();

$usuario=$_SESSION["usuario"];
$rol =$_SESSION["rol"];
//var_dump($rol);
//$rol = $_SESSION["cajas"];
if ($rol == 'Usuario') {
  $sql="select * from tiempo ";
  $sql.="where usuario='".$usuario."' AND fecha_fin is null";
  //echo($sql);
  $resultado=mysqli_query($con, $sql);
}
else{
  $sql="select * from tiempo ";
  $sql.="where usuario='".$usuario."' and fecha_fin is null";
  $resultado=mysqli_query($con, $sql);

  $now = date("Y-m-d H:i:s");
  $sql="UPDATE contable1.tiempo ";
  $sql.="SET fecha_ini='". $now ."' ";
  $sql.="WHERE proceso= '". 'P7'."'";

  //echo($sql);
  mysqli_query($con, $sql);
}
//$rol_estable = 'rol';
?>
<h2>Bandeja de Entrada de Procesos</h2>
  <div id="demo">
      <table border="2px" cellpadding="12">
      <tr>
        <td>Flujo</td>
        <td>Proceso</td>
        <td>Nro.tramite</td>
        <td>Fecha inicial</td>
        <td>Fecha final</td>
        <td>Ir</td>
      </tr>
        <?php 
        while ($fila=mysqli_fetch_array($resultado))
        {
          echo "<tr>";
          echo "<td>".$fila["flujo"]."</td>";
          echo "<td>".$fila["proceso"]."</td>";
          echo "<td>".$fila["nro_tramite"]."</td>";
          echo "<td>".$fila["fecha_ini"]."</td>";
          echo "<td>".$fila["fecha_fin"]."</td>";
          echo "<td><a href='flujo.php?flujo=".$fila["flujo"]."&proceso=".$fila["proceso"]."'>Ir</td>";
          echo "</tr>";
        }
        ?>
    </table>
  </div>
  