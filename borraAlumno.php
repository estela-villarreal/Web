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
  $registros = mysqli_query($conexion, "select codigo from alumnos
                        where mail='$_REQUEST[mail]'") or
    die("Problemas en el select:" . mysqli_error($conexion));
  if ($reg = mysqli_fetch_array($registros)) {
    mysqli_query($conexion, "delete from alumnos where mail='$_REQUEST[mail]'") or
      die("Problemas en el select:" . mysqli_error($conexion));
    echo "Se efectuó el borrado del alumno con dicho mail.";
  } else {
    echo "No existe un alumno con ese mail.";
  }
  mysqli_close($conexion);
  ?>
  <!--************jsBoostrap***********-->
  <script src="../js/boostrap.boudle.min.js"></script>
</body>
</html>