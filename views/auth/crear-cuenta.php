<h1 class="nombre-pagina">Crear cuenta</h1>
<p class="descripcion-pagina">Llena el siguiente formulario para crear una cuenta</p>

<?php
include_once __DIR__ . "/../templates/alertas.php";
?>

<form action="" class="formulario" method="post">
    <div class="campo">
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" id="nombre" placeholder="Tu nombre" value="<?php echo s($usuario->nombre); ?>">
    </div>
    <div class="campo">
        <label for="apellido">Apellido</label>
        <input type="text" name="apellido" id="apellido" placeholder="Tu apellido" value="<?php echo s($usuario->apellido); ?>">
    </div>
    <div class="campo">
        <label for="telefono">Teléfono</label>
        <input type="tel" name="telefono" id="telefono" placeholder="Tu teléfono" value="<?php echo s($usuario->telefono); ?>">
    </div>
    <div class="campo">
        <label for="email">Email</label>
        <input type="email" name="email" id="email" placeholder="Tu email" value="<?php echo s($usuario->email); ?>">
    </div>
    <div class="campo">
        <label for="password">Contraseña</label>
        <input type="password" name="password" id="password" placeholder="Tu contraseña">
    </div>

    <input class="boton" type="submit" value="Crear cuenta">
</form>

<div class="acciones">
    <a href="/olvide">¿Olvidaste tu contraseña?</a>
    <a href="/">Iniciar sesión</a>
</div>