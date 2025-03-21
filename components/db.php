
<?php
$db_server = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "dealership";
$conn = "";

try {
    $conn = mysqli_connect($db_server, $db_user, $db_pass, $db_name);
} catch (mysqli_sql_exception) {

    echo  "<p style='color: white;'> Database: not connected </p>";
}

if ($conn)
    $sql = "SELECT * FROM availableCars";

$cars = [];
$response = mysqli_query($conn, $sql);
foreach ($response as $car) {
    $cars[] = new Car($car["id"], $car["brand"], $car["model"], $car["body"], $car["exteriorColor"], $car["interiorColor"], $car["driveType"], $car["transmission"], $car["price"], $car["buildYear"], $car["milage"], $car["topSpeed"], $car["acceleration"], $car["liters"], $car["shape"], $car["cylinders"], $car["aspiration"], $car["eMotor"], $car["hp"], $car["torque"], $car["displacement"], $car["weight"], $car["width"], $car["length"], $car["height"], $car["wheelBase"], $car["description"]);
}


mysqli_close($conn);
