<?php 
session_start();
// Source - https://stackoverflow.com/a/1270960
// Posted by Gumbo, modified by community. See post 'Timeline' for change history
// Retrieved 2026-02-21, License - CC BY-SA 3.0

if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 1800)) {
    // last request was more than 30 minutes ago
    session_unset();     // unset $_SESSION variable for the run-time 
    session_destroy();   // destroy session data in storage
}
$_SESSION['LAST_ACTIVITY'] = time(); // update last activity time stamp


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
    <link rel="stylesheet" href="../css/principal.css">
</head>
<body>
    <div class="container">
        <header title="Cavecera" id="título">
            <h1>Vista Al Mar Arrecife Parte Alta</h1>
            <img src="../imagenes/logoagua.png" alt="Logo VALMAPA" class="logo"
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
                    <a href="vis_solicitar.html" class="nav-button">Verificar Datos</a>
                    <a href="censo.html" class="nav-button">Rellenar Censo</a>
                </div>
            </main>
       </div> <br>
       <div>
        <form action="index.html" method="post">
                        <input class="nav-button" type="submit" value="Cerrar Sesión" name="Cerrar Sesión">
        </div>
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






