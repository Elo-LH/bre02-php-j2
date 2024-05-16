<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8" />
    <title>Exercice require</title>
    <link rel="stylesheet" href="assets/style.css" />
</head>

<body>
    <?php require "header.php" ?>
    <?php 
    switch ($route) {
        case "home":
            require "home.php";
            break;
        case "about":
            require "about.php";
            break;
        case "contact":
            require "contact.php";
            break;
        default:
            require "home.php";
            break;
    }
    
    
     ?>
    <?php require "footer.php" ?>

</body>

</html>