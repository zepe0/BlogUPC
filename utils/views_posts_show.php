<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= htmlspecialchars($post['title']) ?></title>
    <link rel="stylesheet" href="css_blog.css">
</head>
<body>
    <h1><?= htmlspecialchars($post['title']) ?></h1>
    <p><?= htmlspecialchars($post['content']) ?></p>
    <p>Autor: <?= htmlspecialchars($post['author_id']) ?></p>
    <h2>Comentarios</h2>
    <ul>
        <?php foreach ($comments as $comment): ?>
            <li><?= htmlspecialchars($comment['content']) ?> - <?= htmlspecialchars($comment['user_id']) ?></li>
        <?php endforeach; ?>
    </ul>
    <form action="/posts/comment.php" method="post">
        <input type="hidden" name="post_id" value="<?= $post['id'] ?>">
        <textarea name="content"></textarea>
        <button type="submit">Agregar Comentario</button>
    </form>
    <a href="/posts/edit.php?id=<?= $post['id'] ?>">Editar</a>
    <a href="/posts/delete.php?id=<?= $post['id'] ?>">Eliminar</a>
    <a href="/posts/index.php">Volver a la lista</a>
</body>
</html>