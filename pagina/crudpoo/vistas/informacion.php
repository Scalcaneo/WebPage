<div class="container">
    <div class="jumbotron">
        <h2>Formulario registro</h2>

    </div>
    <div class="col-md-6 col-md-offset-3">
        <div class="form-horizontal" style="">
            <?php if($data['id']==""){ ?>
            <form action="index.php?m=get_datosE" method="post">
            <?php } ?>
            <?php if($data['id']!=""){ ?>
            <form action="index.php?m=get_datosE&id=<?php echo $data['id'];?>" method="post">
            <?php } ?>

                <div class="form-group">
                    <label class=" col-sm-2 control-label" for="id">ID:</label>
                    <div class="col-sm-10">
                <input type="text" class="form-control" name="id" value="<?php echo $data['id']; ?>">
                    </div>
                    
                </div>
                <div class="form-group">
                    <label class=" col-sm-2 control-label" for="nombre">Nombre:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="nombre" value="<?php echo $data['nombre']; ?>">
                    </div>
                    
                </div>
                <div class="form-group">
                    <label class=" col-sm-2 control-label" for="descripcion">Descripcion:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="descripcion" value="<?php echo $data['descripcion']; ?>">
                    </div>
                    
                </div>
                <div class="form-group">
                    <label class=" col-sm-2 control-label" for="ubicacion">Ubicacion:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="ubicacion" value="<?php echo $data['ubicacion']; ?>">
                    </div>
                    
                </div>
                <div class="form-group">
                    <label class=" col-sm-2 control-label" for="costo">Costo:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="costo" value="<?php echo $data['costo']; ?>">
                    </div>
                    
                </div>
                <div class="form-group">
                    <label class=" col-sm-2 control-label" for="fecha">fecha:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="fecha" value="<?php echo $data['fecha']; ?>">
                    </div>
                    
                </div>
                <div class="form-group">
                    <div class="col-md-12 col-md-off-set-3">
                    <?php if($data['id']==""){ ?>
                        <input type="submit" class="btn btn-primary form-control" name="" value="registrar">
                    <?php }  ?>
                    <?php if($data['id']!=""){ ?>
                    <input type="submit" class="btn btn-primary form-control" name="" value="Actualizar">
                    <?php }  ?>
                    </div>
                </div>
            </form>
            
        </div>
    </div>
    
</div>