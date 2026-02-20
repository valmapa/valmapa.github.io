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
    <link rel="stylesheet" href="../../publico/css/principal.css">
</head>
<body>
    <div class="container">
        <header title="cavecera" id="título">
            <h1>Vista Al Mar Arrecife Parte Alta</h1>
            <img src="../../publico/imagenes/logoagua.png" alt="Logo VALMAPA" class="logo"
            width="400" height="450">
            <h1>Censo Comunal VALMAPA</h1>
            <a href="#principal" class="skip-link">Ir al contenido principal</a>
        </header>
        <main title="contenido principal" id="principal">
            <h1>Actualizar Datos de Usuario</h1>
            <form action="../../../Controlador/con_actualizaruser.php" method="post">
                <label for="alias"> <strong>Usuario:</strong></label>
                <input type="text" id="alias" name="alias" required><br><br>
                <label for="correo"> <strong>Correo:</strong></label>
                <input type="email" id="correo" name="correo" required><br><br>
                <label for="clave"> <strong>Clave:</strong></label>
                <input type="password" id="clave" name="clave" required><br><br>
                <button type="submit" value="actualizar">Actualizar Usuario</button>
            </form>
            <div class="button-container">
                <a href="index2.php" class="nav-button">Regreso a Inicio</a>
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
if (isset($_POST['actualizar'])) {
    // Aquí puedes agregar la lógica para manejar la actualización del usuario
    // Por ejemplo, puedes redirigir a otra página o mostrar un mensaje de bienvenida
    echo "Usuario actualizado exitosamente, $alias!";

}