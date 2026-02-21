<?php
session_start();
$alias = $_POST['alias'] ?? '';
$correo = $_POST['correo'] ?? '';
$clave = $_POST['clave'] ?? '';
$cedula = $_POST['cedula'] ?? '';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de Sesión</title>
    <link rel="stylesheet" href="../css/principal.css">
</head>
<body>
    <div class="container">
        <header title="cavecera" id="título">
            <h1>Vista Al Mar Arrecife Parte Alta</h1>
            <img src="../imagenes/logoagua.png" alt="Logo VALMAPA" class="logo"
            width="400" height="450">
            <h1>Censo Comunal VALMAPA</h1>
            <a href="#principal" class="skip-link">Ir al contenido principal</a>
        </header>
        <main title="contenido principal" id="principal">
            <h1>Inicio de Sesión</h1>
            <form action="../../Controlador/con_login.php" method="post">
                <label for="cedula"> <strong>Cédula:</strong></label>
                <input type="text" id="cedula" name="cedula" required><br><br>
                <label for="clave"> <strong>Clave:</strong></label>
                <input type="password" id="clave" name="clave" required><br><br>
                <button class="nav-button" type="submit" value="iniciar">Iniciar Sesión</button>
            </form>
            <div class="button-container">
                <a href="index.html" class="nav-button">Regreso a Inicio</a>
            </div>
        </main>
       </div>
       <div>
        <footer title="pie de página">
            <p>&copy; 2024 CENSO COMUNITARIO VALMAPA. TODOS LOS DERECHOS RESERVADOS.</p>
            <a href="#título">VOLVER ARRIBA</a>
        </footer>
    </div>
</body>
</html>
<?php
$_SESSION['alias'] = $alias;
$_SESSION['correo'] = $correo;
$_SESSION['clave'] = $clave;
$_SESSION['cedula'] = $cedula;
?>