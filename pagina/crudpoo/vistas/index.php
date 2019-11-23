<div class="container" style="margin-top: 80px">
    <div class="jumbotron">
        <h2>Registro de informacion</h2>
        
    </div>
    <div class="container">
        <table class="table table-striped ">
            <thead>
                <tr>
                    <th>id</th>
                    <th>nombre</th>
                    <th>descripcion</th>
                    <th>ubicacion</th>
                    <th>costo</th>
                    <th>fecha</th>
                    <th>acción</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($query as $data): ?>
                    <tr>
                        <th><?php echo $data['id']; ?></th>
                        <th><?php echo $data['nombre']; ?></th>
                        <th><?php echo $data['descripcion']; ?></th>
                        <th><?php echo $data['ubicacion']; ?></th>
                        <th><?php echo $data['costo']; ?></th>
                        <th><?php echo $data['fecha']; ?></th>
                        <th>
                            <a href="index.php?m=informacion&id=<?php echo $data['id']?>" class="btn btn-primary">Editar</a>
                            <a href="index.php?m=confirmarDelete&id=<?php echo $data['id']?>" class="btn btn-danger">Eliminar</a>
                        </th>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    
</div>