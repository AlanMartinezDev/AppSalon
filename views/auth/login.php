<h1 class="nombre-pagina">Login</h1>
<p class="descripcion-pagina">Iniciar sesión con tus datos</p>

<?php
include_once __DIR__ . "/../templates/alertas.php";
?>

<form action="/" class="formulario" method="POST">
    <div class="campo">
        <label for="email">Email</label>
        <input type="email" name="email" id="email" placeholder="Tu email">
    </div>

    <div class="campo">
        <label for="password">Contraseña</label>
        <input type="password" name="password" id="password" placeholder="Tu contraseña">
    </div>

    <input class="boton" type="submit" value="Iniciar sesión">
</form>

<div class="acciones">
    <a href="/olvide">¿Olvidaste tu contraseña?</a>
    <a href="/crear-cuenta">Crear cuenta</a>
</div>