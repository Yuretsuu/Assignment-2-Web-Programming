<?php
include_once "../DS/User.php";
include_once "../DS/UserDAO.php";

$dao = new UserDAO();
// client has submitted form
if (isset($_REQUEST['submit'])) {
    $user = new User();

    $user->Fname = $_REQUEST['customerFirstName'];
    $user->Lname = $_REQUEST['customerLastName'];
    $user->phone = $_REQUEST['phone'];
    $user->email = $_REQUEST['email'];

    $dao->insertUser($user);
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
    <script src="../JS/validate.js"></script>
</head>
<body>

    <div class="container">
        <h1>Cart Checkout</h1>
        <form method="post" onsubmit= " return validate()">
            <!-- Contact Info -->
            <label for="customerFirstName">First Name</label>
            <input type="text" name= "customerFirstName" id="customerFirstName">

            <label for="customerLastName">Last Name</label>
            <input type="text" name= "customerLastName" id="customerLastName">

            <label for="customerEmail">Email</label>
            <input type="text" name= "email" id="email">
            <div class="errorDiv"></div>

            <label for="customerPhone">Phone</label>
            <input type="text" name= "phone" id="phone">
            <div class="errorDiv"></div>

            <!-- Payment Type -->
            <label for="cardType">Payment Type:</label>
            <select name="cardType" id="cardType">
                <option></option>
                <option value="mastercard">Mastercard</option>
                <option value="visa">Visa</option>
                <option value="Amex">Amex</option>
            </select>
            <div class="errorDiv"></div>
            

            <!-- Card Info -->
            <label for="cardNumber">Card Number</label>
            <input type="text" name= "cardNumber" id="cardNumber">
            <div class="errorDiv"></div>

            <label for="cardExpiry">Expiry</label>
            <input type="date" name= "cardExpiry" id="cardExpiry">
            <div class="errorDiv"></div>

            <label for="CVV">CVV</label>
            <input type="text" name= "CVV" id="CVV" max="999" min="0">

            <input type="submit" name="submit">
            <div class="errorDiv"></div>
        </form>
        <?php include "displayCart.php"; ?>
    </div>    


</body>
</html>