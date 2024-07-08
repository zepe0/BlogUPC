<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog - Listado de Entradas y Nueva Entrada</title>
    <link rel="stylesheet" href="css_blog.css">
</head>

<body>
    <header>
        <h1>Blog</h1>
        <nav>
            <a href="#listado">Listado de Entradas</a>
            <a href="#nueva">Nueva Entrada</a>
        </nav>
    </header>

    <main>
        <section id="listado" class="section">
            <h2>Listado de Entradas</h2>
            <div class="cards-container">
                <div class="card">
                    <img src="/public/images/post1.jpg" alt="Imagen de Ejemplo 1" class="card-img">
                    <div class="card-body">
                        <h3 class="card-title">Título de Ejemplo 1</h3>
                        <p class="card-text">Contenido de ejemplo para la entrada del blog. Esto es una vista previa.
                        </p>
                        <a href="/views/posts/show.php?id=1" class="card-link">Leer más</a>
                    </div>
                </div>
                <div class="card">
                    <img src="/public/images/post2.jpg" alt="Imagen de Ejemplo 2" class="card-img">
                    <div class="card-body">
                        <h3 class="card-title">Título de Ejemplo 2</h3>
                        <p class="card-text">Contenido de ejemplo para la entrada del blog. Esto es una vista previa.
                        </p>
                        <a href="/views/posts/show.php?id=2" class="card-link">Leer más</a>
                    </div>
                </div>
                <div class="card">
                    <img src="/public/images/post3.jpg" alt="Imagen de Ejemplo 3" class="card-img">
                    <div class="card-body">
                        <h3 class="card-title">Título de Ejemplo 3</h3>
                        <p class="card-text">Contenido de ejemplo para la entrada del blog. Esto es una vista previa.
                        </p>
                        <a href="/views/posts/show.php?id=3" class="card-link">Leer más</a>
                    </div>
                </div>
            </div>
        </section>

        <section id="nueva" class="section">
            <h2>Nueva Entrada</h2>
            <form action="/controllers/posts.php?action=create" method="post" enctype="multipart/form-data">
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
                    <input type="file" id="image" name="image">
                </div>
                <button type="submit">Crear Entrada</button>
            </form>
        </section>
    </main>

    <footer>
        <p>&copy; 2024 Blog. Todos los derechos reservados.</p>
    </footer>
</body>

</html>