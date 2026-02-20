<?php 
session_start();

$_SESSION['alias'] = $_SESSION['alias'] ?? '';
$_SESSION['correo'] = $_SESSION['correo'] ?? '';
$_SESSION['clave'] = $_SESSION['clave'] ?? '';
$_SESSION['cedula'] = $_SESSION['cedula'] ?? '';
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Censo Comunitario VALMAPA</title>
    <link rel="stylesheet" href="../../publico/css/principal.css">
</head>
<body>
    <div class="container">
        <header title="Cavecera" id="título">
            <h1>Vista Al Mar Arrecife Parte Alta</h1>
            <img src="../../publico/imagenes/logoagua.png" alt="Logo VALMAPA" class="logo"
            width="600" height="550">
            <h1>Censo Comunal VALMAPA</h1>
            <a href="#principal" class="skip-link">Ir al contenido principal</a>
        </header>

        <div class="main-content">
            <main title="contenido principal" id="principal">
                <h2>Bienvenido <?php echo $_SESSION['alias'] ?? 'Habitante'; ?> a la Plataforma Comunal</h2>
                <p><strong>Comprometidos con la Comunidad:</strong> <br> Promoviendo la participación ciudadana y el desarrollo sostenible.</p>
                <div class="button-container">
                    <a href="vis_eliminar.html" class="nav-button">Eliminar Usuario</a>
                    <a href="vis_actualizaruser.php" class="nav-button">Actualizar Usuario</a>
                    <a href="vis_solicitar.html" class="nav-button">Solicitar Datos</a>
                    <a href="censo.html" class="nav-button">Rellenar Censo</a>
                </div>
            </main>
       </div> <br>
        <form action="index.html" method="post">
                        <input type="submit" value="Cerrar Sesión" name="Cerrar Sesión">
        <footer title="pie de página">
            <p>&copy; 2024 CENSO COMUNITARIO VALMAPA. TODOS LOS DERECHOS RESERVADOS.</p>
            <a href="#título">VOLVER ARRIBA</a>
        </footer>
    </div>
</body>
</html>
<?php
if (isset($_POST['Cerrar Sesión'])) 
{
    session_destroy();
    header("Location: ../paginashtml/index.html");
    exit();

}






