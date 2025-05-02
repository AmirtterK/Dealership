<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="../index.css" type="text/css" />
  <link rel="icon" href="../assets/logos/logo.jpg" type="image/x-icon" />

  <title>Newest Arrivals | MarciaUno</title>
</head>

<body class="news-body">
  <?php
  session_start();
  include "../components/load.html";
  include "../components/header.html";
  include "../components/carClass.php";
  function getCarId(string $name): int
  {
    foreach ($_SESSION['cars'] as $carId => $car) {
      $car = unserialize($car);
      $Carname = $car->brand . " " . $car->model;

      if ($name === $Carname) {
        $id = $car->id;
        break;
      }
    }
    return $id;
  }

  ?>

  <div class="news-section">
    <section>
      <div class="news-details">
        <h1>Ferrari Daytona SP3</h1>
        <p style="line-height: 2">
          AT THE 1967 24 HOURS OF DAYTONA, FERRARI TOOK THE TOP THREE PLACES
          IN THE FIRST ROUND OF THE INTERNATIONAL WORLD SPORTS CAR
          CHAMPIONSHIP. THE 330 P3/4, 330 P4 AND 412 P THAT FAMOUSLY SHOT PAST
          THE CHECKERED FLAG SIDE BY SIDE PERFECTLY ENCAPSULATED THE SPIRIT OF
          THE SPORTS PROTOTYPES OF THE 1960S, A DECADE NOW CONSIDERED THE
          GOLDEN ERA OF CLOSED WHEEL RACING. THE FERRARI DAYTONA SP3, THE
          SECOND CAR TO JOIN THE LIMITED EDITION ICONA SERIES, PAYS HOMAGE TO
          THE MID-REAR-ENGINED FERRARI V12 SPORTS PROTOTYPES THAT EARNED THE
          MARQUE ITS UNPARALLELED MOTOR SPORT STATUS.
        </p>
      </div>

      <div class="news-card">
        <?php
        $name = "Ferrari Daytona SP3";
        $id = getCarId($name);
        echo "<a href='carInfo.php?id={$id}' style='border-radius: inherit'>";
        ?>
        <div class="image-container">
          <img
            src="../assets/news/1-Ferrari-Daytona-SP3.jpg"
            alt="Ferrari Daytona SP3" />
        </div>
        <div class="news-card-details">
          <h2>Daytona SP3</h2>
          <p>Discover...</p>
        </div>
        </a>
      </div>
    </section>
  </div>
  <div class="news-section">
    <section>
      <div class="news-details">
        <h1>Mercedes-Benz 300 SL</h1>
        <p style="line-height: 2">
          A MUSICAL INSTRUMENT DOESN'T ALWAYS HAVE TO BE A SIMPLE TOOL, IT CAN
          BE SOMETHING EXTRAORDINARY, SOMETHING THAT STEALS THE SPOTLIGHT
          WHEREVER IT GOES, WHETHER ON THE CLASSIC ITALIAN ROADS, THE SPANISH
          COUNTRYSIDE, OR EVEN A RACETRACK. A TOOL THAT MAKES EVERYONE ADMIRE
          ITS BEAUTY AND ELEGANCE—SOMETHING THAT STANDS OUT. AND WE HAVE THAT
          TOOL. INTRODUCING THE MERCEDES-BENZ 300 SL, A STAR FROM THE '70S THAT
          STILL MAKES YOU WANT TO ENJOY THOSE CALM ROAD TRIPS. WITH ITS
          LIGHTWEIGHT 2.8L ENGINE, IT DELIVERS JUST ENOUGH POWER TO OUTPERFORM
          EVERYTHING ON THE ROADS WHILE MAINTAINING CLASSIC ELEGANCE.
          <br />
          <br />
          1 OUT OF 300 CONVERTIBLES AVAILABLE NOW.
        </p>
      </div>
      <div class="news-card">
        <?php

        $name = "Mercedes-Benz 300 SL";
        $id = getCarId($name);
        echo "<a href='carInfo.php?id={$id}' style='border-radius: inherit'>";

        ?>
        <div class="image-container" style="height: 600px; width: 500px">
          <img src="../assets/news/mercedes-300sl.jpg" alt="mercedes-300sl" />
        </div>
        <div class="news-card-details">
          <h2>300 SL</h2>
          <p>Discover...</p>
        </div>
        </a>
      </div>
    </section>
  </div>
  <div class="news-section">
    <section>
      <div class="news-details">
        <h1>Lamborghini Huracan Tecnica</h1>
        <p style="line-height: 2">
          CELEBRATING ITS 63 ANNIVERSARY, LAMBORGHINI INTRODUCES THE ALL NEW
          HURUCANE EVO, AN EXCELLENT MIXTURE OF MASTERCLASS OF ENGINEERING
          THROUGH YEARS OF R&D AND THE LUXRY THAT HAS BEEN A BAR FOR US SINCE
          THE REVEAL OF OUR FIRST MODEL THE LAMBORGHINI GT A DECADE AGO.<br /><br />
          THE HURACAN CARRIES LAMBORGHINI'S DNA WITH ITS TECHNOLOGIE AND
          POWERTRAIN MARKING THE NEW ERA WHILE KEEPING ITS ROOTS FOR OUR LOYAL
          CUSTOMERS. <br /><br />
          GET YOUR ALL NEW HURACAN EVO NOW IN OUR DEALERSHIP.
        </p>
      </div>
      <div class="news-card">
        <?php
        $name = "Lamborghini Huracan Tecnica";
        $id = getCarId($name);
        echo "<a href='carInfo.php?id={$id}' style='border-radius: inherit'>";

        ?>
        <div class="image-container">
          <img
            src="../assets/news/Lamborghini-collection.jpg"
            alt="Lamborghini Huracan Tecnica" />
        </div>
        <div class="news-card-details">
          <h2>Huracan Tecnica</h2>
          <p>Discover...</p>
        </div>
        </a>
      </div>
    </section>
  </div>
  <div class="news-section">
    <section>
      <div class="news-details">
        <h1>911 TURBO</h1>
        <p style="line-height: 2">
          50 YEARS AGO THE FIRST 911 TURBO WAS RELEASED TO PUBLIC ROADS,
          ROARING THROUGH THE STREET WITH ITS TURBOCHARGED POWER UNIT FOR
          EVERYONE TO ADMIRE THE BEAUTY OF GERMAN ENGINEERING AND MASTERCLASS
          CRAFT. <br /><br />
          THE ALL NEW 911 TURBO S FEATURES 3.0L SIX-CYLINDER ENGINE WITH
          PORSCHE'S EVOLUTIONARY <br />
          8-SPEED PDK TRANSMISSION FOR OUR CUSTOMERS TO EXPERIENCE THE PUREST
          FORM OF TRACK EXPERIENCE, THE SAME EXPERINCE THAT PORSCHE HAVE BEEN
          PUSHING IN INTERNATIONAL RACES IN ITS HYPERCERS. <br /><br />
          THE ALL NEW 911 IS AVAILABLE RIGHT NOW IN LIMITED NUMBERS.
        </p>
      </div>
      <div class="news-card">
        <?php
        $name = "Porsche 911 Sport Classic";
        $id = getCarId($name);
        echo "<a href='carInfo.php?id={$id}' style='border-radius: inherit'>";

        ?>
        <div class="image-container" style="height: 600px; width: 500px">
          <img src="../assets/news/Porsche-collection.jpg" alt="porsche 911" />
        </div>
        <div class="news-card-details">
          <h2>911 TURBO</h2>
          <p>Discover...</p>
        </div>
        </a>
      </div>
    </section>
  </div>
  <?php include "../components/footer.html" ?>
</body>

</html>