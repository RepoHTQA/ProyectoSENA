<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SISO</title>
    
</head>
<body>
    <?php require 'views/header.php'; ?>
    

    <div id="main">
        <h1 class="center">Crear categorías</h1>

        <div class="center"><?php echo $this->mensaje; ?></div>

        <form class="form-horizontal" id="form1" action="  <?php echo constant('URL'); ?>nuevo/registrarCategorias" method="POST">

            <div class="form-group"> 
                <label for="cateNomb">Nombre de la categoría</label><br>
                <input type="text" name="cateNomb" id="" required>
            </div>
            
            <div class="form-group">
            <input type="submit" class="btn btn-default" value="Crear categoría">
            </div>

        </form>
    </div>

    <?php require 'views/footer.php'; ?>
</body>
</html>