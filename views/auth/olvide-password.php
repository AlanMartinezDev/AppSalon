<h1 class="nombre-pagina">¿Olvidaste tu contraseña?</h1>
<p class="descripcion-pagina">Reestablece tu contraseña escribiendo tu email a continuación</p>

<?php
include_once __DIR__ . "/../templates/alertas.php";
?>

<form action="/olvide" class="formulario" method="post">
    <div class="campo">
        <label for="email">Email</label>
        <input type="email" name="email" id="email" placeholder="Tu email">
    </div>

    <input class="boton" type="submit" value="Enviar instrucciones">
</form>

<div class="acciones">
    <a href="/">Iniciar sesión</a>
    <a href="/crear-cuenta">Crear cuenta</a>
</div>