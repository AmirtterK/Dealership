
<?php
$db_server = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "carsdb";
$conn = "";

try {
    $conn = mysqli_connect($db_server, $db_user, $db_pass, $db_name);
} catch (mysqli_sql_exception) {
    
    echo  "<p style='color: white;'> Database: not connected </p>";
}

if ($conn)
// echo  "<p style='color: white;'> Database: connected </p>";
// $sql = "INSERT INTO cars (brand,model,year,price) VALUES ('Mercedes','AMG-ONE',2019,1800000)";
// mysqli_query($conn,$sql);
$sql = "SELECT * FROM available_cars";
$cars = [];
$response = mysqli_query($conn, $sql);
foreach ($response as $car) {
    $cars[] = new Car($car["brand"], $car["model"], $car["year"], $car["milage"], $car["price"]);
}

mysqli_close($conn);
