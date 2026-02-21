<?php
session_start();
$_SESSION['alias'] = $_SESSION['alias'] ?? '';

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Censo VALMAPA</title>
    <link rel="stylesheet" href="../css/principal.css">
</head>
<body>
<div class="container">
    <header>
        <h1>Actualización de Censo Comunitario VALMAPA</h1>
    </header>
    <main>
        <form action="../../Controlador/con_actualizarcenso.php" method="post">
            <div class="form-group">
                <label for="nombre">Nombres:</label>
                <input type="text" id="nombre" name="nombre" required>
            </div><br><br>
            <div class="form-group">
                <label for="apellido">Apellidos:</label>
                <input type="text" id="apellido" name="apellido" required>
            </div><br><br>
            <div class="form-group">
                <label for="sexo">Sexo:</label>
                 <select id="sexo" name="sexo" required>
                    <option value="">Seleccione</option>
                    <option value="M">Masculino</option>
                    <option value="F">Femenino</option>
                </select>
            </div><br><br>
            <div class="form-group">
                <label for="edad">Edad:</label>
                <input type="number" id="edad" name="edad" min="13">
            </div><br><br>
            <div class="form-group">
                <label for="discapacidad">¿Sufre alguna discapacidad?:</label>
                <input type="text" id="discapacidad" name="discapacidad">
            </div><br><br>
            <div class="form-group">
                <label for="covidvacuna">¿Tiene la vacuna contra el COVID?:</label>
                <input type="text" id="covidvacuna" name="covidvacuna" required>
            </div><br><br>
            <div class="form-group">
                <label for="niveleducativo">Nivel Educativo:</label>
                <select id="niveleducativo" name="niveleducativo" required>
                    <option value="">Seleccione</option>
                    <option value="Primaria">Primaria</option>
                    <option value="Secundaria">Secundaria</option>
                    <option value="Bachillerato">Bachillerato</option>
                    <option value="Universitario">Universitario</option>
                </select>
            </div><br><br>
            <div class="form-group">
                <label for="ocupacion">Ocupación:</label>
                <input type="text" id="ocupacion" name="ocupacion" required>
            </div><br><br>
            <div class="form-group">
                <label for="pension">¿Recibe pensión?:</label>
                <input type="text" id="pension" name="pension" required>
            </div><br><br>
            <div class="form-group">
                <label for="calle">Dirección de Calle:</label>
                <input type="text" id="calle" name="calle" required>
            </div><br><br>
            <div class="form-group">
                <label for="nacimiento">Su fecha de nacimiento:</label>
                <input type="date" id="nacimiento" name="nacimiento" required>
            </div><br><br>
            <div class="form-group">
                <label for="correo">Su Correo Electrónico:</label>
                <input type="email" id="correo" name="correo" required>
            </div><br><br>
            <div class="form-group">
                <label for="estadocivil">Estado Civil:</label>
                <input type="text" id="estadocivil" name="estadocivil" required>
                </select>
            </div><br><br>
            <div class="form-group">
                <label for="telefono">Número de teléfono:</label>
                <input type="number" id="telefono" name="telefono" min="1">
            </div><br><br>
            <div class="button-group">
                <button class="nav-button" type="submit">Enviar</button>
                <button class="nav-button" type="reset">Reiniciar</button>
            </div><br><br>
        </form>
        <div class="button-container">
            <button class="nav-button" type="button" onclick="window.location.href='index2.php'">Regresar a Inicio</button>
        </div>
    </main>
</html>
<?php
if (isset($_POST['Cerrar Sesión'])) {
    session_destroy();
    header("Location: ../paginashtml/index.html");
    exit();
}


?>
<footer title="pie de página">
            <p>&copy; 2024 CENSO COMUNITARIO VALMAPA. TODOS LOS DERECHOS RESERVADOS.</p>
            <a href="#título">VOLVER ARRIBA</a>
        </footer>