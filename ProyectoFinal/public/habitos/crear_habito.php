<?php

session_start();
require '../../includes/conexion.php';

// Verificar que el usuario está logueado
if (!isset($_SESSION['usuario_id'])) {
    header("Location: login.php");
    exit();
}



// Obtener las  frecuencias desde la base de datos para mostrarlas en el formulario
$frecuencias = $conn->query("SELECT id_frecuencia, descripcion FROM frecuencias")->fetchAll();

// Mostrar un mensaje de error si viene por GET con ese indicador
$hay_error = isset($_GET['error']) && $_GET['error'] === 'campos_obligatorios';
?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Nuevo Hábito</title>
<link rel="stylesheet" href="../../public/css/style.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
</head>
<body>
<nav class="nav-container">
        <div class="contenido">
            <a href="../../public/home.php" class="nav-logo">BestVersion</a>
            <div class="nav-links">
                <a href="../../public/metas/metas.php">Mis metas</a>
                <a href="../../public/habitos/habitos.php">Mis habitos</a>
                <a href="../../public/animo/estado_animo.php">Estado de Animo</a>
                <a href="../../public/miperfil.php">Mi perfil</a>
            </div>
        </div>
    </nav>
<section>
  <div class="container">
    <div class="box">
        <h2 class="title has-text-centered" style="color: #ffbb98 ;">Crear nuevo hábito</h2>
        <br>
        <?php if ($hay_error): ?>
        <div>
            Por favor, completa todos los campos obligatorios.
        </div>
        <?php endif; ?>

        <form action="../../public/habitos/procesar_habito.php" method="POST">
        <div class="form-registro">
            <label>Nombre del hábito</label>
            <input type="text" name="nombre" required>
        </div>

        <div class="form-registro">
            <label>Descripción</label>
            <textarea name="descripcion"></textarea>
        </div>

        <div class="form-registro">
            <label>Frecuencia</label>
            <div>
            <div>
                <select name="id_frecuencia" required>
                <option value="">Seleccione una frecuencia</option>
                <?php foreach ($frecuencias as $freq): ?>
                    <option value="<?= $freq['id_frecuencia'] ?>"><?= htmlspecialchars($freq['descripcion']) ?></option>
                <?php endforeach; ?>
                </select>
            </div>
            </div>
        </div>
        <div>
            <div>
                <button type="submit" class="boton">Guardar hábito</button>
            </div>
            <br>
            <div>
            <a href="../../public/habitos/habitos.php" class="boton">Cancelar</a>
            </div>
        </div>
        </form>
    </div>
    </div>
</div>
</section>
<img src="../../public/assests/img/habitos.gif" alt="habitos">
<?php
include('../../public/footer.html');
?>
</body>
</html>