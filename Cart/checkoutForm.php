<?php

// client has submitted form
if (isset($_REQUEST['submit'])) {

    $_SESSION['user']['name'] = $_REQUEST['customerFirstName'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet"type="text/css" href="inserthere.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Liz Quach">
    <meta name="email" content="quac0042@algonquinlive.com">
    <meta name="date" content="2022-12-02">
    <title>Webpage</title>
</head>
<body>

    <div class="container">
        <h1>Cart Checkout</h1>
        <form>
            <!-- Contact Info -->
            <label for="customerFirstName">First Name</label>
            <input type="text" name= "customerFirstName" id="customerFirstName">

            <label for="customerLastName">Last Name</label>
            <input type="text" name= "customerLastName" id="customerLastName">

            <label for="customerEmail">Email</label>
            <input type="text" name= "email" id="email">

            <label for="customerPhone">Phone</label>
            <input type="text" name= "phone" id="phone">

            <!-- Payment Type -->
            <label for="paymentType">Payment Type:</label>
            <select name="paymentType" id="paymentType">
                <option></option>
                <option value="mastercard">Mastercard</option>
                <option value="visa">Visa</option>
                <option value="Amex">Amex</option>
            </select>
            

            <!-- Card Info -->
            <label for="cardNumber">Card Number</label>
            <input type="number" name= "cardNumber" id="cardNumber">

            <label for="cardExpiry">Expiry</label>
            <input type="date" name= "cardExpiry" id="cardExpiry">

            <label for="CVV">CVV</label>
            <input type="number" name= "CVV" id="CVV" max="999" min="0">
            <input type="submit" name="submit">
        </form>
        <?php include "displayCart.php"; ?>
    </div>    


</body>
</html>