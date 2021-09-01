<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Favicon -->
        <link rel="icon" href="./assets/image/favicon-32x32.png" type="image/gif" sizes="32x32">
        <link rel="shortcut icon" href="./assets/image/favicon-32x32.png" type="image/gif" sizes="32x32">
        <link rel="apple-touch-icon" href="./assets/image/apple-touch-icon.png" type="image/gif">
        <!-- Google Font CDN -->
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <!-- Fontawesome -->
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
            integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
        <!-- Tailwindcss -->
        <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
        <title>Empleados php crud mvc</title>
    </head>
  <body>
    <nav class="navbar navbar-expand navbar-light bg-yellow-300 d-flex justify-content-center">
        <div class="nav navbar-nav d-flex justify-content-center">
            <a class="nav-item m-3 font-bold text-black hover:text-blue-800" href="http://localhost/php/php-crud-mvc/?controller=pages&action=inicio">Inicio</a>
            <!--<a class="nav-item m-3 font-bold text-black hover:text-blue-800" href="http://localhost/php/php-crud-mvc/?controller=pages&action=sistema">Sistema</a>-->
            <a class="nav-item m-3 font-bold text-black hover:text-blue-800" href="http://localhost/php/php-crud-mvc/?controller=empleados&action=inicio">Empleados</a>
            <!--<a class="nav-item m-3 font-bold text-black hover:text-blue-800" href="http://localhost/php/php-crud-mvc/?controller=pages&action=tailwindcss">TailwindCSS</a>-->
        </div>
    </nav>
    <div class="container">
        <div class="row">
            <div class="col-12 d-flex justify-content-center">
                <?php include_once("router.php"); ?>
            </div>
        </div>
    </div>
    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>