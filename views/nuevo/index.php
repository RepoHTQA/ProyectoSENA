<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    
</head>
<body>
    <?php require 'views/header.php'; ?>
    

    <div id="main">
        <h1 class="center">Crear categorías</h1>

        <div class="center"><?php echo $this->mensaje; ?></div>

        <form class="form-horizontal" id="form1" action="  <?php echo constant('URL'); ?>nuevo/registrarAlumno" method="POST">

            <div class="form-group"> 
                <label for="matricula">Nombre de la categoria</label><br>
                <input type="text" name="matricula" id="" required>
            </div>
            <div class="form-group">
                <label for="nombre">Nombre</label><br>
                <input type="text" name="nombre" id="" required>
           </div>
            <div class="form-group">
                <label for="apellido">Apellido</label><br>
                <input type="text" name="apellido" id="" required>
            </div>

            <div class="form-group">
            <input type="submit" class="btn btn-default" value="Registrar nuevo alumno">
            </div>

        </form>
    </div>

    <?php require 'views/footer.php'; ?>
</body>
</html>