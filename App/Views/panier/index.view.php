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
                    <!-- ici le code -->
                    <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Name</th>
                                    <th scope="col">Price</th>
                                    <th scope="col">Quantité</th>
                                    <th scope="col">Supprimer</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($products as $product): ?>
                                    <tr>
                                        <th scope="row"><?= $product->nameProduct; ?></th>
                                        <td><?= $product->price; ?> €</td>
                                        <td><?= $_SESSION['panier'][$product->id]; ?></td>
                                        <td>
                                            <form method="post" action="">
                                                <div class="form-group">
                                                    <input type="hidden" name="id" value="<?= $product->id; ?>" />
                                                    <button type="submit" name="delOneBin" class="btn btn-danger">Supprimer</button>
                                                </div>
                                            </form>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                        <form method="post" action="">
                            <div class="form-group">
                                <button type="submit" name="delBin" class="btn btn-danger">Supprimer le panier</button>
                            </div>
                        </form>
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
