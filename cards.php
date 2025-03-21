<div class="card-container">
    <?php
    foreach ($cars as $car) {
        $price = number_format($car->price);

        echo
        "
        <div class='card'>
        <a href='carInfo.php'  style='text-decoration: none;'>
        <img src='assets/$car->brand $car->model-front.jpg'     >
        <div class='card-content'>
        <div class='logo'>
        <img src='assets/$car->brand-logo.png'>
        $car->brand </div>
        <h > $car->brand $car->model </h>
        <br>
        <br>
       <p>  $price € </p>
        <p style='text-align: right'; > $car->buildYear | $car->milage Km  </p>
       
       </div>
       </a>
       </div>
       
       ";
    }




    ?>
</div>