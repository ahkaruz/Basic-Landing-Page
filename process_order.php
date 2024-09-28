<?php
require "dbConnect.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $mobile = $_POST["mobile"];
    $address = $_POST["address"];
    $deliveryCharge = htmlspecialchars($_POST["deliveryOption"]);
    $price = 3150;
    $totalAmount = $price + $deliveryCharge;

    if ($deliveryCharge == 80) {
        $deliveryOption = "insideDhaka";
    } else {
        $deliveryOption = "outsideDhaka";
    }

    $sql = "INSERT INTO orders (productId, cutomerName, customerMobile, customerAddress, totalAmount, deliveryCharge, deilveryOption) VALUES ('01', '$name', '$mobile', '$address', '$totalAmount', '$deliveryCharge', '$deliveryOption')";

    if ($conn->query($sql) === TRUE) {
        header("Location: index.php?success=true");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>