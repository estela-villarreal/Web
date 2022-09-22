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
   <div class="container">
      <h1>Alta de Alumnos</h1>
      <form action="altaAlumno2.php" method="post">
          <div class="mb-3"> 
            <label for="nombre" class="form-label">
                Ingrese nombre:</label>
            <input type="text" class="form-control" id="name" name="nombre">
          </div>
          <div class="mb-3"> 
            <label for="mail" class="form-label">
                Ingrese mail:</label>
            <input type="text" class="form-control" name="mail">
          </div>
          <div class="mb-3"> 
            <label for="codigocurso" class="form-label">
                Seleccione el curso:</label>
            <select class="form-select mb3" id="codigocurso" name="codigocurso">
                <?php
                $conexion = conectar("base1");
                $registros = mysqli_query($conexion, "select codigo,nombrecurso from cursos") or
                  die("Problemas en el select:" . mysqli_error($conexion));
                while ($reg = mysqli_fetch_array($registros)) {
                  echo "<option value=\"$reg[codigo]\">$reg[nombrecurso]</option>";
                }
                ?>
           </select>
          </div>
          <div class="mb-9 row"> 
            <div class="offset-sm3 col-sm9">
              <input type="submit" value="Registrar">
            </div>
          </div>
      </form>
    </div>  
     <!--************jsBoostrap***********-->
  <script src="../js/boostrap.boudle.min.js"></script>
</body>
</html>