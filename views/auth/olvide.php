<main class="auth">
    <h2 class="auth__heading"><?php echo $titulo; ?></h2>
    <p class="auth__texto">Recuperar Contraseña</p>

    <?php
    require_once __DIR__ . '/../templates/alertas.php';
    ?>

    <form method="POST" action="/olvide" class="formulario">
        <div class="formulario__campo">
            <label for="email" class="formulario__label">E-mail:</label>
            <input
                type="email"
                class="formulario__input"
                placeholder="Tu E-mail"
                id="email"
                name="email">
        </div>

        <input class="formulario__submit" type="submit" value="Restablecer Contraseña">
    </form>

    <div class="acciones">
        <a href="/login" class="acciones__enlace">¿Ya tienes una cuenta? Inicia Sesión Aquí!</a>
        <a href="/registro" class="acciones__enlace">¿Aún no tienes una cuenta? Registraté Aquí!</a>

    </div>

</main>