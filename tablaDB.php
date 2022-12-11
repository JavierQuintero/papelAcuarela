<?php
  include("cn.php");
  $usuarios="SELECT * FROM alumnos";
?>
<!DOCTYPE html>
<html>
  <head></head>
  <body>
    <div class="content-table">
      <div class="table-title">Datos de usuario</div>
      <div class="table-header">Nombre</div>
      <div class="table-header">Apellido</div>
      <div class="table-header">Direccion</div>
      <div class="table-header">Telefono</div>
      <?php
        $resultado = mysql_query($conx, $usuarios);
        while($row=mysql_fetch_assoc($resultado)){
      ?>
        <div class="table-item"><?php echo $row["nombre"]?></div>
        <div class="table-item"><?php echo $row["apellido"]?></div>
        <div class="table-item"><?php echo $row["direccion"]?></div>
        <div class="table-item"><?php echo $row["telefono"]?></div>
      <?php 
        }
      ?>
    </div>
  </body>
</html>