<main class="auth">
    <h2 class="auth__heading"><?php echo $titulo; ?></h2>
    <p class="auth__texto">Iniciar Sesión en DevWebCamp</p>


    <form class="formulario">
        <div class="formulario__campo">
            <label for="email" class="formulario__label">E-mail:</label>
            <input
                type="email"
                class="formulario__input"
                placeholder="Tu E-mail"
                id="email"
                name="email">
        </div>

        <div class="formulario__campo">
            <label for="password" class="formulario__label">Contraseña:</label>
            <input
                type="password"
                class="formulario__input"
                placeholder="Tu Contraseña"
                id="password"
                name="password">
        </div>
        <input class="formulario__submit" type="submit" value="Iniciar Sesión">
    </form>

    <div class="acciones">
        <a href="/registro" class="acciones__enlace">¿Aún no tienes una cuenta? Registraté Aquí!</a>
        <a href="/olvide" class="acciones__enlace">¿Olvidaste tu contraseña?</a>

    </div>

</main>