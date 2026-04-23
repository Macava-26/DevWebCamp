<main class="auth">
    <h2 class="auth__heading"><?php echo $titulo; ?></h2>
    <p class="auth__texto">Reestablece tu Contraseña</p>

    <?php
    require_once __DIR__ . '/../templates/alertas.php';
    ?>



    <?php if ($token_valido) { ?>

        <form method="POST" class="formulario">
            <div class="formulario__campo">
                <label for="password" class="formulario__label">Nueva Contraseña</label>
                <input
                    type="password"
                    class="formulario__input"
                    placeholder="Nuevo Password"
                    id="password"
                    name="password">
            </div>

            <input class="formulario__submit" type="submit" value="Guardar Password">
        </form>
    <?php } ?>

    <div class="acciones">
        <a href="/login" class="acciones__enlace">¿Ya tienes una cuenta? Inicia Sesión Aquí!</a>
        <a href="/registro" class="acciones__enlace">¿Aún no tienes una cuenta? Registraté Aquí!</a>
    </div>
</main>