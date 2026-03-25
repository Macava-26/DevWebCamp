<main class="auth">
    <h2 class="auth__heading"><?php echo $titulo; ?></h2>
    <p class="auth__texto">Registrate en DevWebCamp</p>


    <div class="formulario__campo">
        <label for="nombre" class="formulario__label">Nombre:</label>
        <input
            type="text"
            class="formulario__input"
            placeholder="Tu Nombre"
            id="nombre"
            name="nombre">
    </div>
    <div class="formulario__campo">
        <label for="apellido" class="formulario__label">Apellido:</label>
        <input
            type="text"
            class="formulario__input"
            placeholder="Tu Apellido"
            id="apellido"
            name="apellido">
    </div>



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
        <div class="formulario__campo">
            <label for="password2" class="formulario__label">Confirmar Contraseña:</label>
            <input
                type="password"
                class="formulario__input"
                placeholder="Confirma tu Contraseña"
                id="password2"
                name="password2">
        </div>
        <input class="formulario__submit" type="submit" value="Confirmar">
    </form>

    <div class="acciones">
        <a href="/login" class="acciones__enlace">¿Ya tienes una cuenta? Inicia Sesión Aquí!</a>
        <a href="/olvide" class="acciones__enlace">¿Olvidaste tu contraseña?</a>

    </div>

</main>