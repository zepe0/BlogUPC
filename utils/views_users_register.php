<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registrarse</title>
    <link rel="stylesheet" href="css_blog.css">
</head>
<body>
    <h1>Registrarse</h1>
    <form action="/users/register.php" method="post">
        <input type="text" name="username" placeholder="Nombre de usuario">
        <input type="password" name="password" placeholder="Contraseña">
        <button type="submit">Registrarse</button>
    </form>
    <a href="/users/login.php">Iniciar Sesión</a>
</body>
</html>