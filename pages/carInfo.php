<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <?php
  session_start();
  include "../components/carClass.php";

  if (isset($_GET['id']) && isset($_SESSION['cars'][$_GET['id']])) {
    $car = unserialize($_SESSION['cars'][$_GET['id']]);
  }
  echo "<title>$car->buildYear $car->brand $car->model | MarciaUno</title>"

  ?>

  <link rel="stylesheet" href="../index.css" type="text/css" />
  <link rel="icon" href="../assets/logos/logo.jpg" type="image/x-icon" />
</head>

<body>
  <?php
  include "../components/load.html";
  include "../components/header.html";
  ?>
  <div class="model-name">
    <?php
    if (str_contains($car->model, "Maybach"))
      $brand = "Maybach";
    else
      $brand = $car->brand;

    echo
    "
    <div class='brand-logo'>
    <a href='index.php?class={$car->brand}'>
    <img src='../assets/logos/$brand-logo.png' alt='$brand-logo'></div>
    </a>
    <p>$car->brand $car->model</p>
     
     "

    ?>
  </div>
  <div class="info-row">
    <div class="spec-image-container">
      <div class="spec-wrapper">
        <?php
        echo "<img src='../assets/cars/$car->brand $car->model-front.webp' />";
        echo "<img src='../assets/cars/$car->brand $car->model-back.webp' />"
        ?>

      </div>
    </div>
    <?php
    if ($car->sold) {
      $status = "sold";
    }
    $price = number_format($car->price);
    $milage = number_format($car->milage);

    if ($car->eMotor == 0)
      $electric = "";
    else if ($car->eMotor == 1)
      $electric = "<br> + " . $car->eMotor . " E-Motor";
    else
      $electric = "<br> + " . $car->eMotor . " E-Motors";

    $motor = number_format($car->liters, 1) . "L " . $car->shape . $car->cylinders . " " . $car->aspiration . $electric;

    if ($car->liters == 0)
      if ($car->eMotor == 1)
        $motor = $car->eMotor . " Electric Motor";
      else

        $motor = $car->eMotor . " Electric Motors";

    echo
    "
    <div class='model-specifications-details'>
      <div class='detail-box' style='border-top-left-radius: 8px; border-top-right-radius: 8px;';>
        <p>SPECIFICATIONS</p>
      </div>
      <dl class='car-specs'>

        <dt>YEAR</dt>
        <dd>$car->buildYear</dd>

        <dt>MILEAGE</dt>
        <dd>$milage Km</dd>

        <dt>EXTERIOR COLOR</dt>
        <dd>$car->exteriorColor</dd>
        
        <dt>INTERIOR COLOR</dt>
        <dd>$car->interiorColor</dd>
        
        <dt>DRIVE TYPE</dt>
        <dd>$car->driveType</dd>
        
        <dt>ENGINE</dt>
        <dd>$motor</dd>
      
        <dt>BODY TYPE</dt>
        <dd>$car->body</dd>
      
        <dt>TRANSMISSION</dt>
        <dd>$car->transmission Transmission</dd>
      
        </dl>
      <div class='detail-box' style=' border-bottom-left-radius: 8px; border-bottom-right-radius: 8px;';>
        <p>$price €</p>
        </div>
        ";
    if ($car->sold) {
      echo "
      <div class='detail-box' style='border-radius: 8px; margin-top: 20px; ';>
          <p>SOLD</p>
        </div>
      ";
    } else {
      $carId = $car->id;
      $carPrice = $car->price;
      //$urlNext = "inputForm.php?price=" . urlencode($carPrice);
      echo '
      <a href="inputForm.php?carId=' . urlencode($carId) . '&price=' . urlencode($carPrice) . '" > 
      <div class="detail-box" style="border-radius: 8px; margin-top: 20px; ";>
          <p>PURCHASE</p>
        </div>
        </a>
      ';
    }

    ?>

  </div>

  </div>
  <?php
  echo
  "
  <ul class='extra-specs'>
    <h2>Performance:</h2>
    <li>
      <h3>Maximum Power:</h3>
      $car->hp Horsepower
    </li>
    <li>
      <h3>Maximum Torque:</h3>
      $car->torque NM
    </li>
    <li>
      <h3>Maximum Speed:</h3>
      $car->topSpeed KM/H
    </li>
    <li>
      <h3>0-100 KM/H (62MPH) In:</h3>
      $car->acceleration s
    </li>
    <li>
      <h3>Engine Displacement:</h3>
      $car->displacement CC
    </li>
    <li>
      <h3>Overall Weight:</h3>
      $car->weight KG
    </li>
    <li>
      <h3>Overall Width:</h3>
      $car->width M
    </li>
    <li>
      <h3>Overall Length:</h3>
      $car->length M
    </li>
    <li>
      <h3>Overall Height:</h3>
      $car->height M
    </li>
    <li>
      <h3>Overall Wheelbase:</h3>
      $car->wheelBase M
    </li>
  </ul>
  "
  ?>

  <div class="more-details">
    <h2>More Details:</h2>
    <p>

      <?php
      echo $car->description;
      ?>

    </p>
  </div>
  <?php include "../components/footer.html" ?>

</body>

</html>