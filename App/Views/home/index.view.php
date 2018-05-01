<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <title>Panier</title>
        <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" />
        <link rel="stylesheet" type="text/css" href="public/css/style.css" />
    </head>
    <body>
        <header>
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="#">E-commerce</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Home</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a href="?page=panier" class="nav-link"><i class="fas fa-shopping-cart"></i> Panier</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <main role="main">
            <section class="jumbotron text-center">
                <div class="container">
                    <h1 class="jumbotron-heading">Boutique E-commerce !</h1>
                    <p class="lead text-muted">Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression.</p>
                    <p>
                        <a href="#" class="btn btn-primary my-2">Main call to action</a>
                        <a href="#" class="btn btn-secondary my-2">Secondary action</a>
                    </p>
                </div>
            </section>
        </main>
        <div class="album py-5 bg-light">
            <div class="container">
                <div class="row">
                    <?php foreach ($clothes as $clothe): ?>
                        <div class="col-md-4">
                            <div class="card mb-4 box-shadow">
                                <img class="card-img-top" src="public/images/products/<?= $clothe->image; ?>" alt="Card image cap">
                                <div class="card-body">
                                    <h3><?= $clothe->nameProduct; ?></h3>
                                    <p class="card-text"><?= $clothe->description; ?></p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group">
                                            <a href="?page=show&id=<?= $clothe->id; ?>" class="btn btn-sm btn-outline-secondary"><i class="fas fa-eye"></i> Voir</a>
                                            <a href="#" class="btn btn-sm btn-outline-secondary"><i class="fas fa-shopping-cart"></i> +</a>
                                            <button type="button" class="btn btn-sm btn-outline-secondary"><?= $clothe->price; ?> €</button>
                                        </div>
                                        <small class="text-muted"><?= $clothe->dateAdd; ?></small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
        <footer class="text-muted">
            <div class="container">
                <p class="float-right">
                    <a href="#">Back to top</a>
                </p>
                <p>Album example is &copy; Bootstrap, but please download and customize it for yourself!</p>
                <p>New to Bootstrap? <a href="../../">Visit the homepage</a> or read our <a href="../../getting-started/">getting started guide</a>.</p>
            </div>
        </footer>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script defer src="https://use.fontawesome.com/releases/v5.0.10/js/all.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
    </body>
</html>
