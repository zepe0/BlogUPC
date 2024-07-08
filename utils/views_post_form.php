<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= isset($post['id']) ? 'Editar' : 'Nueva' ?> Entrada</title>
    <link rel="stylesheet" href="css_blog.css">
</head>
<body>
    <header>
        <h1><?= isset($post['id']) ? 'Editar' : 'Nueva' ?> Entrada</h1>
        <nav>
            <a href="/posts/index.php">Inicio</a>
        </nav>
    </header>

    <main>
        <form action="<?= isset($post['id']) ? "/controllers/posts.php?action=update&id={$post['id']}" : '/controllers/posts.php?action=create' ?>" method="post" enctype="multipart/form-data">
            <div>
                <label for="title">Título</label>
                <input type="text" id="title" name="title" value="<?= htmlspecialchars($post['title'] ?? '') ?>" required>
            </div>
            <div>
                <label for="content">Contenido</label>
                <textarea id="content" name="content" required><?= htmlspecialchars($post['content'] ?? '') ?></textarea>
            </div>
            <div>
                <label for="image">Imagen</label>
                <input type="file" id="image" name="image">
            </div>
            <button type="submit"><?= isset($post['id']) ? 'Actualizar' : 'Crear' ?></button>
        </form>
    </main>

    <footer>
        <p>&copy; 2024 Blog. Todos los derechos reservados.</p>
    </footer>
</body>
</html>