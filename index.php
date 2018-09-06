<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" />
        <link href="https://fonts.googleapis.com/css?family=Neucha" rel="stylesheet" />
        <link rel="stylesheet" href="style.css" />
        <title>TP3</title>
    </head>
    <body>
        <div class="container mt-3">
            <h1 class="text-center mb-5">Auteurs français</h1>
            <?php include 'controllerTP3.php' ?>
            <?php function showArray($array) { ?>
                <ul class="list-unstyled">
                    <li class="media">
                        <img src="<?= $array['portrait'] ?>" class="mb-5" />
                        <div class="media-body">
                            <h3 class="text-center mt-2"><?= $array['name'] . ' ' . $array['firstname']; ?></h3>
                            <p class="text-center text-dark ml-4"><?= $array['presentation'] ?></p>
                        </div>
                    </li>
                </ul>
            <?php } ?>
        </div>
    </body>
</html>
