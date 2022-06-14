<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Recuperar contraseña</title>
    <link rel="stylesheet" href="/assets/css/recuperar.css">

</head>

<body>
    <div class="login-box">
        <h2>Recuperar contraseña</h2>
        <h3>Ingrese su correo electrónico para restablecer su contraseña</h3>
        <form>
            <div class="user-box">
                <input type="text" name="correo" required="">
                <label>Correo electrónico</label>
            </div>
            <a href="{{route('restablecer')}}">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                Aceptar
            </a>
        </form>
    </div>

</body>

</html>
