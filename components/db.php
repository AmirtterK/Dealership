
<?php
$db_server = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "dealership";
$conn = "";

$conn = mysqli_connect($db_server, $db_user, $db_pass);
if (!$conn) {
    echo  "<p style='color: white;'> Database not connected </p>";
}

$sql = "CREATE DATABASE IF NOT EXISTS $db_name";
$conn->query($sql);

$conn->select_db($db_name);

$path = __DIR__ . DIRECTORY_SEPARATOR . 'create_tables.sql';
$sql = file_get_contents($path);
$conn->multi_query($sql);

do {
    if ($result = $conn->store_result()) {
        $result->free();
    }
} while ($conn->more_results() && $conn->next_result());

// handle credit cards
if ($conn)
    $sql = "SELECT * FROM Credit_cards";
$response = $conn->query($sql);

if (!$response || mysqli_num_rows($response) == 0) {
    $path = __DIR__ . DIRECTORY_SEPARATOR . 'fill_cards.sql';

    $sql = file_get_contents($path);

    $conn->multi_query($sql);

    do {
        if ($result = $conn->store_result()) {
            $result->free();
        }
    } while ($conn->more_results() && $conn->next_result());
}

// handle cars

if ($conn)
    $sql = "SELECT * FROM Cars";
$response = $conn->query($sql);

if (!$response || mysqli_num_rows($response) == 0) {
    $path = __DIR__ . DIRECTORY_SEPARATOR . 'fill_cars.sql';

    $sql = file_get_contents($path);

    $conn->multi_query($sql);

    do {
        if ($result = $conn->store_result()) {
            $result->free();
        }
    } while ($conn->more_results() && $conn->next_result());


    if ($conn)
        $sql = "SELECT * FROM Cars";
    $response = $conn->query($sql);
}


$cars = [];

foreach ($response as $car) {
    $cars[] = new Car(
        $car["id"],
        $car["sold"],
        $car["brand"],
        $car["model"],
        $car["body"],
        $car["exteriorColor"],
        $car["interiorColor"],
        $car["driveType"],
        $car["transmission"],
        $car["price"],
        $car["buildYear"],
        $car["milage"],
        $car["topSpeed"],
        $car["acceleration"],
        $car["liters"],
        $car["shape"],
        $car["cylinders"],
        $car["aspiration"],
        $car["eMotor"],
        $car["hp"],
        $car["torque"],
        $car["displacement"],
        $car["weight"],
        $car["width"],
        $car["length"],
        $car["height"],
        $car["wheelBase"],
        $car["description"],
    );
}


mysqli_close($conn);
