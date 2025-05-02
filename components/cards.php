<div class="card-container">
    <?php
    foreach ($cars as $car) {

        switch ($_GET['class']) {
            case '':
                if ($car->sold)
                    continue 2;
                break;
            case 'sold':
                if (!$car->sold)
                    continue 2;                   
                break;
            case 'race':
                if (!($car->topSpeed >= 300 && (str_contains($car->transmission, "Sequential") || str_contains($car->model, "RS") || str_contains($car->model, "AMG") || str_contains($car->model, "EVO"))))
                    continue 2;
                break;
            case 'hyper':
                if ($car->hp < 900 || $car->acceleration > 3.5 || $car->topSpeed < 320)
                    continue 2;
                break;
            case 'super':
                if ($car->hp < 700 || str_contains($car->body, "SUV"))
                    continue 2;
                break;
            case 'classic':
                $current_year = date("Y");
                if ($current_year - $car->buildYear < 20)
                    continue 2;
                break;
            case 'suv':
                if (!str_contains($car->body, "SUV"))
                    continue 2;
                break;
            default:
                if (!($_GET['class'] === $car->brand))
                    continue 2;

                break;
        }

        $price = number_format($car->price)." € ";
        $milage = number_format($car->milage);
        if($car->sold){
            $price="Sold";
        }
        if (str_contains($car->model, "Maybach")) {
            $logo = "Maybach";
            $brand = "Maybach";
        } else {
            $logo = $car->brand;
            $brand = $car->brand;
        }
        $_SESSION['cars'][$car->id] = serialize($car);
        echo
        "
        <div class='card'>
        <a href='carInfo.php?id={$car->id}'>
        <img src='../assets/cars/$car->brand $car->model-front.webp'     >
        <div class='card-content'>
        <div class='logo'>
        <img src='../assets/logos/$logo-logo.png '>
        $brand </div>
        <h > $car->brand $car->model</h>
        <br>
        <br>
        <p>  $price</p>
        <p style='text-align: right'; > $car->buildYear | $milage Km  </p>
        
        </div>
        </a>
       </div>
       
       ";
    }

    ?>
</div>