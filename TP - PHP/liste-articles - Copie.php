<!doctype html>
<html lang="en">

<head>
<?php include 'head.php'; ?>
</head>

<body>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="index2.php">Mon super blog</a>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="index2.php">Accueil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="liste-articles.php">Mes super articles</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>


        <h1>Mes super articles</h1>
        <div class="list-group my-4">
            <article class="list-group-item list-group-item-action" aria-current="true">
                <div class="d-flex w-100 justify-content-between">
                    <h2 class="mb-1">Le titre d'un super article</h2>
                    <small>Le 28/12/2020</small>
                </div>
                <p class="mb-1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas tempore quisquam assumenda. Vel fugiat fuga consequuntur id et nulla obcaecati perspiciatis necessitatibus! Harum repellendus dolorum iste rerum corporis adipisci maxime?
                    Unde, ducimus exercitationem. Pariatur ab, adipisci, laboriosam ducimus, ipsam voluptas id sint repudiandae...</p>
                <small class="text-muted"><a href="article.php">Lire l'article.</a></small>
            </article>
            <article class="list-group-item list-group-item-action">
                <div class="d-flex w-100 justify-content-between">
                    <h2 class="mb-1">Le titre d'un super article 2</h2>
                    <small class="text-muted">Le 28/12/2020</small>
                </div>
                <p class="mb-1">Impedit odio quae sapiente molestiae exercitationem atque odit, accusantium eveniet illum pariatur iste quidem totam recusandae obcaecati voluptatibus sed quos eos nulla nisi assumenda quod sit dicta cupiditate aut. Illum.
                    Vitae iste impedit deserunt ex necessitatibus sit sequi ea blanditiis consectetur quaerat.</p>
                <small class="text-muted"><a href="article2.php">Lire l'article.</a></small>
            </article>
            <article class="list-group-item list-group-item-action">
                <div class="d-flex w-100 justify-content-between">
                    <h2 class="mb-1">Le titre d'un super article 3</h2>
                    <small class="text-muted">Le 28/12/2020</small>
                </div>
                <p class="mb-1">Ullam exercitationem nemo tenetur. Aliquid quam fugiat commodi veniam nostrum in facere consectetur minus natus fugit? Perspiciatis deserunt ducimus consequuntur. Ipsa non rem sit nesciunt asperiores labore atque vitae incidunt.
                    Velit itaque sint dignissimos voluptate nulla, perferendis perspiciatis saepe placeat quos deleniti cum, mollitia autem.</p>
                <small class="text-muted"><a href="article3.php">Lire l'article.</a></small>
            </article>
        </div>
    </div>

</body>

</html>