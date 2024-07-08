<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    <link rel="stylesheet" href="/public/css/styles.css">
</head>
<body>
    <header>
        <h1>Blog</h1>
        <nav>
            <a href="/posts/index.php">Inicio</a>
            <a href="/posts/new.php">Nueva Entrada</a>
        </nav>
    </header>

    <main>
        <!-- Aquí se incluirá el contenido específico de cada página -->
        <?php include($view); ?>
    </main>

    <footer>
        <p>&copy; 2024 Blog. Todos los derechos reservados.</p>
    </footer>
</body>
</html>