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
                            <a href="#" class="nav-link"><i class="fas fa-shopping-cart"></i> Panier</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <div class="album py-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <img style="width: 100%;" src="public/images/products/<?= $product[0]->image; ?>" />
                    </div>
                    <div class="col-md-6">
                        <h1><?= $product[0]->nameProduct; ?> | <strong><?= $product[0]->brand; ?></strong></h1>
                        <p><?= $product[0]->description; ?></p>
                        <p><?= $product[0]->price; ?> €</p>
                        <form method="post" action="">
                            <div class="input-group mb-3">
                                <select class="custom-select" id="inputGroupSelect02">
                                    <option selected>1</option>
                                    <option value="1">2</option>
                                    <option value="2">3</option>
                                    <option value="3">4</option>
                                </select>
                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-primary"><i class="fas fa-shopping-cart"></i> +</button>
                                </div>
                            </div>
                        </form>
                    </div>
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
