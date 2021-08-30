<div class="card mt-5 bg-blue-500 font-bold w-50 ">
    <div class="card-header text-center bg-blue-700
    text-blue-200">
        AGREGAR EMPLEADO
    </div>
    <div class="card-body">
        <form
            class="d-flex justify-content-center flex-column"
        action="" method="post">
            <div class="mb-3">
              <label for="nombre" class="form-label">Nombre:</label>
              <input type="text"
                class="form-control" name="nombre" id="nombre" aria-describedby="helpId"
                 placeholder="Nombre del empleado">
            </div>
            <div class="mb-3">
              <label for="correo" class="form-label">Correo:</label>
              <input type="email"
                class="form-control" name="correo" id="correo"
                 aria-describedby="helpId" placeholder="Correo">
            </div>
            <div class="d-flex justify-content-between">
            <a href="http://localhost/php/php-crud-mvc/?controller=empleados&action=inicio"
            class=" bg-blue-200 p-2 w-34 mx-auto rounded
             font-bold text-blue-800 hover:bg-blue-600 hover:text-white
            "
            >Volver</a>
           
            <input type="submit" value="Guardar" 
            class=" bg-blue-200 p-2 w-34 mx-auto rounded
             font-bold text-blue-800 hover:bg-blue-600 hover:text-white
            ">
           
            </div>
        </form>
    </div>
    <div class="card-footer text-muted bg-blue-300
    p-3 d-flex justify-content-center">
    </div>
</div>