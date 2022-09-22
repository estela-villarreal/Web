<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
  <!-- ***********css**********-->
  <link rel="stylesheet" href="estilos.css"/>
  <!--*************cssBootstrap**********-->
  <link href="../css/bootstrap.min.css" rel="stylesheet"/>
  <?php include("libreria.php"); ?>
</head>
<body>

  <?php
  $conexion = conectar("base1");
  $registros = mysqli_query($conexion, "select * from alumnos
                        where mail='$_REQUEST[mail]'") or
    die("Problemas en el select:" . mysqli_error($conexion));
  if ($reg = mysqli_fetch_array($registros)) {
    ?>

    <form action="modifAlumno2.php" method="post">
      Ingrese nuevo mail:
      <input type="text" name="mailnuevo" value="<?php echo $reg['mail'] ?>">
      <br>
      <input type="hidden" name="mailviejo" value="<?php echo $reg['mail'] ?>">
      <input type="submit" value="Modificar">
    </form>

  <?php
  } else
    echo "No existe alumno con dicho mail";
  ?>
  <!--************jsBoostrap***********-->
  <script src="../js/boostrap.boudle.min.js"></script>
</body>
</html>