<div class="container mt-12">
    <div class="row">
        <div class="col-12 d-flex justify-content-center flex-column">

        <h2 class="h2 mx-auto mt-2 mb-4">Listado de empleados</h2>

        <a 
        href="http://localhost/php/php-crud-mvc/?controller=empleados&action=crear"
        class="bg-blue-400 w-25 font-bold 
        align-self-center mb-3 rounded text-blue-50
        hover:bg-blue-300 text-center hover:text-blue-50 
        py-1 px-1 text-decoration-none text-xs md:text-lg
        ">AGREGAR NUEVO EMPLEADO</a>

<table class="table table-success table-hover rounded">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Correo</th>
            <th>Accion</th>
        </tr>
    </thead>
    <tbody>

    <?php foreach ($empleados as $empleado){ ?>
        <tr>
            <td> <?php echo $empleado->id ?> </td>
            <td> <?php echo $empleado->nombre ?> </td>
            <td> <?php echo $empleado->correo ?> </td>
            <td> 
              <a href="http://localhost/php/php-crud-mvc/?controller=empleados&action=editar&id=<?php echo $empleado->id ?>">Editar</a> 
            | <a href="http://localhost/php/php-crud-mvc/?controller=empleados&action=eliminar&id=<?php echo $empleado->id ?>">Eliminar</a>
            </td>
        </tr>
    <?php } ?>

    </tbody>
</table>

        </div>
    </div>
</div>