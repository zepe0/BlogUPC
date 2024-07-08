<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog - Lista de Entradas</title>
    <link rel="stylesheet" href="css_blog.css">
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
        <h2>Entradas del Blog</h2>
        <div class="cards-container">
            <?php foreach ($posts as $post): ?>
                <div class="card">
                    <img src="<?= htmlspecialchars($post['image_url']) ?>" alt="Imagen de <?= htmlspecialchars($post['title']) ?>" class="card-img">
                    <div class="card-body">
                        <h3 class="card-title"><?= htmlspecialchars($post['title']) ?></h3>
                        <p class="card-text"><?= htmlspecialchars($post['content']) ?></p>
                        <a href="/posts/show.php?id=<?= $post['id'] ?>" class="card-link">Leer más</a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </main>

    <footer>
        <p>&copy; 2024 Blog. Todos los derechos reservados.</p>
    </footer>
</body>
</html>