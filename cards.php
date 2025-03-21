<div class="card-container">
    <?php
    foreach ($cars as $car) {
        $price = number_format($car->price);
        $milage = number_format($car->milage);
        echo
        "
        <div class='card'>
        <a href='carInfo.php'  style='text-decoration: none;'>
        <img src='assets/cars/$car->brand $car->model-front.webp'     >
        <div class='card-content'>
        <div class='logo'>
        <img src='assets/logos/$car->brand-logo.png'>
        $car->brand </div>
        <h > $car->brand $car->model </h>
        <br>
        <br>
        <p>  $price € </p>
        <p style='text-align: right'; > $car->buildYear | $milage Km  </p>
       
       </div>
       </a>
       </div>
       
       ";
    }




    ?>
</div>