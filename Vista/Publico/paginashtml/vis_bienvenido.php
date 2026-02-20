<?php
session_start();
$_SESSION['alias'] = $_SESSION['alias'] ?? '';
$_SESSION['correo'] = $_SESSION['correo'] ?? '';
$_SESSION['cedula'] = $_SESSION['cedula'] ?? '';
$_SESSION['clave'] = $_SESSION['clave'] ?? '';

?>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Bienvenido a VALMAPA</title>
        <link rel="stylesheet" href="../../publico/css/principal.css">
    </head>
    <body>
        <table align="center" width="70%" border="0" cellpadding="0" cellspacing="0">
            <tr>
                <td align="center">
                    <h1>Bienvenido a VALMAPA</h1>
                    <?php if ($_SESSION['alias']): ?>
                        <p style="font-size:18px; font-weight:600;">Hola, <?php echo htmlspecialchars($_SESSION['alias'], ENT_QUOTES, 'UTF-8'); ?>.</p>
                    <?php else: ?>
                        <p style="font-size:16px;">No has iniciado sesión.</p>
                    <?php endif; ?>
                </td>
            </tr>
            <tr>
                <td align="center">
                    <img src="../../publico/imagenes/logoagua.png" alt="Logo VALMAPA" width="300">
                </td>
            </tr>
            <tr>
                <td align="center">
                    <p>VALMAPA es una plataforma para la gestión y visualización de datos comunitarios.</p>
                </td>
            </tr>
        </table>
        <br><br>
         <div class="main-content">
            <main title="contenido principal" id="principal">
                <h2>Bienvenido <?php echo $_SESSION['alias'] ?? 'Habitante'; ?></h2>
                <div class="button-container">
                   <form action="vis_bienvenido.php" method="post">
                        <input type="submit" value="Cerrar Sesión" name="Cerrar Sesión">
                        <br>
                        <input type="submit" value="Continuar" name="Continuar">
                        <br>
                   </form>
                </div>
    <br><br>
            </main>
       </div>
        <footer title="pie de página">
            <p>&copy; 2024 CENSO COMUNITARIO VALMAPA. TODOS LOS DERECHOS RESERVADOS.</p>
            <a href="#título">VOLVER ARRIBA</a>
        </footer>
    </body>
</html>
<?php
if (isset($_POST['Cerrar Sesión'])) {
    session_destroy();
    header("Location: ../paginashtml/index.html");
    exit();
}
if (isset($_POST['Continuar'])) {
    header("Location: ../paginashtml/index2.php");
    exit();
}