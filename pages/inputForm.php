<?php

$dbserver = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "dealership";
$tablename = "credit_cards";
$tablename_cars = "Cars";
$connection = new mysqli($dbserver, $dbusername, $dbpassword, $dbname);

$status = '';
$message = '';
$icon = '';

$Price = $_POST["price"] ?? $_GET["price"];
$carPrice = (int)$Price;

$carId = $_POST["carId"] ?? $_GET["carId"];   
$CarId = (int)$carId;

$cardholderName = $_POST["cardholderName"] ?? '';
$cardPassword = $_POST["cardPassword"] ?? '';
$cardNumber = $_POST["cardNumber"] ?? '';
$expiryMonth = $_POST["expiryMonth"] ?? '';
$expiryYear = $_POST["expiryYear"] ?? '';
$cvv = $_POST["cvv"] ?? '';

if (isset($_POST["submitButton"])) {
    if (!empty($cardholderName) && !empty($cardNumber) && !empty($expiryMonth) && 
        !empty($expiryYear) && !empty($cvv) && !empty($cardPassword)) {
        
        $sql = "SELECT CardholderName, CardPassword, Expiry_Month, Expiry_Year, CVV, Balance 
                FROM $tablename WHERE Card_Number='$cardNumber'"; 
        $result = mysqli_query($connection, $sql);
        
        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            if ($cardholderName == $row["CardholderName"] && 
                $cardPassword == $row["CardPassword"] && 
                $expiryMonth == $row["Expiry_Month"] && 
                $expiryYear == $row["Expiry_Year"] && 
                $cvv == $row["CVV"]) {

                
                if ($carPrice <= $row["Balance"]) { 
                    $newBalance = $row["Balance"] - $carPrice;
                    $updateSqlBalance = "UPDATE $tablename SET Balance = $newBalance WHERE Card_Number = '$cardNumber'";
                    $update = mysqli_query($connection, $updateSqlBalance);

                    $updateSqlSold = "UPDATE $tablename_cars SET sold = 1 WHERE id = '$CarId'";
                    $update = mysqli_query($connection, $updateSqlSold);
                    
                    $status = 'success';
                    $message = "Car bought Successfully!";
                    $icon = '../assets/CorrectIcon.png';
                } else {
                    $status = 'insufficient';
                    $message = 'Insufficient Balance';
                    $icon = '../assets/WrongIcon.png';
                }
            } else {
                $status = 'wronginfo';
                $message = 'Incorrect Card Details';
                $icon = '../assets/WrongIcon.png';
            }
        } else {
            $status = 'notexist';
            $message = 'Card Not Found';
            $icon = '../assets/WrongIcon.png';
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Checkout | MarciaUno</title>
    <link rel="stylesheet" href="../index.css" type="text/css" />
    <link rel="icon" href="../assets/logos/logo.jpg" type="image/x-icon" />
    <style>
        .feedback-container {
            text-align: center;
            margin: 50px auto;
            padding: 20px;
            max-width: 500px;
        }
        .feedback-icon {
            width: 100px;
            height: 100px;
            margin-bottom: 20px;
        }
        .feedback-message {
            font-size: 24px;
            margin-bottom: 20px;
        }
    </style>
</head>

<body>
    <?php
    include "../components/load.html";
    include "../components/header.html";
    ?>

    <?php if (empty($status)): ?>
        <div id="formContainer">
            <div id="inputForm">
                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                    <input type="hidden" name="price" value="<?php echo htmlspecialchars($_GET["price"] ?? ''); ?>">
                    <input type="hidden" name="carId" value="<?php echo htmlspecialchars($_GET["carId"] ?? ''); ?>">
                    <?php include "../components/input2.html"; ?>
                </form>
            </div>
        </div>
    <?php else: ?>
        <div id="formContainer">
            <div id="inputForm">
                <div class="feedback-container">
                    <img src="<?php echo $icon; ?>" alt="Status Icon" class="feedback-icon">
                    <div class="feedback-message"><?php echo $message; ?></div>
                    <div>Redirecting in 3 seconds...</div>
                    <?php if ($status == 'success'): ?>
                      <meta http-equiv="refresh" content="5;url=index.php">
                    <?php else: ?>
                      <meta http-equiv="refresh" content="5;url=inputForm.php?carId=<?php echo urlencode($CarId); ?>&amp;price=<?php echo urlencode($carPrice); ?>">
                    <?php endif; ?>
                </div>
            </div>
        </div>


    <?php endif; ?>

    <?php include "../components/footer.html"; ?>
</body>
</html>