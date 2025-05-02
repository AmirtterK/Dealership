<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    session_start();
    if (!isset($_GET['class']))
        $_GET['class'] = "";
    switch ($_GET['class']) {
        case '':
            echo "<title>Monaco's Premium Cars | MarciaUno</title>";
            break;
        case 'race':
            echo "<title>Race cars | MarciaUno</title>";
            break;
        case 'hyper':
            echo "<title>Hyper Cars | MarciaUno</title>";
            break;
        case 'super':
            echo "<title>Super Cars | MarciaUno</title>";
            break;
        case 'classic':
            echo "<title>Classic Cars | MarciaUno</title>";
            break;
        case 'suv':
            echo "<title>Suv's | MarciaUno</title>";
            break;
        case 'sold':
            echo "<title>Sold Cars | MarciaUno</title>";
            break;
        default:
            echo "<title>{$_GET['class']}'s | MarciaUno</title>";
            break;
    }

    ?>
    <link rel="stylesheet" href="../index.css" type="text/css" />
    <link rel="icon" href="../assets/logos/logo.jpg" type="image/x-icon" />

</head>

<body style="flex-direction:column;">

    <?php
    include "../components/load.html";
    include "../components/header.html";
    if ($_GET['class'] === "")
        include "../components/slider.html";
    else if ($_GET['class'] === "sold" || $_GET['class'] === "hyper" || $_GET['class'] === "super" || $_GET['class'] === "classic" || $_GET['class'] === "suv" || $_GET['class'] === "race")
        include "../components/category.php";
    include "../components/carClass.php"; 
    include "../components/db.php";
    include "../components/cards.php";
    include "../components/footer.html";
    ?>


</body>


</html>