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
  mysqli_query($conexion, "insert into alumnos(nombre,mail,codigocurso) values 
                       ('$_REQUEST[nombre]','$_REQUEST[mail]',$_REQUEST[codigocurso])")
    or die("Problemas en el select" . mysqli_error($conexion));

  mysqli_close($conexion);

  echo "El alumno fue dado de alta.";
  ?>
  <!--************jsBoostrap***********-->
  <script src="../js/boostrap.boudle.min.js"></script>
</body>
</html>