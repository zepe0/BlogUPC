<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog - Listado de Entradas y Nueva Entrada</title>
    <link rel="stylesheet" href="css_blog.css">
</head>
<?php
session_start();
$_SESSION["user"] = 1
    ?>

<body>
    <header>
        <h1>Blog</h1>
        <nav>
            <a href="#listado">Listado de Entradas</a>
            <a href="#nueva">Nueva Entrada</a>
        </nav>
    </header>

    <main>
        <h2>Listado de Entradas</h2>
        <section id='listado' class='sectionPost    '>
            <?php include_once ("../includes/retrivepost.php") ?>
        </section>

        <section id="nueva" class="section">
            <h2>Nueva Entrada</h2>
            <form action="../includes/newpost.php" method="post" enctype="multipart/form-data">
                <div>
                    <label for="title">Título</label>
                    <input type="text" id="title" name="title" required>
                </div>
                <div>
                    <label for="content">Contenido</label>
                    <textarea id="content" name="content" rows="5" required></textarea>
                </div>
                <div>
                    <label for="image">Imagen</label>
                    <input type="file" id="image" name="file">
                </div>
                <div>
                    <label for="image">alt</label>
                    <input type="text" id="alt" name="alt">
                </div>
                <div>

                    <input type="hidden" id="user" name="user" value="<?= $_SESSION['user'] ?>" readonly>

                </div>
                <button type="submit" name="send">Crear Entrada</button>
            </form>
        </section>
    </main>

    <footer>
        <p>&copy; 2024 Blog. Todos los derechos reservados.</p>
    </footer>
</body>

</html>